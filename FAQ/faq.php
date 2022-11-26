<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>FAQs</title>
        <link rel="stylesheet" href="style4.css"/>
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
            <a href = "../index.php" > <img src="nutrilife.jpg" class="logo-img"> </a>
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
                <li><a href="../Contact/contact.php">Contact Us</a></li>
            </ul>
        </div>    

        <section>
            <h2 class="title">FAQs</h2>

            <div class ="faq">
                <div class="question">
                    <h3>Are the products Fresh?</h3>
                
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        Yes, they are produce daily and freshly.
                    </p>
                </div>
            </div>

            <div class ="faq">
                <div class="question">
                    <h3>Do you deliver? Where?</h3>
                    
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="answer">
                    <p>
                        Yes, we deliver within Metro Manila.
                    </p>
                </div>
            </div>
            
        </section>
        <script src="./app.js"></script>

        <footer class="footer">
            <div class="container">
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
                            <li><a href="#">FAQ</a></li>
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
