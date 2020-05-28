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
          <p>Balance</p>
          <p>ghc 200</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="tile tile_expence">
          <p>Expence</p>
          <p>ghc 200</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="tile tile_revenue">
          <p>Revenue</p>
          <p>ghc 200</p>
          </div>
        </div>
        </div>
      </div>
      <h3 class="dashboard_area-title">Budget Summary</h3>

      <table class="table table stripped">

        <thead>
        <tr>
        <th>Budget Description</th>
        <th>Budget Type</th>
        <th>Budget Cost</th>
        </tr>
        </thead>

        <tbody>
        <tr>
        <td>repair phone</td>
        <td>expense</td>
        <td>ghc200</td>
        </tr>
        </tbody>
      
      </table>
    </div>
  </div>

<?php 
include_once SHARED_PATH . '/footer.php';

