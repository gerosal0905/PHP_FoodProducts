<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <title>NutriLife</title>
    <link href="./Homepage/style5.css" rel = "stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet" />
</head>
<style>
.slideshow-container {
    height: 597px; 
    width: 481px;
    margin-top: 140px;
    margin-left: 200px;
    margin-bottom: 100px;
    object-fit: cover;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
    position: relative;
}
.items{
     
     display: grid;
     grid-template-columns: repeat(4, 1fr);
     align-items: center;
     padding: 5px 160px;
     grid-column-gap: 40px;
     grid-row-gap: 30px
 }

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
        <a href = "index.php" > <img src="./Homepage/nutrilife.jpg" class="logo-img"> </a>
        <ul>
            <li><a href="#">Home</a></li>
            
            <li><a>
            <div class="dropdown">
                <button class="dropbtn">Category</button>
                <div class="dropdown-content">
                    <a href="./Category/category.php">All Products</a>
                    <a href="./Category/FruitsVeggies.php">Fruits/Veggies</a>
                    <a href="./Category/FreshSalads.php">Fresh Salad</a>
                    <a href="./Category/MadeNutrilife.php">Made with Nutrilife</a>
                    <a href="./Category/Beverage.php">Beverage/In-Cup Salads</a>
                </div>
            </div>
            </a></li>
            <li><a href="./Contact/contact.php">Contact Us</a></li>
        </ul>
    </div>

    <main>
        <div class="content">
            <h1> Fruits and vegetables <br> wholesaling</h1>
            <p>Boost that immunity from your home! Farm fresh delivered to your doorstep!</p>
            <a href="./Category/category.php"><button class="btns">View More</button></a>
        </div>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="./Homepage/Images/home1.jpg" style= "height: 597px; width: 481px; object-fit: cover; border-radius: 5px;">
            </div>

            <div class="mySlides fade">
                <img src="./Homepage/Images/home2.jpg" style= "height: 597px; width: 481px; object-fit: cover; border-radius: 5px;">
            </div>

            <div class="mySlides fade">
                <img src="./Homepage/Images/home3.jpg" style= "height: 597px; width: 481px; object-fit: cover; border-radius: 5px;">
            </div>

            <div class="mySlides fade">
                <img src="./Homepage/Images/home4.png" style= "height: 597px; width: 481px; object-fit: cover; border-radius: 5px;">
            </div>

            <div class="mySlides fade">
                <img src="./Homepage/Images/home5.jpg" style= "height: 597px; width: 481px; object-fit: cover; border-radius: 5px;">
            </div>

            <div class="mySlides fade">
                <img src="./Homepage/Images/home6.jpg" style= "height: 597px; width: 481px; object-fit: cover; border-radius: 5px;">
            </div>
        </div>

    </main>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

  

    <p id="one"> CATEGORIES </p>

    <section class="items">
        <div class="item">
            <img onclick="location.href ='./Category/FruitsVeggies.php';" src="./Homepage/Images/category1.jpg">
            <p id="three">Fruits & Veggies</p>
           
        </div>
        <div class="item">
            <img onclick="location.href ='./Category/FreshSalads.php';" src="./Homepage/Images/category2.jpg">
            <p id="three">Farm Fresh Salads</p>
          
        </div>
        <div class="item">
            <img onclick="location.href ='./Category/MadeNutrilife.php';" src="./Homepage/Images/category3.jpg">
            <p id="three">Made with #NutriLife</p>
         
        </div>
        <div class="item">
            <img onclick="location.href ='./Category/Beverage.php';" src="./Homepage/Images/category4.jpg">
            <p id="three">Beverages/In-cup</p>
            
        </div>
        </section>

        <p id="two"> Made more fresh since it’s <br> #MadeWithNutriLife! </p>
         


    <footer class="footer">
        <div class="container2">
            <div class="row">
                <div class="footer-col">
                    <a href = "#" > <img src="./Homepage/nutrilife.jpg" class="logo"> </a>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="./AboutUs/aboutus.php">about us</a></li>
                        <li><a href="./Admin/login-user.php">Admin Page</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="./FAQ/faq.php">FAQ</a></li>
                        <li><a href="./Contact/contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>About</h4>
                    <ul>
                        <li><a href="./AboutUs/mission.php">Mission</a></li>
                        <li><a href="./AboutUs/vision.php">Vision</a></li>
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