<?php
//session_start();
require_once "./config.php";

//--Add validation file--
require_once "./validation.php";

//if user click register button
if (isset($_POST["register"])){

    //Get form input data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    //input validation 
    if(inputsEmptyRegister($name,$phone,$username,$password,$confirmpassword)){
        header("location: index_cus.php?err=empty_inputs");
        exit();
    }
    else if(phoneInvalid($phone)){
        header("location: index_cus.php?err=invalid_phone");
        exit();
    }
    else if(passwordInvalid($password)){
        header("location: index_cus.php?err=invalid_password");
        exit();
    }
    else if(passwordNotMatch($password,$confirmpassword)){
        header("location: index_cus.php?err=different_password");
        exit();
    }
    else{
        //if all inputs are error free 
        registerNewUser($conn, $name,$phone,$username,$password,$confirmpassword);             
}
}
else{
    header("location: index_cus.php");
    exit();
}
//function for register a new user
function registerNewUser($conn, $name,$phone,$username,$password,$confirmpassword){
//password Encryption
$passwordHashed = password_hash($password,PASSWORD_DEFAULT);

    //Query
    $sql = "INSERT INTO user_tbl (name,phone,username,password) VALUES (?,?,?,?);";
     //nitialize prepared statement 
     $stmt = mysqli_stmt_init($conn);
     //Bind the Statement with the query and check errors
     if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: index_cus.php?err=failedstmt?");
    }
    else{
         //bind data with the statement
         mysqli_stmt_bind_param($stmt,"siss",$name,$phone,$username,$passwordHashed);
         //excute the statement
         mysqli_stmt_execute($stmt);
         //close the statement
         mysqli_stmt_close($stmt);

         header("location:../index_cus.php?err=noerrors");
    }
}
?>