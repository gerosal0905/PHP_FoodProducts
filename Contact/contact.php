<?php include 'sendEmail.php'?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Contact Page</title>
        <link href = "style3.css" rel = "stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet" />
    </head>
    <style>

 .dropbtn {
  background-color: white;
  color: black;
  font-size: 14px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 210px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: none;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {color: rgb(156, 155, 160);
    transform: scale(1.2);
    transition: .3s;
    text-shadow: none;}

    </style>
    <body>
        <div class="navbar">
            <a href = "../index.php" ><img src="nutrilife.jpg" class="logo-img"></a>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a>
            <div class="dropdown">
                <button class="dropbtn">Category</button>
                <div class="dropdown-content">
                    <a href="../Category/category.php">All Products</a>
                    <a href="../Category/FruitsVeggies.php">Fruits/Veggies</a>
                    <a href="../Category/FreshSalads.php">Fresh Salad</a>
                    <a href="../Category/MadeNutrilife.php">Made with Nutrilife</a>
                    <a href="../Category/Beverage.php">Beverage/In-Cup Salads</a>
                </div>
            </div>
            </a></li>
                <li><a href="#">Contact Us</a></li>    
            </ul>
        </div>

        <main>
            <div class="content">
                <p id="one">We'd Love to Hear From You.</p>  
            </div>
            <div class="container1">
                <div class="contact-box">
                    <div class="left"></div>
                    <div class="right">
                        <?php echo $alert; ?>
                            <form action="" method="post"> 
                            <h3>Contact Us</h3>
                            
                                <input type = "text" name = "name" class="field" placeholder = "Your Name" required>
                                <input type = "email" name = "email" class="field" placeholder = "Email Address" required>
                                <textarea class="field" name = "message" rows = "4" placeholder = "How can we help you?" required></textarea>
                                <input type = "submit" name = "submit" value = "Send" class ="btn">
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
            </div>
        </footer>
        <!--<script src = "https://smtpjs.com/v3/smtp.js"></script>
        <script>
            const btn = document.querySelector('button')
            const inputs = document.querySelector('form')
            var mess = document.getElementById("message").value
            btn.addEventListener('click', () => {
                if(document.getElementById("message").value == '' || document.getElementById("email").value == '' || document.getElementById("name").value == ''){
                    alert("All Fields are required")
                }else{
                    Email.send({
                    Host : "smtp.gmail.com",
                    Username : "websitetest20223@gmail.com",
                    Password : "websitetest123",
                    To : 'websitetest20223@gmail.com',
                    From : inputs.elements["email"].value,
                    Subject : "New Inquiry",
                    Body : inputs.elements["message"].value + "<br><br>" + "From " + inputs.elements["name"].value
                }).then(msg => alert("The email successfully sent"))
                }
                
            })
        </script>-->
        
        <script type="text/javascript">
            if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>