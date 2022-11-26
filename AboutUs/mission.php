<!DOCTYPE html>
<html>
<head>
	<title>Mission</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
            <li><a href="../Contact/contact.php">Contact Us</a></li>    
        </ul>
    </div>



	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Mission</h1>
				</div>
				<div class="content">
					<h3>NUTRILIFE FRUITS AND VEGETABLES WHOLESALING</h3>
					<p>Our mission is to deliver an uncompromising level of
                    personalized service to our customers by continually improving
                    our products and services and ensuring that a customer first
                    approach is adopted at all times. We operate a flexible operation
                    which has been designed to cater to the needs of our customers.
                    Here in NUTRILIFE, we bring the freshest produce generally
                    closer to our consumers, wherever, whenever and however they
                    need them.</p>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/nutrilife.wholesaling"><i class="fab fa-facebook-f"></i></a>
					<a href="https://msng.link/o/?09614621005=vi"><i class="fab fa-viber"></i></a>
					<a href="https://www.instagram.com/nutrilife.veggies/"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="bg.jpg">
			</div>
		</div>
	</div>
    <footer class="footer">
        <div class="container2">
            <div class="row">
                <div class="footer-col">
                    <a href = "#" > <img src="nutrilife.jpg" class="logo"> </a>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="aboutus.php">about us</a></li>
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
                        <li><a href="#">Mission</a></li>
                        <li><a href="vision.php">Vision</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/nutrilife.wholesaling"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/nutrilife.veggies/"><i class="fab fa-instagram"></i></a>
                        <a href="https://msng.link/o/?09614621005=vi"><i class="fab fa-viber"></i></a>
                    </div>
                </div>

                
                </div>
            </div>
        </div>
    </footer>
	
</body>
</html>