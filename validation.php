<?php

// Functions to validation inputs---

//check if register inputs are empty--
function inputsEmptyRegister ($name, $phone, $username, $password, $confirmpassword){
    //$value;
    if(empty($name)|| empty($phone) || empty($username) || empty($password) || empty($confirmpassword)){
        $value = true;
    }else{
        $value = false;
    }
    return $value;
}
//check if login inputs are empty
function inputsEmptyLogin($username, $password){
    //$value;
    if(empty($username) || empty($password)){
        $value = true;
    }else{
        $value = false;
    }
    return $value;
} 

//check if phone number is invalid --
function phoneInvalid($phone){
    //$value;
    if(!preg_match("/^[0][\d]{9}$/",$phone)){
        $value = true;
    }
    else{
        $value=false;
    }
    return $value;
}
//check if password is invalid --
function passwordInvalid($password){
   //$value;
    if(!preg_match("/^.{5,}$/",$password)){
        $value = true;
    }
    else{
        $value=false;
    }
    return $value;
}
//check if password and confirm password aren't similar--
function passwordNotMatch($password,$confirmpassword){
    //$value;
    if($password !==$confirmpassword){
        $value = true;
    }
    else{
        $value=false;
    }
    return $value;
}
//check if username and phone number are available in the system--
function usernameOrPhoneAvailable($conn,$username,$phone){
    //$value;
    //Query
$sql = "SELECT * FROM `user_tbl` WHERE phone=? OR username=?;";
    //initialize prepared statement 
    $stmt = mysqli_stmt_init($conn);
    //Bind the Statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: index_cus.php?err=failedstmt");
       exit();
  }
   else{
        //bind data with the statement
       mysqli_stmt_bind_param($stmt,"is", $phone , $username);
        //excute the statement
        mysqli_stmt_execute($stmt);
        //save results if available
       $data = mysqli_stmt_get_result($stmt);
        //check if there is at least one result
       if(!mysqli_fetch_assoc($data)){
       $value = false;
       }
      else{
        $value=true;
       }
   }
    //close the statement 
    mysqli_stmt_close($stmt);

   return $value;
}
?>