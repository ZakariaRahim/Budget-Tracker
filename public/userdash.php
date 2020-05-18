<?php 
  include_once '../private/init.php';
  include_once SHARED_PATH .'/header.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <style>
    
    </style>
    <link rel="stylesheet" href="..\styles\userdash.css">
</head>

<body>
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

 <?php require_once SHARED_PATH. '/footer.php'; ?>

</div>

</body>

</html>