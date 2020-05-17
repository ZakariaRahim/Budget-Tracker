<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="../asana/fontawesome-free-5.10.1-web/css/all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/all.css" type="text/css">
    <style>
      .container-fluid{
          height: auto;
          width: 100%;
          background-color:white;
          
      }
      .header{
          background-color:dimgrey;
          height:80px;
          width:100%;
      }
      .sidebar-content {
        /* width: 20%; */
        color:white;
        /* border:70% */
      }
        #list li{
          margin-left:5%;
          width:165px;
          border-color:red;
        }
       #list li:hover{
         background:blue;
         color:pink;
        
       }
       .footer{
         height:150px;
         background:darkslategrey;
       }
       h1{
         color:white;
        margin-left:20%;
        text-shadow:10%;
        text-shadow: chartreuse;
       }
       .foot{
           margin-left:40%;
           color:white;
       }
     
    </style>
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

  <div class="footer">
<?php  include 'footer.php' ?>
  </div>
</div>


    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="css/javas.js"></script>
</body>

</html>