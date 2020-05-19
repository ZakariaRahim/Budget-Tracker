    <?php
    include_once '../private/init.php';
    $title = "Login";
    include_once SHARED_PATH .'/header.php';
    
    ?>
    <div class="container-fluid">
        <div class="login-form">
            
            <form action="Login.html" method="post">
                <p class='login-title'>login here</p>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="UserId">   <i class="fas fa-sign-in"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="department" placeholder="Password"
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
           
   
