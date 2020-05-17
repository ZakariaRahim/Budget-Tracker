<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Budget Approval</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="../asana/fontawesome-free-5.10.1-web/css/all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/all.css" type="text/css">
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #eee;
            margin: auto;
            width: 100%;
            height: 100%;
        }

        .contain {
            width: 100%;
            min-height: 100vh;
            margin: auto;
        }

        .top_bg {
            width: 100%;
            height: 10vh;
            background-color: #02326F;
        }

        .side_bar {
            width: 300px;
            height: 103%;
            background-color: #02326F;
            margin-left: 0.1%;
            float: left;
            position: absolute;
            border-style: solid;
            border-color: #C606AF;
            color: white;
            clear: both;


        }

        .side_bar ul {
            padding-top: 50px;
        }

        .side_bar li {
            border: 1px solid #034294;
            padding: 20px 0px;
            padding-left: 20px;
            list-style: none;
        }

        .side_bar li:hover {
            background-color: #285896;
            background-color: #E27706;
        }

        .side_bar .fa {
            font-size: 25px;
            color: #fff;
        }

        .side_bar span {
            color: #fff;
            text-transform: capitalize;
            padding-left: 15px;
            font-size: 25px;
        }

      

        .address {
            background-color: #034294;
            text-align: center;
            height: 60%;
            font-size: 5px;

        }

        .middle {
            width: 80%;
            height: 560px;
            position:static;
            margin-left: 10%;
            border-style: solid;
            border-color: cornflowerblue;


        }
    </style>


    <!-- <div class="conteiner-fluid"> -->
        <div class="middle">

            <body>
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 style="margin-left:35%"><b>BUDGETS </b></h2>
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
                                    <input type="submit" name="approve" class="btn btn-info" value="Edit"></a> 
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
                             

                            </tbody>
                        </table>


                        <div id="editEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form>
                                            <div class="modal-header">						
                                                <h4 class="modal-title">Budget Details</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">					
                                                <div class="form-group">
                                                    <label>DEPARTMENT</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>CATEGORY</label>
                                                    <input type="email" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>ITEM</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label>UNIT PRICE</label>
                                                    <input type="text" class="form-control" >
                                                </div>		
                                                <div class="form-group">
                                                        <label>QUANTITY</label>
                                                        <input type="text" class="form-control" >
                                                    </div>	
                                                    
                                                    <div class="form-group">
                                                        <label>TOTAL PRICE</label>
                                                        <input type="text" class="form-control" >
                                                    </div>		
                                            </div>
                        
                                           </div> 
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
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



    <br>

 
    <!-- </div> -->
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="css/javas.js"></script>


</html>