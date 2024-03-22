<?php

include('../include/connect.php');

include('../functions/common_functions.php');
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
                <a class="nav-link active"  href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../product.php">Product</a>
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
                <a class="nav-link" href="../about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="../cart.php">
                 <i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
              </li>   
              
            </div>
            <div>
              <form class="d-flex" action="search_product.php" method="get">
            
            <input class="form-control me-2" type="search" placeholder="Search" 
            aria-label="Search" name="search_data">
          <input type="submit" value="search"  class="btn btn-outline-light" name="search_data_product">
          
          </form>
              
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

 
    
    <div class="container-fluid my-3" id="register">
         
        <div class="col-md-7 py-3 py-md-0" id="side-rg">
            <h3 class="text-center">New User Registration</h3>
        <div class="row d-flex align-item-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                
                        <!-- username field-->

                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" 
                        placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
                    
                            <!--- email field--->
                            
                         <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control"
                        placeholder="Enter your email" autocomplete="off" required="required" name="user_email"/>
                       
                        <!--- image field--->
                            
                       <label for="user_image" class="form-label">Image</label>
                        <input type="file" id="user_image" class="form-control" 
                        placeholder="Enter your image" autocomplete="off" required="required" name="user_image"/>
                    
                        <!--- password field--->
                            
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" 
                        placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
                        
                        <!---  confirm password field--->
                            
                        <label for="conf_user_password" class="form-label">Confirm password</label>
                        <input type="password" id="conf_user_password" class="form-control" 
                        placeholder="Confirm password" autocomplete="off" required="required" name="conf_user_password"/>
                    
                        <!---  address field--->
                            
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" id="user_address" class="form-control" 
                        placeholder="Enter your address" autocomplete="off" required="required" name="user_address"/>
                    
                        <!---  phone field--->
                            
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" id="user_contact" class="form-control" 
                        placeholder="Enter your Mobile Number" autocomplete="off" required="required" name="user_contact"/>
                    
                        <input type="submit" value="Register" class=" bg-info py-2 px-3 mt-4 pt-2 border-0" 
                        name="user_register">
                        <p >Already have an account?<a href="checkout.php">Login</a> </p>

                     </div>
                </form>
              </div>
            </div>
        </div>
    </div>

    
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

<?php 

if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();

// select query  //
$select_query="select * from `user_table` where username='$user_username' or user_email='$user_email'";
$result=mysqli_query($conn,$select_query);
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    echo "<script>alert('username and email already exist')</script>";
}
else if($user_password!=$conf_user_password){
 
    echo "<script>alert('Password does not match')</script>";
}

else{


     //insert query//
     move_uploaded_file($user_image_tmp,"./user_images/$user_image");
     $insert_query="insert into `user_table` (username,user_email,user_password,
     user_image,user_ip,user_address,user_mobile) values ('$user_username','$user_email',
     '$user_password','$user_image','$user_ip',' $user_address','$user_contact')";
     $sql_execute=mysqli_query($conn,$insert_query);
     if($sql_execute){
         echo "<script>alert('Data inserted successfully')</script>";
     }
}

   //selecting cart items //

   $select_cart_items="select * from  `cart_details` where ip_address='$user_ip'";
   $result_cart=mysqli_query($conn,$select_cart_items);
   $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
    $_SESSION['username']=$user_username;
    echo "<script>alert('you have item in your cart')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
   }else{
    echo "<script>window.open('../index.php','_self')</script>";
     
   }
}
?>