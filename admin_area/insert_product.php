<?php
// Include the connection file
include('connect.php');

if (isset($_POST['insert_product'])) {
    // Get form data
    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];

    // Accessing images (make sure to handle file uploads appropriately)
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert products-Admin Dashboard</title>
    <!-- bootstrap css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
<!-- title -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">product_title</label>
            <input type="text" name ="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
        </div>
        <!-- description -->
        <div class="form-outline w-50 m-auto mb-4 ">
            <label for="Description" class="form-label">product Description</label>
            <input type="text" name ="Description" id="Description" class="form-control" placeholder="Enter product Description" autocomplete="off" required="required">
        </div>
        <!-- title -->
        <div class="form-outline mb-4 w-50 m-auto">
    <select name="product_category" id="" class="form-select">
        <option value="">Select a category</option>
        <?php 
        $select_query = "SELECT * FROM categories";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $category_title = $row['category_title'];
            $category_id = $row['category_id'];
            echo "<option value='$category_id'>$category_title</option>";
        }
        ?>
    </select>
</div>
<!-- image 1 -->
<div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image" class="form-label">product_title</label>
            <input type="file" name ="product_image" id="product_image1" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
        </div>
        </form>
    </div>

</body>
</html>