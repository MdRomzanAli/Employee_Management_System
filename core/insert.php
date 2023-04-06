
<?php 

// employee add
if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $gender=$_POST["gender"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $department=$_POST["department"];
  $membershipRadios=$_POST["membershipRadios"];
  $employeeID=$_POST["employeeID"];
  $designation=$_POST["designation"];
  $joindate=$_POST["joindate"];
  $salary=$_POST["salary"];
  $target=$_POST["target"];
  $percentage=$_POST["percentage"];
  
  $nidw=$_POST["nidw"];
  $phone=$_POST["phone"];
  // $postcode=$_POST["postcode"];
  // $city=$_POST["city"];
  // $country=$_POST["country"];
  
  // files 
  
      // $file_name = $_FILES['photo']['name'];
      // $file_size =$_FILES['photo']['size'];
      // $file_tmp =$_FILES['photo']['tmp_name'];
      // $file_type=$_FILES['photo']['type'];
      // $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
      
      // $extensions= array("jpeg","jpg","png");
      
      // if(in_array($file_ext,$extensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      // }
      
      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
      
      // if(empty($errors)==true){
      //    move_uploaded_file($file_tmp,"photos/".$file_name);
      //    echo "Success";
      // }else{
      //    print_r($errors);
      // }
   

  // size (1mb) (png,jpg)employee_profile
  $conn=mysqli_connect("localhost","root","","mit_solutions");
  $query="INSERT INTO employee_profile VALUES( '' ,'$name','$gender','$email','$password','$department','$membershipRadios','$employeeID','$designation','$joindate','$salary','$target','$percentage','$nidw','$phone','$photo')";
    $insert_res = mysqli_query($conn, $query);
    
    if($insert_res){
      header('Location: ../employee.php');
    }else{
      echo 'Employee information insert error!';
    }

}
if(isset($_POST["daily"])){
  // echo 'success';
  
  $pdate=$_POST["pdate"];
  $itmname=$_POST["itmname"];
  $ammount=$_POST["ammount"];
  $paidby=$_POST["paidby"];
  $invoice=$_POST["invoice"];
  $comment=$_POST["comment"];
  $conn=mysqli_connect("localhost","root","","mit_solutions");
  $query="INSERT INTO daily_convence VALUES('','$pdate','$itmname','$ammount','$paidby','$invoice','$comment')";
  $insert_res = mysqli_query($conn, $query);
  
  if($insert_res){
    header('Location: ../dailyCost.php');
  }else{
    echo 'Employee information insert error!';
  }


}
else 
echo 'hi';

?>