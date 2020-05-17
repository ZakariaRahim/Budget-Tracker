    <?php
    include_once '../private/init.php';
    include_once SHARED_PATH .'/header.php';
    
    ?>
   <div class="container-fluid">
<div class="signup-form">
    <form action="budget.html" method="post" autocomplete="off">
		<h2>Enter Data Below</h2>
        <p class="hint-text">Create Budget</p>
        <div class="form-group">
            <select class="custom-select mt-3" name="Region">
        <option selected>Select Faculty</option>
        <option value="1">FMS</option>
        <option value="2">FAS</option>
        <option value="3">FEAS</option>
        <option value="4">Not Mentioned</option>
        
    </select>
    </div>
        <div class="form-group">
            <input type="text" class="form-control" name="department" placeholder="Department" required="required">
        </div>
        <div class="form-group">
            <input type="text"  class="form-control" name="Category" placeholder="Category" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="item" placeholder="item" required="required">
            <div class="valid-tooltip"></div>
        </div>
		<div class="form-group">
            <input type="text" class="form-control"  id="UnitPrice" name="UnitPrice" placeholder="Unit Price" required="required">
        </div>
        
 
<div class="form-group">
            <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Quantity" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" onchange="total();" id="TotalPrice" name="TotalPrice" placeholder="Total Price " required="required">
        </div>
       
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
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

<script>
  function total () {
    var UnitPrice = document.getElementById('UnitPrice')
    var Quantity = document.getElementById('Quantity')
    var totalprice = document.getElementById('TotalPrice')
    totalprice = UnitPrice.value * Quantity.value
  }
</script>

<?php 

include_once SHARED_PATH . '/footer.php';