
<?php
require_once('config.php');
//if(!empty($_SESSION["id"])){
    //header("Location: #");
  //}

if(isset($_POST["register"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $errors = array();
  if (empty($name)) {
    $errors[] = "Name is required";
  }
  $errors = array();
  if (empty($phone)) {
    $errors[] = "Phone Number is required";
  }
  $errors = array();
  if (empty($username)) {
    $errors[] = "Username is required";
  }
  $errors = array();
  if (empty($password)) {
    $errors[] = "Password is required";
  }
  if($password != $confirmpassword){
    $errors[] = "Passwords do not match ";
  }
  
    $duplicate = mysqli_query($conn, "SELECT * FROM `user_tbl` WHERE username ='$username'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert ('Username has already taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
         $query = "INSERT INTO user_tbl VALUES ('','$name','$phone','$username','$password')";
         mysqli_query($conn,$query);   
         echo
         "<script> alert ('Registration Successfully!!!'); </script>";
        }
        else{
            echo
            "<script> warrning alert ('Password does not matched'); </script>";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Bee Honey - BeeHoney </title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="style_index_cus.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="index_cus.php" method="POST">
                <h1>Create Account</h1>

                <div class="infield">
                    <input type="text" placeholder="Name" id = "name" required="required" autocomplete="off" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="tel" placeholder="Phone Number" name="phone" id=phone required="required" autocomplete="off"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="text" placeholder="Username" name="username" id=username required ="required" autocomplete="off" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" id=password required ="required" autocomplete="off" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Confirm Password" id=confirmpassword required ="required" autocomplete="off" />
                    <label></label>
                </div>
                <button type ="submit" name ="register">Register</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="index_cus.php" method="POST">
                <h1>Login</h1>

                <div class="infield">
                    <input type="text" placeholder="Username" name="username" id=username required ="required" autocomplete="off"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" id=password required ="required" autocomplete="off" />
                    <label></label>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button type ="submit" name ="login"> Login </button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your login info</p>
                    <button>Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello!</h1>
                    <p>Enter your personal details and start your farmer journey with us</p>
                    <button>Register</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>

    <!-- js code -->
    <script>
        const container = document.getElementById('container');
        const overlayCon = document.getElementById('overlaycon');
        const overlayBtn = document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click',()=> {
            container.classList.toggle('right-panel-active');

           overlayBtn.classList.remove ('btnScaled');
           window.requestAnimationFrame( ()=>{
            overlayBtn.classList.add('btnScaled');
           })
        })


    </script>
    

</body>
</html>