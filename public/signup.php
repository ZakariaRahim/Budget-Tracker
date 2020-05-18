    <?php
    include_once '../private/init.php';
    include_once SHARED_PATH .'/header.php';
    
    ?>
    <link rel="stylesheet" href="../styles/signup.css">
    <div class="container-fluid">
        <div class="signup-form">
            <h4>Please Enter Your Details to Signup</h4>
            <form action="signup.php" method="post">
                <div class="rap-content">
                    <div class="form-group">
                     
                        <input type="text" class="form-control" placeholder="Enter User Name">   <i class="fas fa-sign-in"></i>
                    </div>
                    <div class="form-group">
                     
                            <input type="email" class="form-control" placeholder="Email">  
                        </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password"
                            required="required">
                    </div>
                    <div class="form-group">
                            <input type="password" class="form-control" name="pass-confirm" placeholder="Retype Password"
                                required="required">
                        </div>
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color:black"
                            name="bsubmit">Signup </button>

                    </div>

                    <div class="footer">
                    <?php
    include_once SHARED_PATH .'/footer.php';
    ?>
                    </div>

            </form>


        </div>

    </div>
     
   