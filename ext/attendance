<?php include "inc/header.php"; ?>
<?php include "inc/menu.php"; ?>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>


            <?php 

            $action = isset($_GET['action']) ? $_GET['action'] : 'view' ;

            switch ($action) {
              case 'view':
                    ?>

                    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="float-right">
                                <a href="http://localhost/ems/attendance.php?action=view"  data-toggle="modal" data-target="#exampleModal" ><i class=" mdi mdi-plus-circle-outline mdi-48px"  ></i></a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title mx-auto" id="exampleModalLabel" >Attendance</h5>
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button> -->
                                                  
                                                   </div>
                                                  <div class="modal-body">
                                                  <label for="id" class="col-sm-3 col-form-label" >ID:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="number"><br><br>

                                                  <label for="name" class="col-sm-3 col-form-label" >Name:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="text"><br><br>

                                                  <label for="shift" class="col-sm-3 col-form-label" >Shift:</label>     
                                                    <select class=" border rounded" style="height: 40px;">
                                                            <option>Day</option>
                                                            <option>Night</option>
                                                            </select><br><br>

                                                <label for="entry" class="col-sm-3 col-form-label" >Entry Time:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="datetime-local"><br><br>        
                                                
                                                </div>

                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Attendance</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                            
                            </div>

                            
                  <h4 class="card-title">Attendance List</h4>
                  
                  
                  
                  
                   <div class="table-responsive">
                    
                    <table class="table table-striped">
                    
                      <thead>
                      
                        <tr>
                            
                          <th>User</th>
                          <th>ID</th>
                          <th>Name</th>
                          <th>shift</th>
                          <th>Entry Time</th>
                          <th>Exit Time</th>
                          <th>Status</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>1234</td>
                          <td>Mahedi</td>
                          <td>Day</td>
                          <td>9:00am</td>
                          <td>6:30pm</td>
                          <td>Good</td>
                          
                          
                         
                        </tr>
                        

                      </tbody>
                    </table>
                  </div>
                 
                  
                  </div>
                  
              </div>
            </div>

           

                    <?php
                break;
              case 'add':
                    ?>
                    
                            
                    <?php
                break;
              case 'edit':
                    ?>
                    




                <?php
                break;
              case 'update':
                    
                break;
              case 'delete':
                    
                break;
              
              default:
                      header('Location: employee.php');
                break;
            }


            ?>
            
            
          </div>
          
        </div>

        <!-- Button trigger modal -->

        <!-- content-wrapper ends -->
<?php include "inc/footer.php"; ?>