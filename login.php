<?php
//add config file
require_once "./config.php";
// add validation file
require_once "./validation.php";

//if user clicks the login button 
if(isset($_POST["login"])){
    //get form input data
    $username = $_POST["username"];
    $password = $_POST["password"];

    //input validation
    if(inputsEmptyLogin($username,$password)){
        header("location:index_cus.php?err=empty_inputs");
    }
    else if(passwordInvalid($password)){
        header("location:index_cus.php?err=invalid_password");
    }
    else{
        // if all inputs are error free
        loginUser($conn,$username,$password);
    }
}
else{
    header("location: index_cus.php");
    exit();
}
//function for login
function loginUser($conn,$username,$password){
    //Query 
    $sql = "SELECT * FROM user_tbl WHERE username = ?;";
    //initialize prepared statement 
    $stmt = mysqli_stmt_init($conn);
    //Bind the Statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: index_cus.php?err=failedstmt");
    }
    else{
        //bind data with the statement
        mysqli_stmt_bind_param($stmt,"s",$username);
        //excute the statement
        mysqli_stmt_execute($stmt);
        //save results if available
        $data = mysqli_stmt_get_result($stmt);
        //check if there is at least one result
        if($row = mysqli_fetch_assoc($data)){
           //Get encrypted password
           $passwordHashed = $row["password"];
           //Verify password
           $isPasswordOk =password_verify($password,$passwordHashed); 
           if($isPasswordOk){
            //Setup session variables
            session_start();
            $_SESSION["name"] = $row["name"];
            $_SESSION["phone"] = $row["phone"];
            $_SESSION["username"] = $row["username"];

           }
        else{
            // Destroy cookies value
            if(isset($_COOKIE["usernamecookie"])){
                setcookie("usercookie", "", time() - (3600 * 24 * 7), "/");
            }
            if(isset($_COOKIE["passwordcookie"])){
                setcookie("passwordcookie", "", time() - (3600 * 24 * 7), "/");
            }
        }
            header("location: index_cus.php");
        }  
     else{
            header("location: ../index.php?err=loginfailedpassword");
            exit();
        }  
    }
    {
        header("location: ../index.php?err=loginfailedusername");
        exit();
    }
    //close the statement
    mysqli_stmt_close($stmt);
}
    
   
?>