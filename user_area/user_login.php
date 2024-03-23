<?php
include('../include/connect.php');
include('../functions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_login</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--fnt awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../admin/css/style.css">

</head>

<body>



    <div class="container-fluid my-3" id="login">

        <div class="col-md-7 py-3 py-md-0" id="side-lg">
            <h3 class="text-center">User Login</h3>
            <div class="row d-flex align-item-center justify-content-center">
                <div class="lg-12 col-xl-6">
                    <form action="" method="post">

                        <!-- username field-->

                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username"
                            autocomplete="off" required="required" name="user_username" />

                        <!--- password field--->

                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password"
                            autocomplete="off" required="required" name="user_password" />

                        <input type="submit" value="Login" class=" bg-info py-2 px-3 mt-4 pt-2 border-0"
                            name="user_login">
                        <p>Don`t have an account?<a href="user_registration.php">Register</a> </p>

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <!-- bootstrap css link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>


<?php
if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    $select_query = "select * from `user_table` where username='$user_username'";
    $result = mysqli_query($conn, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    $user_ip = getIPAddress();

   // cart item 
   $select_query_cart = "select * from `cart_details` where ip_address='$user_ip'";
    $select_cart = mysqli_query($conn, $select_query_cart);
    $row_count_cart = mysqli_num_rows($select_cart);
    if ($row_count>0){
        if(password_verify($user_password, $row_data['user_password'])){
            if ($row_count==1 and $row_count_cart==0){
                echo "<script>alert('login successful')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
             } else {
                 echo "<script>alert('login successful')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
        }else{
            echo "<script>alert('invalid credentials1')</script>";
        }

    }else{
        echo "<script>alert('invalid credentials2')</script>";
    }

}
?>