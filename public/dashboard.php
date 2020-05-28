<?php 

  include_once '../private/init.php';
  $title = "Dashboard";
  include_once SHARED_PATH .'/header.php';
  include_once SHARED_PATH .'/header_nav.php';

  if(!isset($_SESSION['user'])){
      header('location: index.php');
  }
  ?>

  <div class="container">
  
    <div class="dashboard_area">

      <div class="budget_tile">
        <div class="row">
        <div class="col-md-4 ">
          <div class="tile tile_balance">
          <p>Balance(ghc)</p>
          <p><span id="balance">0000</span></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="tile tile_expence">
          <p>Expense(ghc)</p>
          <p><span id="expense">0000</span></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="tile tile_revenue">
          <p>Revenue(ghc)</p>
          <p><span id="revenue">0000</span></p>
          </div>
        </div>
        </div>
      </div>
      <h3 class="dashboard_area-title">Budget Summary</h3>

      <table class="table table stripped">

        <thead>
        <tr>
          <th>Budget Date</th>
          <th>Budget Description</th>
          <th>Budget Type</th>
          <th>Budget Cost</th>
          <th>Budget Author</th>
          <th colspan=>Action</th>
          </tr>
        </thead>

        <tbody id='td'>
        
        </tbody>
      
      </table>
    </div>
  </div>

<?php 
include_once SHARED_PATH . '/footer.php';?>

<script>

  var balance = document.getElementById("balance");
  var revenue = document.getElementById("revenue");
  var expense = document.getElementById("expense");

  function getBalance(){
    var xhr = new XMLHttpRequest();
    xhr.open("get", 'action.php?action=balance', true);
    xhr.onreadystatechange = function(){

      if(xhr.readyState == 4 && xhr.status == 200){
        balance.innerHTML = xhr.responseText

      }
    }
    xhr.send();
    
  }

  function getExpense(){
    var xhr = new XMLHttpRequest();
    xhr.open("get", 'action.php?action=expense', true);
    xhr.onreadystatechange = function(){

      if(xhr.readyState == 4 && xhr.status == 200){
        expense.innerHTML = xhr.responseText

      }
    }
    xhr.send();
    
  }

  function getRevenue(){
    var xhr = new XMLHttpRequest();
    xhr.open("get", 'action.php?action=revenue', true);
    xhr.onreadystatechange = function(){

      if(xhr.readyState == 4 && xhr.status == 200){
        revenue.innerHTML = xhr.responseText

      }
    }
    xhr.send();
    
  }

  function budgetHistory(){
    var xhr = new XMLHttpRequest();
    xhr.open("get", 'budgethistory.ajax.php', true);
    xhr.onreadystatechange = function(){

      if(xhr.readyState == 4 && xhr.status == 200){
        td.innerHTML = xhr.responseText

      }
    }
    xhr.send();
  }




  window.onload = (event) => {
    getBalance();
    getRevenue();
    getExpense();
    budgetHistory()
};

</script>

