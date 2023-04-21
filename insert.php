<?php
require_once "./config.php";

extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['phoneSend']) &&isset($_POST['usernameSend'])&& 
isset($_POST['passwordSend'])){
    
    $sql = "INSERT INTO 'user_tbl'(name,phone,username,password) VALUES 
    ('$nameSend','$phoneSend','$usernameSend','$passwordSend')";

    $result =mysqli_query($conn,$sql);
}
 
?>