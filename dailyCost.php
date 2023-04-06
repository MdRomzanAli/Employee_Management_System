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
                                <a href="dailyCost.php?action=add"  ><i class=" mdi mdi-plus-circle-outline mdi-48px"  ></i></a>
                                 <!-- <a href="dailyCost.php?action=add" id="h" data-toggle="modal" data-target="#exampleModal" ><i class=" mdi mdi-plus-circle-outline mdi-48px"  ></i></a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title mx-auto" id="exampleModalLabel" >Cost List</h5>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button> 
                                                  
                                                   </div>
                                                  <div class="modal-body">
                                                  <label for="id" class="col-sm-3 col-form-label" >C_ID:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="number"><br><br>

                                                  <label for="entry" class="col-sm-3 col-form-label" >Date&Time:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="datetime-local"><br><br>   

                                                  <label for="name" class="col-sm-3 col-form-label" >Item Name:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="text"><br><br>

                                                  <label for="amount" class="col-sm-3 col-form-label" >Amount:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="number"><br><br>

                                                  <label for="invoice" class="col-sm-3 col-form-label" >Invoice:</label>
                                                  <input class=" border rounded" style="height: 30px;" type="file"><br><br>

                                                  <label for="paidBy" class="col-sm-3 col-form-label" >Paid_By:</label>
                                                  <input class=" border rounded" style="height: 30px;" type="text"><br><br>

                                                  <label for="name" class="col-sm-3 col-form-label" >Comment:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="text"><br><br>

                                                     
                                                
                                                </div>

                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Add</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> -->
                            
                            </div>

                            
                  <h4 class="card-title">Cost_list</h4>
                  
                  
                  
                  
                   <div class="table-responsive">
                    
                    <table class="table table-striped">
                    
                      <thead>
                      
                        <tr>
                            
                          <th>C_ID</th>
                          <th>Date</th>
                          <th>Item_Name</th>
                          <th>Amount</th>
                          <th>Paid_By</th>
                          <th>invoice</th>
                          <th>comment</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $sql="SELECT * FROM daily_convence";
                        $result=$conn->query($sql);

                        if(mysqli_num_rows($result)>0)
                          while($row=mysqli_fetch_assoc($result))
                            echo "</tr><td>" . $row["C_ID"] . "</td><td>" . $row["date"] . "</td> <td>" . $row["item"] ."</td> <td>" . $row["amount"] ."</td> <td>" . $row["paidby"] . "</td> <td>" . $row["invoice"] ."</td> <td>" . $row["comment"] ."</td></tr>"
                         
                        
                        
                         ?>
                        <tr>
                          
                          <td>1234</td>
                          <td>20-03-2023 4:00pm</td>
                          <td>water</td>
                          <td>20</td>
                          <td>xyZ</td>
                          <td> invoice</td>
                          <td>no comment</td>
                          
                         
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
             <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Cost List</h4>
                  <form class="form-sample" action="core\insert.php" method="post" autocomplate="off" >
                    <p class="card-description">
                      Daily cost list
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Item Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="itmname">
                          </div>
                        </div>
                      </div>
                      
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="pdate">
                          </div>
                        </div>
                      </div>
                      </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ammount</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="ammount">
                          </div>
                        </div>
                      </div>
                      </div>
                      
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Paid_By</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="paidby">
                          </div>
                        </div>
                      </div>
                      </div>

                    
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Invoice</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="invoice">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">comment</label>
                          <div class="col-sm-9">
                          <textarea name="comment" id="comments" style="font-family:sans-serif;font-size:1.2em;">
                    
                       </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                     <button type="submit" class="btn btn-primary" name="daily">Submit</button>
                  </form>
                </div>
              </div>
            </div>                                                  <!-- <label for="id" class="col-sm-3 col-form-label" >C_ID:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="number"><br><br>

                                                  <label for="entry" class="col-sm-3 col-form-label" >Entry Time:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="datetime-local"><br><br>   

                                                  <label for="name" class="col-sm-3 col-form-label" >Item Name:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="text"><br><br>

                                                  <label for="amount" class="col-sm-3 col-form-label" >Amount:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="number"><br><br>

                                                  <label for="invoice" class="col-sm-3 col-form-label" >Invoice:</label>
                                                  <input class=" border rounded" style="height: 30px;" type="file"><br><br>

                                                  <label for="name" class="col-sm-3 col-form-label" >Comment:</label>
                                                  <input class=" border rounded" style="height: 40px;" type="text"><br><br> -->
                    
                            
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