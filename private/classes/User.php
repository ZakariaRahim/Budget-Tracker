<?php

class User{

    public $user_id;
    public $email;
    public $user_type;
    private $password;

    public function __construct($user_id, $email){
        $this->user_id = $user_id;
        $this->email = $email;
    }

    public function set_password($pass)
    {
        $this->password = password_hash($pass, PASSWORD_DEFAULT);
    }

    public function get_password()
    {
        return $this->password;
    }

    public function create_user()
    {
        global $db;

        // first of all check to see if the user id has been registered already...
        $result = $db->select('users',[],['user_id' => $this -> user_id])->aResults;
        if(empty($result)){
            $sql = "insert into users(user_id, email, user_type, password) values(?, ?, ?, ?)";
            return $db->pdoQuery($sql, [$this->user_id, $this->email, $this->user_type, $this->password]);
        }else{
            global $error;
            array_push($error, 'User id already registered');
        }
        
    }

    public static function signin($id, $pass)
    {
        global $db;
        $result = $db->select('users' , [], ['user_id' => $id])->aResults[0];
       
        if(!empty($result))
        {
            if(password_verify($pass, $result['password'])){
                $_SESSION['user'] = $result;
                redirect_to(url_for('dashboard.php'));
            }else{
                global $error;
                array_push($error, 'Wrong Username and Password combination');
            }
        }else{
            global $error;
            array_push($error, 'Wrong Username and Password combination');
        }


    }

    public static function requireLogin(){
        if(empty($_SESSION['user'])){
            redirect_to(url_for('/index.php'));
        }
        
    }

}