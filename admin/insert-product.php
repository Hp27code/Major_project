<?php
include('../include/connect.php');
if(isset($_POST['insert_product'])){


                $product_title=$_POST['product_title'];
                $description=$_POST['description'];
                $product_keywords=$_POST['product_keywords'];
                $product_category=$_POST['product_category'];
                $product_brands=$_POST['product_brands'];
                $product_price=$_POST['product_price'];
                $product_status='true';

                //access images//


                $product_image1=$_FILES['product_image1']['name'];
                $product_image2=$_FILES['product_image2']['name'];
                $product_image3=$_FILES['product_image3']['name'];
        
                //cheching empty condotion
                $temp_image1=$_FILES['product_image1']['tmp_name'];
                $temp_image2=$_FILES['product_image2']['tmp_name'];
                $temp_image3=$_FILES['product_image3']['tmp_name'];

                //check empty condition//

                if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' 
                or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' 
                or $product_image3==''){

                        echo "<script> alert('please fill all the available fields')</script>";

                        exit();
                }else{

                                move_uploaded_file($temp_image1,"../admin/product_images/$product_image1");
                                move_uploaded_file($temp_image2,"../admin/product_images/$product_image2");
                                move_uploaded_file($temp_image3,"../admin/product_images/$product_image3");
                         
                          //insert query//
           $insert_products="insert into `products` (product_title, product_description,
           product_keywords, category_id, brand_id, product_image1, product_image2, product_image3, 
           product_price,date,status) values ('$product_title','$description','$product_keywords',
           '$product_category','$product_brands','$product_image1',
            '$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
          $result_query=mysqli_query($conn,$insert_products);
          if($result_query){
                echo "<script>alert('successfully inserted the products')</script>";
          }
          }
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert_product</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--fnt awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../admin/css/style.css" >

</head>

<body>
    <header>
    <!-- navbar -->
<!-- navbar -->
<nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <img src="../images/logo4.png" alt="" class="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="pic/menu.png" alt="" width="30px"></span>
          </button>
           <form class="d-flex" action="search_product.php" method="get">
            
        <input class="form-control me-2" type="search" placeholder="Search" 
        aria-label="Search" name="search_data">
      <input type="submit" value="search"  class="btn btn-outline-light" name="search_data_product">
      
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
            <!-- second nav child --->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">welcome guest </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">login</a>
</li>
</ul>

</nav>

<body>
    <div class="container mt-3 my-3" id="insert">
        <h1 class="text-center">Insert Products</h1>
        <!--form-->

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="Product_title" class="form-label">Product Title</label>
        <input type="text"  name="product_title" id="product_title"
         class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
</div>

<!---description-->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="description" class="form-label">Product Description</label>
        <input type="text"  name="description" id="description"
         class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
</div>

<!--keywords-->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="Product_keywords" class="form-label">Product Keyword</label>
        <input type="text"  name="product_keywords" id="product_keywords" class="form-control" 
        placeholder="Enter Product keywords" autocomplete="off" required="required">
</div>

<!--categories-->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_category" id="" class="form-select">
    <option value="">Select a category</option>


    <?php 
    $select_query="select * from `categories`";
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
    $category_title=$row['category_title'];
    $category_id=$row['category_id'];
    echo "<option value='$category_id'>$category_title</option>";
    
    }
    ?>

</select>
</div>

<!--brands-->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_brands" id="" class="form-select">
    <option value="">Select a Brands</option>
    <?php 
    $select_query="select * from `brands`";
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
    $brand_title=$row['brand_title'];
    $brand_id=$row['brand_id'];
    echo "<option value='$brand_id'>$brand_title</option>";
    
    }
    ?>
</select>
</div>
<!--images1--->
<div class="form-outline mb-4 w-50 m-auto">
<label for="Product_image1" class="form-label">Product Image 1</label>
        <input type="file"  name="product_image1" id=" Product_image1" class="form-control" required="required">
</div>
<!--2-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="Product_images2" class="form-label">Product Image 2</label>
        <input type="file"  name="product_image2" id=" Product_image2" class="form-control" required="required">
</div>
<!--3-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="Product_images3" class="form-label">Product Image 3</label>
        <input type="file"  name="product_image3" id=" Product_image3" class="form-control" required="required">
</div>
<!---price-->
<div class="form-outline mb-4 w-50 m-auto">
<label for="Product_price" class="form-label">Product Price</label>
        <input type="text"  name="product_price" id=" Product_price" class="form-control" required="required">
</div>

<!--submit-->
<div class="form-outline mb-4 w-50 m-auto">
 <input type="submit"  name="insert_product"  class="btn btn-info" value="Insert Products" required="required">
</div>
        

</form>
</div>


<!--- footer start --->

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
</body>
</html>