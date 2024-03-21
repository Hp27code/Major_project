<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <title>Mobilestore4U</title>
    <link rel="stylesheet" href="css/style.css">
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
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

   

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
                
              
                <li class="nav-item" id="admin">
                <a class="nav-link" href="admin.php">ADMIN</a>
              </li>
            </ul>
             </div>
            </nav>
    <!-- navbar -->





 
    <div class="container" id="about">
        <h1 class="text-center"><b>ABOUT US</b></h1><br><br>
        
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                    <img src="./images/about-img.svg" alt="">
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
                <h3>WHY CHOOSE US</h3>
       <p>ABOUT mobilestore4u Company Overview.<br><br>
        
       > MOBILESstore4U is a great tool for online comparison shopping. We make it surprisingly easy for you to find a product, know about that product and compare it with others.<br><br>

        > Our goal is to provide the best comparison shopping experience on the Internet, and establish smartprix.com as the most trusted and effective online destination to make a purchase decision.<br><br>

        > Use Mobilestore4u to quickly obtain free and unbiased information about mobile phones before making a purchase decision. <br><br>

        > The website also offers shoppers the ability to view and compare mobile phones and their respective pricing information on different online stores, thereby enabling users to ultimately find the right product from the right store at the best price.</p>
        <hr>
              <a href="contact.html" > <button>contact us...</button> </a>
            </div>
        </div>
    </div>








    z





    
    <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The  Mobilestore4U For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    <!-- newslater -->






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
              <li><a href="#">4G MOBILES</a></li>
              <li><a href="#">5G MOBILES</a></li>
              <li><a href="#">Computer</a></li>
              <li><a href="#">Laptop</a></li>
              <li><a href="#">IPhones</a></li>
              <li><a href="#">Android mobiles</a></li>
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
      <hr>
     <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Mobilestore4U</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">Harsh & Gurman</a>
        </div>
      </div>
    </footer>
    <!-- footer -->






    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>