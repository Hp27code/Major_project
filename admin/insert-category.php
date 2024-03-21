<?php
include('../include/connect.php');

if (isset($_POST['insert_category'])) {
    $category_title = $_POST['category_title'];

    // Escape the form data
    $category_title = mysqli_real_escape_string($conn, $category_title);

    // Define the query
    $select_query = "Select * from categories where category_title='$category_title'";

    // Execute the query
    $result_select = mysqli_query($conn, $select_query);

    // Check if the query was successful
    if ($result_select) {
        // Check if a row was found
        $number = mysqli_num_rows($result_select);

        if ($number > 0) {
            echo "<script>alert('This category already present')</script>";
        } else {
            // Define the insert query
            $insert_query = "insert into categories (category_title) values ('$category_title')";

            // Execute the insert query
            $result = mysqli_query($conn, $insert_query);

            if ($result) {
                echo "<script>alert('Category has been inserted successfully')</script>";
            }
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2 class="text-center"> Insert Category</h2>

<form action="" method="post" class="mb-2">
<div class="input-group  w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-recepit"></i></span>
  <input type="text" class="form-control"  name="category_title" placeholder="Insert Categories"  aria-describedby="basic-addon1">
</div>
<div class="input-group  w-10 mb-2 m-auto">
<input type="submit" class=" bg-info p-2 my-2 border-0" name="insert_category" value="Insert Categories">
</div>
</form>