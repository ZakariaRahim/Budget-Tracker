
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
        color:white;
      }
        #list li{
          margin-left:5%;
          width:150px;
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
  <div class="middle">

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 style="margin-left:35%"><b>EXPENSES </b></h2>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>DEPARTMENT</th>
                        <th>CATEGORY</th>
                        <th>ITEM</th>
                        <th>UNIT PRICE</th>
                        <th>QUANTITY</th>
                        <td>TOTAL PRICE</td>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="#editEmployeeModal" class="View" data-toggle="modal">
                                <input type="submit" name="approve" class="btn btn-info"
                                    value="Edit"></a>
                            <input type="submit" name="decline" class="btn btn-danger" value="Cancel">
                            <!-- <a href="#editEmployeeModal" class="View" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="VIEW"><i class="fas fa-eye 5x"></i></a> -->
                        </td>

                        <!-- STATIC VALUES FOR TESTING SAKE -->
                        <td>rahim</td>
                        <td>kamal</td>
                        <td>fataw</td>
                        <td>wakil</td>
                        <td>rahim</td>
                        <td>rahim</td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#editEmployeeModal" class="View" data-toggle="modal">
                                <input type="submit" class="btn btn-info" value="Edit"></a>

                            <input type="submit" class="btn btn-danger" value="Cancel">
                            <a href="#editEmployeeModal" class="View" data-toggle="modal"></a>
                        </td>
                        <td>rahim</td>
                        <td>kamal</td>
                        <td>fataw</td>
                        <td>wakil</td>
                        <td>rahim</td>
                        <td>rahim</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#editEmployeeModal" class="View" data-toggle="modal">
                                <input type="submit" class="btn btn-info" value="Edit"></a>

                            <input type="submit" class="btn btn-danger" value="Cancel">
                            <a href="#editEmployeeModal" class="View" data-toggle="modal"></a>
                        </td>
                        <td>rahim</td>
                        <td>kamal</td>
                        <td>fataw</td>
                        <td>wakil</td>
                        <td>rahim</td>
                        <td>rahim</td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#editEmployeeModal" class="View" data-toggle="modal">
                                <input type="submit" class="btn btn-info" value="Edit"></a>

                            <input type="submit" class="btn btn-danger" value="Cancel">
                            <a href="#editEmployeeModal" class="View" data-toggle="modal"></a>
                        </td>
                        <td>rahim</td>
                        <td>kamal</td>
                        <td>fataw</td>
                        <td>wakil</td>
                        <td>rahim</td>
                        <td>rahim</td>
                    </tr>



                </tbody>
            </table>


            <div id="editEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Expenses Details</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>DEPARTMENT</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>CATEGORY</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>ITEM</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>UNIT PRICE</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>QUANTITY</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>TOTAL PRICE</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal"
                            value="Cancel">
                        <input type="submit" class="btn btn-info" value="Submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>


<br>

  </div> 


</div>
<div class="footer">
<?php  include 'footer.php' ?>
  </div>

    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="css/javas.js"></script>
</body>

</html>