<?php 
  include_once '../private/init.php';
  include_once SHARED_PATH .'/header.php';
  ?>
<style>

</style>

<div class="sidebar-content">

<nav class="navbar navbar-expand-lg navbar-light bg-dark nav-hover " >
  <a class="navbar-brand" href="#">DASHBOARD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav " id="list"  >
      <li class="nav-item active" >
        <a class="nav-link" href="home.php" style="color:white; cursor:pointer">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="budget.php" style="color:white">Create Budget</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="revenue.php" style="color:white">Enter Revenue</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="displayrevenue.php" style="color:white">Display Revenue</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="expenses.php" style="color:white">Expenses</a>
      </li>
      <!-- <li class="nav-item">
      <a class="nav-link" href="displaybudget.php" style="color:white">Dislpay Budget</a>
      </li> -->
      <li class="nav-item">
      <a class="nav-link" href="#" style="color:white">Reports</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="login.php" style="color:white">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</div>
