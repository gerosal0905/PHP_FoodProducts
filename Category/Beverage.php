<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NutriLife</title>
    <link href="style2.css" rel = "stylesheet" />
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
                    <a href="#">Beverage/In-Cup Salads</a>
                </div>
            </div>
            </a></li>
            <li><a href="../Contact/contact.php">Contact Us</a></li>
          
        </ul>
    </div>

    <main>
        <div class="content">
            <p id="one">Beverages/In-cup Salads</p>
            <p id="two">We have lots of choices!</p>
            
        </div>
    </main>
    <div class="container">
    <section class="items">
        <?php
            require 'dbconfig.php';
            $query = "SELECT * FROM user WHERE category = 'Beverages/In-cup Salads'";
            $query_run = mysqli_query($connection, $query);
            $check_product = mysqli_num_rows($query_run) > 0;

            if($check_product)
            {
                while($row = mysqli_fetch_array($query_run))
                {
        ?>
            <div class="item">
            <form action="../Product_Details/product_details.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <button id="pic" type="submit" name="view"> <img src="../Admin/upload/<?php echo $row['image']; ?>" alt="Images"> </button>
                        
                    </form>
            
                    <p id=three class="card-title"> <?php echo $row['name']; ?></p>
                <p id="four" class="card-title"><?php echo $row['lastname']; ?></p>
                <p id="price" class="card-title">₱<?php echo $row['price']; ?>
                </p>
                    
            </div>
        <?php
            }
        }
        else
        {
            echo "No Product Found.";
        }
        ?>     
    </section>
    </div>
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
   </footer>
</body>
</html>