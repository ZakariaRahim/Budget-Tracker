    <?php
    include_once '../private/init.php';
    $title = "Singup";
    include_once SHARED_PATH .'/header.php';


    if(isset($_POST['submit']))
    {
        $id = $_POST['user_id'] ?? '';
        $email = $_POST['email'] ?? '';
        $password1 = $_POST['password1'] ?? '';
        $password2 = $_POST['password2'] ?? '';


        $user = new User($id, $email);
        $user->user_type = 1;
        

        if($password1 == $password2)
        {
            $user->set_password($password1);
        }
        $user->create_user();


    }
    
    ?>
    <div class="container">
        <div class="login-form">
            <p class="login-title">Sign user up</p>
            <?php if(!empty($error))var_dump($error); ?>
            <form action="signup.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Userid" required name="user_id">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required name="email">  
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password"
                        required name="password1">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Retype Password"
                        required name="password2">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-login btn-block" 
                        name="submit">Signup </button>
                </div>

            </form>


        </div>

    </div>
     
   