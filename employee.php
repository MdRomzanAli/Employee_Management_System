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
                  <h4 class="card-title">All Employee's Information List</h4>
                  <p class="card-description">
                    <!-- Add class <code>.table-striped</code> -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>User</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Dept</th>
                          <th>Designation</th>
                          <th>Salary</th>
                          <th>Target</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
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
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title mx-auto" id="exampleModalLabel" >Employee Details</h5>
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button> -->
                                                  </div>
                                                  <div class="modal-body">
                                                  <div class="text-center" ><img  src="images/faces/face1.jpg" style="width: 200px;height: 200px;" alt="image"   ><br><br>
                                                   <b>
                                                     <label>ID:123 </label> <br>
                                                     <label>Name:Mahedi</label>                  <br>
                                                     <label>Email:mahedi@gmail.com</label>        <br>
                                                     <label>Phone:0175864578</label>              <br>
                                                     <label>Department:Operations</label>         <br>
                                                     <label>Designamtion:Manager</label>          <br>
                                                     <label>salary:15000</label>                  <br>
                                                     <label>Joining Date:15.03.2023</label>      <br>
                                                     <label>NID:1234556</label>                  <br>
                                                    <label>password_hash:nrfhfuihgvbhj</label>   <br>
                                                     <label>Target:$2000</label>                  <br>
                                                     <label>Parcentage:</label>                  <br>
                                                     <label>Files:</label>                                                                                   
                                                   </b> 
                                                  
                                                   </div>
                                                    </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div></a>
                            <a href="http://localhost/ems/employee.php?action=edit"><i class="mdi mdi-grease-pencil"></i></a>
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
                  <form class="form-sample">
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
                             <input type="text" name="" class="form-control">
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
                  <input type="submit" class="bg-info rounded float-right" value="update">
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