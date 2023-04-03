<?php include "inc/header.php"; ?>
<?php include "inc/menu.php"; ?>
<?php include "css.php"; ?>
      
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
                  <h4>Take Attendance</h4>
                                <!-- <a href="attendance.php?action=view"  data-toggle="modal" data-target="#exampleModal" ><i class="ml-5 mdi mdi-plus-circle-outline mdi-48px"  ></i></a> -->
                                <a href="attendance.php?action=view"  data-toggle="modal" data-target="#exampleModal" ><i class="ml-5 mdi mdi-plus-circle-outline mdi-48px"  ></i> </a>
                  <div class="modal   mt-5 " id="exampleModal"  >
                            
                            <div class="section   gray-bg col-lg-8 rounded mx-auto" id="about">
                              <div class="text-center"><h3 class="dark-color ">Attendance</h3></div>
                                      <div class="container ">
                
                                              <label for="name"><b>Mahedi:</b></label>  
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                Date:
                                                 <input type="date">   
                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              <input type="checkbox"  name="" id=""  >
                                              Present
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox"  name="" id=""  >
                                              Absent
                       

                        
                                       </div>
            
                              <div  class="text-center mt-5"><button type="button" class="btn btn-primary ">Add</button> </div>
                            </div>
                  

                  </div>
                     <!-- <div class="modal-dialog text-center" role="document">
                      <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                     </div> -->
             
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