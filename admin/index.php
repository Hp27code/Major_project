<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--fnt awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../admin/css/style.css">

</head>

<body>
    <header>
    <!-- navbar -->

    <div class="container-fluid p-0" id="navbar">
        <nav class="navbar">
            <div class="container-fluid">
                <img src="../images/logo4.png" alt="" class="logo">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link"> Welcome guest</a>
                    </li>
                </ul>
</div>
        </nav>
        </div>
        </nav>
</header>


<main>
        

        <!--secnd child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>

        </div>

        <!--- third child-->
        <div class="row">

            <div class="col-md-13 p-3 d-flex alighn-items-center" id="profile">
                <div class="p-3" id="image">
                    <a href=""><img src="../images2/Koala.jpg" alt="" class="profile-img">
                    </a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3" id="btn"><a href="insert-product.php" class="nav-link ">Insert Product</a></button>
                    <button class="my-3" id="btn"><a href="" class="nav-link ">View Products</a></button>
                    <button class="my-3" id="btn"><a href="index.php?insert-category" class="nav-link ">Insert Category</a></button>
                    <button class="my-3" id="btn"><a href="" class="nav-link ">View Category</a></button>
                    <button class="my-3" id="btn"><a href="index.php?insert-brands" class="nav-link ">Insert Brands</a></button>
                    <button class="my-3" id="btn"><a href="" class="nav-link ">View Brands</a></button>
                    <button class="my-3" id="btn"><a href="" class="nav-link ">All Orders</a></button>
                    <button class="my-3" id="btn"><a href="" class="nav-link ">All Payments</a></button>
                    <button class="my-3" id="btn"><a href="" class="nav-link ">list Users</a></button>
                    <button class="my-3" id="btn"><a href="" class="nav-link ">Logout</a></button>

                </div>
            </div>
        </div>

   <!--fourth child-->

   <div class="container my-5">
    
    <?php
    if(isset($_GET['insert-category'])){
        include('insert-category.php');
       
    }
    if(isset($_GET['insert-brands'])){
        include('insert-brands.php');
      }
    ?>
    </div>

    </div>
    <section class="home">
        <div class="img">
      <img src="../admin/img/bg.jpg" alt="" >
   
    </section>
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