<?php
session_start();
if(isset($_SESSION ["username"])){
	header("location: ./cus_dashboard.php");
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
    <!--Messages-->
    <?php
    if(isset($_GET["err"])){
        //Both forms related messages
        if($_GET["err"]==="empty_inputs"){
            echo "<p class="alert alert-danger" role="alert;">
            All the input fields must be filled!
          </p>"
        }
        else if(){

        }
    }
    ?>
<!--- Register Form --->
    <div class="container" id="container">
        <div class="form-container sign-up-container">

                <form action="registration.php" method="post">
                <h1>Create Account</h1>
                
                <div class="infield">
                    <input type="text" placeholder="Name" name="name" required="required" autocomplete="off" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="tel" placeholder="Phone Number" name="phone" required="required" autocomplete="off"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="text" placeholder="Username" name="username" required ="required" autocomplete="off" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name ="password" required ="required" autocomplete="off" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Confirm Password" name ="confirmpassword" required ="required" autocomplete="off" />
                    <label></label>
                </div>

                <button type ="submit" name ="register">Register</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            
            <form action="./login.php" method="post">
                <h1>Login</h1>
                
                <div class="infield">
                    <input type="text" placeholder="Username" name="username" required ="required" autocomplete="off"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="password" required ="required" autocomplete="off" />
                    <label></label>
                </div>
                
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>