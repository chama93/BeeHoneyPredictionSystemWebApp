<?php
require_once "./config.php";

extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['phoneSend']) &&isset($_POST['usernameSend'])&& 
isset($_POST['passwordSend'])){
    
    $passwordHashed = password_hash($passwordSend,PASSWORD_DEFAULT);
    $sql = "INSERT INTO user_tbl (name,phone,username,password) VALUES 
    ('$nameSend','$phoneSend','$usernameSend','$passwordHashed')";

    $result =mysqli_query($conn,$sql);
}
 
?>