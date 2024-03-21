<?php
include('../include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_registration</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--fnt awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../admin/css/style.css" >

</head>
<body>
 <!-- navbar -->
<nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <img src="../images/logo4.png" alt="" class="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="pic/menu.png" alt="" width="30px"></span>
          </button>
          
      
          <div class="collapse navbar-collapse" id="navbar-items">
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
                  
              
            </div>
            <div>
             
              
</div>
            
             </div>
            </nav>
            
            <!---second nav start-->
             <nav class="navbar navbar-expand-lg" id="navbar2">
  <ul class="navbar-nav me-auto" id="nav2-items">
    <li class="nav-item">
      <a class="nav-link" href="#">WELCOME GUEST </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="./user_area/user_login.php">LOGIN</a>
</li>
</ul>

</nav>


<!-- third child -->


<div class="bg-light">
  <h2 class="text-center">Mobilestore4U</h2>
  <p class="text-center">Find Your New mobile</P>
</div>

<!-- login-->

</header>


<main>
        
<div class="row px-1">
    <div class="col-md-12">
            <?PHP
            if(!isset($_SESSION['username'])){
                include('user_login.php');
            }else{
                include('../payment.php');
                
            }
                ?>
            




<div class="row">

<!--fetching products by calling functions-->


    </div>
    </div>


    </main>
    
    <!----footer-->
    <footer id="footer">
    <div class="footer">
    
        <div class="p-3 text-center">
            <div class="credits">
                Designed by <a href="#">Harsh & Gurman</a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Mobilestore4U</span></strong>. All Rights Reserved
            </div>

        </div>
        </div>
          </footer>
    
    <!---footer close-->
    

    <!-- bootstrap css link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>