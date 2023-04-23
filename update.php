<?php
require_once "./config.php";

if(isset($_POST['updateid'])){
   $user_id =$_POST['updateid'];

   $sql = "SELECT * FROM user_tbl WHERE id= $user_id";
   $result=mysqli_query($conn,$sql);
   $response=array();
   while ($row=mysqli_fetch_assoc($result)){
    $response=$row;
   }
   echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}

//update query
if(isset($_POST['hiddendata'])){
    $uniqueid=$_POST['hiddendata'];
    $name=$_POST['updatename'];
    $phone=$_POST['updatphone'];
    $username=$_POST['updateusername'];
    $password=$_POST['updatepassword'];

    $sql="UPDATE 'user_tbl' SET name='$name', phone='$phone',
    username='$username', password='$password' WHERE id=$uniqueid";

    $result = mysqli_query($conn,$sql);
}
?>