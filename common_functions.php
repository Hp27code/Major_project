<?php
//include connection
include('include/connect.php');


//get products
function getproduct(){
    global $conn;

    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
$select_query="select * from `products`";
$result_query=mysqli_query($conn,$select_query);
//--$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
          while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_keywords=$row['product_keywords'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <h5 class='card-text'>$product_price</h5>
           <a href='category.php?add_to_cart=$product_id' class='btn btn-info'>ADD TO CART</a>
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
           </div>
      </div>
      </div>";
}
}
}
}

//get unique categories
function get_unique_categories(){
    global $conn;

    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
      
$select_query="select * from `products` where category_id=$category_id";
$result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'> NO STOCK FOR THIS CATEGORY</H2>";
}

          while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_keywords=$row['product_keywords'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <h5 class='card-text'>$product_price</h5>
           <a href='category.php?add_to_cart=$product_id' class='btn btn-info'>ADD TO CART</a>
         
           <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
           </div>
      </div>
      </div>";
}
}
}

//get uniqe brands
function get_unique_brand(){
  global $conn;

  if(isset($_GET['brand'])){
      $brand_id=$_GET['brand'];
    
$select_query="select * from `products` where brand_id=$brand_id";
$result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center text-danger'> NO STOCK FOR THIS BRAND</H2>";
}

        while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_keywords=$row['product_keywords'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          
          echo "<div class='col-md-4 mb-2'>
          <div class='card'>
      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <h5 class='card-text'>$product_price</h5>
        <a href='category.php?add_to_cart=$product_id' class='btn btn-info'>ADD TO CART</a>
         
         <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
         </div>
    </div>
    </div>";
}
}
}

    
  //get brands 

function getbrands(){
    global $conn;
    $select_brands="select * from `brands`";
$result_brands=mysqli_query($conn,$select_brands);
while($row_data=mysqli_fetch_assoc($result_brands)){
$brand_title=$row_data['brand_title'];
$brand_id=$row_data['brand_id'];

echo "<li class='nav-item'> <a href='category.php?brand=$brand_id' class='nav-link text-light'> $brand_title </a> </li>";
}
    
}

function getcategories(){
    global $conn;
    $select_category="select * from `categories`";
$result_category=mysqli_query($conn,$select_category);
while($row_data=mysqli_fetch_assoc($result_category)){
$category_title=$row_data['category_title'];
$category_id=$row_data['category_id'];

echo "<li class='nav-item'> <a href='category.php?category=$category_id' class='nav-link text-light'> $category_title </a> </li>";
}
}


//searchingh products
function  search_product(){
global $conn;

if(isset($_GET['search_data_product'])){
      $search_data_value=$_GET['search_data'];
    $search_query="select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query=mysqli_query($conn,$search_query);

    $num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center text-danger'> NO PRODUCT FOUND!!</h2>";
}
  while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_keywords=$row['product_keywords'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        
        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
    <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <h5 class='card-text'>$product_price</h5>
       <a href='category.php?add_to_cart=$product_id' class='btn btn-info'>ADD TO CART</a>
         
       <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
       </div>
  </div>
  </div>";
}
}
}

//view deatil function
function  view_details(){

  global $conn;
if(isset($_GET['product_id'])){
  if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $product_id=$_GET['product_id'];
$select_query="select * from `products` where product_id=$product_id";
$result_query=mysqli_query($conn,$select_query);

        while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_keywords=$row['product_keywords'];
          $product_image1=$row['product_image1'];
          $product_image2=$row['product_image2'];
          $product_image3=$row['product_image3'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          
          echo "<div class='col-md-4 mb-2'>
          <div class='card'>
      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description<p>
        <h5 class='card-text'>$product_price</h5>
        <a href='category.php?add_to_cart=$product_id' class='btn btn-info'>ADD TO CART</a>
         
        <a href='category.php' class='btn btn-secondary'>GO TO HOME</a>
         </div>
    </div>

    </div> <div class='col-md-8'>
    <div class='row'>

    <!--related images -->
       <div class='col-md-12'>
           <h4 class='text-center text-info mb-5'>Related product</h4>
</div>
       <div class='col-md-6'>
           <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
       </div>

   <div class='col-md-6'>
         <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
   </div>
</div>
</div>";
}
}
}
}
}

//ip adresss
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  


//cart function

function cart(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $get_ip_add = getIPAddress();
    $get_product_id=$_GET['add_to_cart'];
    $select_query="select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
    $result_query=mysqli_query($conn,$select_query);

    // Check if the query execution was successful
    $result_query=mysqli_query($conn,$select_query);
      $num_of_rows=mysqli_num_rows($result_query);
      if($num_of_rows>0){
        echo "<script>alert('ALREADY PRESENT INSIDE CART')</script>";
        echo "<script>window.open('category.php','_self')</script>";
      }else{
        $insert_query="insert into `cart_details` (product_id,ip_address,quantity)
         values ($get_product_id,'$get_ip_add',0)";
        $result_query=mysqli_query($conn,$insert_query);
        echo "<script>alert('ITEM ADDED TO CART')</script>";
        echo "<script>window.open('category.php','_self')</script>";
      }
    }
  }

function cart_item(){
  
    if(isset($_GET['add_to_cart'])){
      global $conn;
      $get_ip_add = getIPAddress();
      $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($conn,$select_query);
  
        $count_cart_items=mysqli_num_rows($result_query);
    }else{
      global $conn;
      $get_ip_add = getIPAddress();
      $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($conn,$select_query);
  
        $count_cart_items=mysqli_num_rows($result_query);
    }
     echo $count_cart_items;
        }
      


        //total  cart price
function total_cart_price(){
  global $conn;
  $get_ip_add= getIPAddress();
  $total_price=0;
  $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
$result=mysqli_query($conn,$cart_query);
while($row=mysqli_fetch_assoc($result)){
  $product_id=$row['product_id'];
  $select_products="select * from `products` where product_id='$product_id'";
  $result_products=mysqli_query($conn,$select_products);
  while($row_product_price=mysqli_fetch_array($result_products)){
    $product_price=array($row_product_price['product_price']);
    $product_values=array_sum($product_price);
    $total_price+=$product_values;
  }
}
echo $total_price;

}
?>