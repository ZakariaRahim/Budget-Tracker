<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Budget Tracking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo  url_for('/dashboard.php'); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url_for('/expenses.php'); ?>">Enter Expense</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url_for('/revenue.php'); ?>">Enter Revenue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo url_for('/logout.php') ?>">logout</a>
      </li>
    </ul>
  </div>
</nav>
</div>