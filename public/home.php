 <?php
    include_once '../private/init.php';
    include_once SHARED_PATH .'/header.php';
    
    ?>
<div class="header">
  <h1>BUDGET TRACKING SYSTEM  DASHBOARD</h1>
</div>
<div class="container-fluid">

<div class="sidebapage">
<?php include 'usersidebar.php' ?>
  </div>
  <div class="middlepage">
  <?php include 'displaybudget.php' ?>
  <?php
//    include 'expenses.php' ?>
  </div> 

  <div class="footer">
<?php  include 'footer.php' ?>
  </div>
</div>

<?php
    include_once SHARED_PATH .'/footer.php';
    
    ?>
