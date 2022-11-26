<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link rel = "stylesheet" href = "style6.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

    <?php
    session_start();
    include('dbconfig.php');
    ?>

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

    <?php
        $connection = mysqli_connect("localhost", "root", "", "nutrilife");
        if(isset($_POST['view'])){
            $id = $_POST['product_id'];

            $query = "SELECT * FROM user WHERE id = '$id'";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row){        
    ?>

    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "../Admin/upload/<?php echo $row['image']; ?>" alt="Images" style="width: 250px; length: 250px">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "images/image1.jpg"></div>
                        <div><img src = "images/image2.jpg"></div>
                        <div><img src = "images/image3.jpg"></div>
                        <div><img src = "images/image4.jpg"></div>
                        <div><img src = "images/image6.jpg"></div>
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $row['name']; ?></span>
                    <span class = "product-price">₱<?php echo $row['price']; ?></span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description"><?php echo $row['lastname']; ?></p>
                    <div class = "btn-groups">
                        <a href="../Contact/contact.php"><button type = "button" href ="../Contact/contact.php" class = "add-cart-btn"><i class = "fas fa-address-card"></i> Contact Us</button></a>
                        <button type = "button" class = "buy-now-btn" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>"><i class = "fas fa-calendar"></i>Check Availability</button>
                        <div class="modal fade" id="myModal<?php echo $row['id'] ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Availability</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="../Admin/upload/<?php echo $row['image']; ?>" width=200px height=200px alt="Images">
						            <h3>Product Code: <?php echo $row['id']; ?></h3>
						            <h3>Best By: <?php echo $row['dated']; ?></h3>
				                </div>
                            </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src = "script.js"></script>

    <?php
            }
        }
    ?>

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

    
</body>
</html>