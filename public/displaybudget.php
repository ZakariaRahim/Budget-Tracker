 <?php
    include_once '../private/init.php';
    include_once SHARED_PATH .'/header.php';
    
    ?>
<link rel="stylesheet" href="../styles/userdash.css">
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

<?php
    include_once SHARED_PATH .'/footer.php';
    
    ?>
