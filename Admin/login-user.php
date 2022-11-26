<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
  
</head>
<style>
    .navbar {
    background-color: rgb(255, 255, 255);
    color: #d8d8d8;
    
    width: 100%;
    line-height: 70px;
    height: 80px;
    font-size: 14px;
    padding: 0 30px;
    position: absolute;
    top:0;
    left: 0;
   
}

.navbar a{
    text-decoration: none;
    color: #000000;
}

.navbar ul {
    float: right;
    list-style: none;
    height: inherit;
    line-height: inherit;
    padding: 0 50px;
}
.navbar ul li{
    display: inline-block;
}

.navbar ul li a{
    display: block;
    text-align: center;
    min-width: 120px;
    padding: 0 30px;
    text-decoration: none;
    color: #000000;
}

.navbar ul li a:hover{
    color: rgb(156, 155, 160);
    transform: scale(1.2);
    transition: .3s;
    text-shadow: none;
}

.navbar img{
    width: 150px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    margin-left: 50px;
    margin-top: -15px;
}
</style>
<body>
<div class="navbar">
        <a href = "../index.php" ><img src="nutrilife.jpg" class="logo-img"></a>
        <ul>
            <li><a href="../index.php">Home</a></li>  
        </ul>
    </div>


<main>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form login-form">
            <form action="login-user.php" method="POST" autocomplete="">
                <h2 class="text-center"><img src="nutrilife.jpg" class="logo-img"></h2>
                <p class="text-center">Login with your email and password.</p>
                <?php
                if(count($errors) > 0){
                ?>
                <div class="alert alert-danger text-center">
                <?php
                    foreach($errors as $showerror){
                        echo $showerror;
                    }
                ?>
                </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                </div>

               <p> <input type="checkbox" class="showpass" onclick="myFunction()"> Show Password </p>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>    

                <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                <div class="form-group">
                    <input class="form-control button" type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
</main>

<footer class="footer">
        <div class="container2">
            <div class="row">
                <div class="footer-col">
                    <a href = "#" > <img src="nutrilife.jpg" class="logo"> </a>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="../AboutUs/aboutus.php">about us</a></li>
                        <li><a href="../Admin/login-user.php">Admin Page</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="../FAQ/faq.php">FAQ</a></li>
                        <li><a href="../Contact/contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>About</h4>
                    <ul>
                        <li><a href="../AboutUs/mission.php">Mission</a></li>
                        <li><a href="../AboutUs/vision.php">Vision</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/nutrilife.wholesaling"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/Nutrilife.veggies/"><i class="fab fa-instagram"></i></a>
                        <a href="https://msng.link/o/?09614621005=vi"><i class="fab fa-viber"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
</body>
</html>