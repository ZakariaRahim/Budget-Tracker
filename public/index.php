    <?php
    include_once '../private/init.php';
    include_once SHARED_PATH .'/header.php';
    
    ?>
    <link rel="stylesheet" href="../styles/login.css">
    <div class="container-fluid">
        <div class="login-form">
            <h4>Please Enter Your Details to Login</h4>
            <form action="Login.html" method="post">
                <div class="rap-content">
                    <div class="form-group">
                     
                        <input type="text" class="form-control" placeholder="User Name or Id">   <i class="fas fa-sign-in"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="department" placeholder="Password"
                            required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color:black"
                            name="bsubmit">Login </button>

                    </div>

                    <div class="footer">
                    <?php
    include_once SHARED_PATH .'/footer.php';
    
    ?>
                    </div>

            </form>


        </div>

    </div>
  

   
