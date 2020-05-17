    <?php
    include_once '../private/init.php';
    include_once SHARED_PATH .'/header.php';
    
    ?>
    <div class="container-fluid">
        <div class="login-form">
            <h4>Please Enter Your Details to Signup</h4>
            <form action="Login.html" method="post">
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
                        <h5 style="color: black; text-align: center;"> Copyright &copy; 2020. All Right Reserved</h5>
                        <br>
                        <h5 style="text-align: center;
                    color: black;">Abdul Somed Safianu Project Work</h5>
                    </div>

            </form>


        </div>

    </div>
      <?php
    include_once SHARED_PATH .'/footer.php';
    
    ?>

   