<?php
$servername = 'localhost';
$user = 'root';
$pass = '';
$db = 'mobilesdb';

$conn =  mysqli_connect($servername, $user, $pass, $db) or failed("not connect");


if(isset($_POST['submit'])){

   $name =$_POST['name'];
   $email =$_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   
   $q = "insert into Contactus(name,email,phone,message) values ('$name','$email','$phone','$message')";

$exe=mysqli_query($conn,$q);

   if(!$exe){
      die(mysqli_error($conn).$q);
}else{
   echo "<script>alert('Your Message Is SUBMITTED');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <title>Mobilestore4U</title>
    <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

   
<heade>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <img src="./images/logo4.png" alt="" class="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="pic/menu.png" alt="" width="30px"></span>
          </button>
           <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                  <li><a class="dropdown-item" href="product.php">Andriod mobiles</a></li>
                  <li><a class="dropdown-item" href="product.php">Iphones</a></li>
                  <li><a class="dropdown-item" href="product.php">5G Mobiles</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">
                 <i class="fa-solid fa-cart-shopping"></i>Cart</a>
              </li>   
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  sign up
                </a>

                <ul class="dropdown-menu" id="signup" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="login.php"><img src="./images/register.png" alt="" width="18px">Login</a></li>
                  <li><a class="dropdown-item" href="register.php"><img src="./images/register.png" alt="" width="18px">Register</a></li> 
                </ul>
              </li>
              
                <li class="nav-item" id="admin1" >
                <a  class="nav-link" id="admin2" href="./admin/index.php">GO TO ADMIN</a>
              </li>
</div>
            
             </div>
            </nav>
    <!-- navbar -->
    </header>
   <main>
    <!-- home content -->
   <section class="home">
        <div class="img">
      <img src="./images2/i3.png" alt="" >
    </div>
</section>
    <!-- home content -->






    <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">PRODUCTS</h1>
      <div class="row" style="margin-top: 70px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images2/i13p.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Iphones</h3>
              <p class="text-center">All iphone series is here</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                <div class="btn">
                <a href="product.php" ><button>EXPLORE</button></a>

              </div>
            </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/phone2.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Andriod mobiles</h3>
              <p class="text-center">explore different brands</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
             <h2><div class="btn"><a href="product.php"><button>EXPLORE</button></a></div></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/laptop2.png" alt="">
            <div class="card-body">
              <h4 class="text-center">Laptop</h4>
              <p class="text-center">coming soon.........</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><div class="btn"><button>EXPLORE</button></div></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/t1.png" alt="">
            <div class="card-body">
              <h4 class="text-center">Ipad</h4>
              <p class="text-center">coming soon.........</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><div class="btn"><button>EXPLORE</button></div></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/w1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Smart Watch</h3>
              <p class="text-center">coming soon.........</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><div class="btn"><button>EXPLORE</button></div></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr8.png" alt="">
            <div class="card-body">
              <h3 class="text-center">PC Moniter</h3>
              <p class="text-center">coming soon.........</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><div class="btn"><button>EXPLORE</button></div></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr10.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Power bank</h3>
              <p class="text-center">coming soon.........</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><div class="btn"><button>EXPLORE</button></div></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/h1.png" alt="">
            <div class="card-body">
              <h4 class="text-center">Headphone</h4>
              <p class="text-center">coming soon.........</p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><div class="btn"><button>EXPLORE</button></div></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- product cards -->



    <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The Mobilestore4U For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    <!-- newslater -->




</main>

    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>MobileStore4U</h3>
              <p>
                Jalandher<br>
                punjab <br>
                india <br>
              </p>
              <strong>Phone:</strong> +9186993999913 or +919530508485 <br>
              <strong>Email:</strong> mobilestore4u@.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">IPhones</a></li>
              <li><a href="#">Android mobiles</a></li>
              <li><a href="#">5G MOBILES</a></li>
              <li><a href="#">Computer</a></li>
              <li><a href="#">Laptop</a></li>
              
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>.</p>

              <div class="socail-links mt-3">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
     
        <div class="container py-4">
          <div class="credits">
          Designed by <a href="#">Harsh & Gurman</a>
        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>Mobilestore4U</span></strong>. All Rights Reserved
        </div>
        
      </div>
    </footer>
    <!-- footer -->


    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>