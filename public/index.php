    <?php
    include_once '../private/init.php';
    $title = "Login";
    include_once SHARED_PATH .'/header.php';


    if(isset($_POST['submit'])){

        $id = $_POST['user_id'] ?? '';
        $password = $_POST['password'] ?? '';
        User::signin($id, $password);
    }
    
    ?>
    <link rel="stylesheet" href="styles/index.css">
    <div class="container">
        <div class="login-form">
            <p class='login-title'>login here</p>
            <?php if(!empty($error))var_dump($error); ?>
            <form action="index.php" method="post">
                
                <div class="form-group">
                    <input type="text" class="form-control"
                    name="user_id" placeholder="UserId" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"
                        required="required">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-login btn-block" 
                        name="submit">Login </button>
                </div>
            </form>
        </div>

    </div>
  

   
