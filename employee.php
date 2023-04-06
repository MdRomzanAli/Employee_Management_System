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
                  <h4 class="card-title">All Employee's Information List</h4>
                  <p class="card-description">
                    <!-- Add class <code>.table-striped</code> -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Dept</th>
                          <th>Designation</th>
                          <th>Salary</th>
                          <th>Target</th>
                          <th>Employee Level</th>
                          <th>status</th>
                          
                        
                      </thead>
                      <tbody>
                        <!-- <tr> -->
                        <?php
                        // Phone	Dept	Designation	Salary	Target	Status
                        // $conn=mysqli_connect("localhost","root","","mit_solution");
                        $sql="SELECT * FROM employee_profile";
                        $result=$conn->query($sql);

                        if(mysqli_num_rows($result)>0){
                          while($row=mysqli_fetch_assoc($result)){
                            echo "</tr><td>" . $row["name"] . "</td><td>" . $row["name"] . "</td> <td>" . $row["email"] . "</td>". "<td>" . $row["Phone"] . "</td>". "<td>" . $row["department"] . "</td>". "<td>" . $row["designation"] . "</td>". "<td>" . $row["salary"] . "</td>". "<td>" . $row["target"] . "</td>". "<td>" . $row["employee_level"] . "</td> "?><td> <a href="" name="namecard" data-toggle="modal" data-target="#exampleModal" ><i class="mdi mdi-account-card-details"></i>
                            <div class="modal   mt-5 " id="exampleModal" >
                            
                            <div class="section  about-section  gray-bg col-lg-8 rounded mx-auto" id="about">
                            
            <div class="container ">
                <div class="row align-items-center ">
                    <div class="col-lg-8">
                        <div class="about-text go-to">
                            <h3 class="dark-color"><?php 
                             $query= "SELECT * FROM employee_profile" ;
                             $query_run=mysqli_query($conn,$query);
                             $check=mysqli_num_rows($query_run)>0;

                             if($check){
                              while($row=mysqli_fetch_assoc($query_run))
                              
                                echo $row["name"];
                             } 
                             else
                             
                              echo "not found";
                             
                            
                          ?></h3>
                            
                            <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                            <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in <br> creating stylish, modern websites, web services <br> and online stores. My passion is to design digital user <br> experiences through the bold interface and meaningful interactions.</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>4th april 1998</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Residence</label>
                                        <p>Canada</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>California, USA</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>info@domain.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>820-885-3321</p>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <p>skype.0404</p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <div class="about-avatar ">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="" style="height: 300px; width: 300px; ">
                        </div>
                    </div>
                </div>
                <div class="counter col-9 mx-auto">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-dialog text-center" role="document">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
              </div>
              
              </div>
              </div>
      </a>
                            <a href="http://localhost/ems/employee.php?action=edit"><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i>
                            <?php
                            $sql = "DELETE FROM employee_profile WHERE ID=2";

                            if ($conn->query($sql) === TRUE) {
                              // echo "Record deleted successfully";
                            } else {
                              echo "Error deleting record: " . $conn->error;
                            }
                            
                            
                            ?>
                            </a></td> <?php "</tr>";
                          }
                        }

                        ?>
                        
                          <!-- <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Mahedi</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                          
                         
                            <a href=""  data-toggle="modal" data-target="#exampleModal" ><i class="mdi mdi-account-card-details"></i>
                            <div class="modal   mt-5 " id="exampleModal" >
                            
                            <div class="section  about-section  gray-bg col-lg-8 rounded mx-auto" id="about">
                            
            <div class="container ">
                <div class="row align-items-center ">
                    <div class="col-lg-8">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Mahedi</h3>
                            
                            <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                            <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in <br> creating stylish, modern websites, web services <br> and online stores. My passion is to design digital user <br> experiences through the bold interface and meaningful interactions.</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>4th april 1998</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Residence</label>
                                        <p>Canada</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>California, USA</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>info@domain.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>820-885-3321</p>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <p>skype.0404</p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <div class="about-avatar ">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="" style="height: 300px; width: 300px; ">
                        </div>
                    </div>
                </div>
                <div class="counter col-9 mx-auto">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-dialog text-center" role="document">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
              </div>
              
              </div>
              </div>
      </a>
                            <a href="http://localhost/ems/employee.php?action=edit"><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr> -->
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/face1.jpg" alt="image">
                          </td>
                          <td>Herman Beck</td>
                          <td>info@gmail.com</td>
                          <td>01773357272</td>
                          <td>Training</td>
                          <td>Coornicator</td>
                          <td>$ 77.99</td>
                          <td>1500</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <a href=""><i class="mdi mdi-account-card-details"></i></a>
                            <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                            <a href=""><i class="mdi mdi-delete-forever"></i></a>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                 
                  
                </div>
                <a href="employee.php?action=add"  class="mx-auto" ><i class=" mdi mdi-plus-circle-outline mdi-24px"  ></i></a>
              </div>
            </div>

                    <?php
                break;
              case 'add':
                    ?>
         <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new employee</h4>
                  <form class="form-sample" action="core\insert.php" method="post" autocomplate="off">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender">
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="password">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="department">
                              <option>Business</option>
                              <option>Sales</option>
                              <option>Training</option>
                              <option>Office Head</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Level</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="parmanent" >
                                Parmanent
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="intern">
                                Intern
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee ID</label>
                          <div class="col-sm-9">
                             <input type="text" name="employeeID" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" name="designation" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Joining Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="joindate" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Salary</label>
                          <div class="col-sm-9">
                            <input type="number" name="salary" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Target</label>
                          <div class="col-sm-9">
                            <input type="number" name="target" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Percentage Level</label>
                          <div class="col-sm-9">
                            <input type="number" name="percentage" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="phone">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NID Card PDF Copy</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="nidw">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="postcode">
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="city">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="country">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      
                    </div> -->

                    <div class="row">
                      <div class="col-md-6">
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Photo</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="photo">
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary  " name="submit">Submit</button>
                    



                  </form>
                </div>
              </div>
            </div>
                    <?php
                break;
              case 'edit':
                    ?>
                    <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new employee</h4>
                  <form class="form-sample">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="mahedi">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="password">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Business</option>
                              <option>Sales</option>
                              <option>Training</option>
                              <option>Office Head</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Level</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked="">
                                Parmanent
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                Intern
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee ID</label>
                          <div class="col-sm-9">
                             <input type="text" name="" class="form-control" value="123">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" name="" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Joining Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Salary</label>
                          <div class="col-sm-9">
                            <input type="number" name="" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Target</label>
                          <div class="col-sm-9">
                            <input type="number" name="" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Percentage Level</label>
                          <div class="col-sm-9">
                            <input type="number" name="" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Nid Details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NID Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NID Card PDF Copy</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="phone">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <input type="submit" class="bg-info rounded float-right" name="submit" value="update">
                </div>
              </div>
            </div>

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