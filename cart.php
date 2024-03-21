<?php
include('./include/connect.php');
include('./functions/common_functions.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart Details</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--fnt awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./admin/css/style.css" >

</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <img src="./images/logo4.png" alt="" class="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="pic/menu.png" alt="" width="30px"></span>
          </button>
          
      
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
                <a class="nav-link" href="cart.php">
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
            <nav class="navbar navbar-expand-lg" id="navbar2">
  <ul class="navbar-nav me-auto">
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


</header>

<?php 
cart();
?>

  
            <div class="container">
                <div class="row">
                  <form action="" method="post">
                    <table class="table table-bordered text-center border-1">
                        
                            <!--- php code for data --->
                            <?php 
                              

                             $get_ip_add= getIPAddress();
                             $total_price=0;
                             $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
                           $result=mysqli_query($conn,$cart_query);
                           $result_count=mysqli_num_rows($result);
                           if($result_count>0){
                              echo"  <thead>
                              <tr>
                                  <th>Product Title</th>
                                  <th>Product Image</th>
                                  <th>Quantity</th>
                                  <th>Total Price</th>
                                  <th>Remove</th>
                                  <th colspan='2'>Operations</th>
                              </tr>
                          </thead>
                          <tbody>";



                           while($row=mysqli_fetch_assoc($result)){
                             $product_id=$row['product_id'];
                             $select_products="select * from `products` where product_id='$product_id'";
                             $result_products=mysqli_query($conn,$select_products);
                             while($row_products_price=mysqli_fetch_array($result_products)){
                               $product_price=array($row_products_price['product_price']);
                               $price_table=$row_products_price['product_price'];
                               $product_title=$row_products_price['product_title'];
                               $product_image1=$row_products_price['product_image1'];
                               $product_values=array_sum($product_price);
                               $total_price+=$product_values;                  
    ?>
                    <tr> 
                        <td><?php echo $product_title?></td>
                          <td><img src="./admin/product_images/<?php echo $product_image1?>"  alt="" height="120px" ></td>
                             <td><input type="text" name="qty"  class="form-input w-50"></td>

                                  <?php 
                                  $get_ip_add = getIPAddress();
                                  if(isset($_POST['update_cart'])){
                                    $quantities=$_POST['qty'];
                                    $update_cart="update `cart_details` set quantity=$quantities where ip_address='$get_ip_add'";
                                    $result_products_quantity=mysqli_query($conn,$update_cart);
                                    $total_price=$total_price*$quantities;
                                  }
                                  ?>


                             <td><?php echo $price_table?>/-</td>
                               <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                             <td>
                             <input type="submit" value="Update Cart" class="bg-info px-3 py-2 border-0 mx-3" name="update_cart">
                             <input type="submit" value="Remove Cart" class="bg-info px-3 py-2 border-0 mx-3" name="remove_cart">
                               </td>
                            </tr>

                       <?php }}}
                       else{
                        echo "<h2 class='text-center text-danger'> CART IS EMPTY</h2>";
                       }
                       
                       ?>
                            
                          

                        </tbody>
                    </table>
                    <!--- total --->
                    
                    <div class="d-flex mb-5">
                      <?php
                    $get_ip_add= getIPAddress();
                    $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
                           $result=mysqli_query($conn,$cart_query);
                           $result_count=mysqli_num_rows($result);
                           if($result_count>0){
                              echo "<h4 class='px-3'>TOTAL:<strong class='text-info'>$total_price/-</strong></h4>
                              <input type='submit' value='Continue shopping' class='bg-info px-3 py-2 border-0 mx-3' name='Continue_shopping'>
                              <button class='bg-secondary p-3 py-2 border-0 mx-3 text-light'><a href='./user_area/checkout.php' class='text-light text-decoration-none' >CHECKOUT</button></a>";
                           }
                           else{
                               echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3' name='Continue_shopping'>";            

                              }
                              if(isset($_POST['Continue_shopping'])){
                                              echo "<script>window.open('category.php','_self')</script>";
                                            }           
                            ?>
                                        </div>
                                    </div>
                                   </div>
                          </form>

                          <?php
                          function remove_cart_item(){
                            global $conn;
                            if(isset($_POST['remove_cart'])){
                              foreach($_POST['removeitem'] as $remove_id){
                                    echo $remove_id;
                                    $delete_query="Delete  from `cart_details` where product_id=$remove_id";
                                    $run_delete=mysqli_query($conn,$delete_query);
                                    if($run_delete){
                                      echo "<script>window.open('cart.php','_self')</script>";
                                    }
                              }
                            }
                          }
                          echo $remove_item=remove_cart_item();
                          ?>
    
    
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