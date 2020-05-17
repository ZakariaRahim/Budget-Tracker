    <?php
    include_once '../private/init.php';
    include_once SHARED_PATH .'/header.php';
    
    ?>
<div class="container-fluid">
    <div class="signup-form">
        <form action="budget.html" method="post" autocomplete="off">
            <h2>Enter Data Below</h2>
            <p class="hint-text">Develop Revenue</p>
            <div class="form-group">
                <input type="text" class="form-control" name="Date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Dues" placeholder="Dues" required="required">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" name="loans" placeholder="Loans" required="required">
            </div>
           
     
    <div class="form-group">
                <input type="text" class="form-control" id="Quantity" name="Payments" placeholder="Payments" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="others" name="Others" placeholder="Others" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" onchange="total();" id="TotalRevenue" name="TotalRevenue" placeholder="Total Revenue " required="required">
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color:black" name="bsubmit">Submit Data </button>
    
            </div>
        </form>
     <div id="footer">
          <h5 style="color: black; text-align: center;"> Copyright &copy; 2020. All Right Reserved</h5>
          <br>
          <h5 style="text-align: center;
          color: black;">Abdul Somed Safianu Project Work</h5>
          
      </div>   


</div>
   
     <?php
    include_once SHARED_PATH .'/footer.php';
    
    ?>
