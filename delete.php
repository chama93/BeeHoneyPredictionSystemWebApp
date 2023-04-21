<?php
require_once "./config.php";

if(isset($_POST['deleteSend'])){
   $unique =$_POST ['deleteSend'];

   $sql="DELETE FROM 'user_tbl' WHERE id=$unique";
   $result=mysqli_query($conn,$sql);
}
?>