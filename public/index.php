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
    <div class="container-fluid">
        <div class="login-form">
            <?php var_dump($error); ?>
            <form action="index.php" method="post">
                <p class='login-title'>login here</p>
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
  
<?php    //include_once SHARED_PATH .'/footer.php';  ?>
           
   
