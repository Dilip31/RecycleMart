<?php
// Include the connection file
include('admin_area/connect.php');

if (isset($_POST['insert_product'])) {
    // Get form data
    $Blog_title = $_POST['Blog_title'];
    $Blog_description = $_POST['Blog_description'];
    $Blog_content = $_POST['Blog_content'];


    // Accessing images (make sure to handle file uploads appropriately)
    $Blog_image1 = $_FILES['Blog_image']['name'];

    $temp_image1 = $_FILES['Blog_image']['tmp_name'];

    if ($Blog_title == '' or $Blog_description == '' or $product_price == '' or $Blog_image1 == '') {
        echo "<script>alert('please fill all the availabel fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./admin_area/Blog_images/$product_image1");
    }

    //insert query
    $insert_products = "insert into `blog` (Blog_title,Blog_description,Blog_id,Blog_image1,date) values ('$Blog_title','$Blog_description','$Blog_content','$Blog_image1',NOW())";
    $result_query = mysqli_query($con, $insert_products);
    if ($result_query) {
        echo "<script>alert('Successfully inserted products')</script>";
        echo "<script>window.open('index.php','_self')</script>";

    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-4">
        <h1 class="text-center"> Insert blog</h1>
        <!-- starting of form     -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- FOR TITLE -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="produc_title" class="form-lable"> Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product title" autocomplete="off" required="required">
            </div>
            <br>
            <!-- FOR DESCRIPTION -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="produc_description" class="form-lable"> Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter product dscription" autocomplete="off" required="required">
            </div><br>

            <!-- FOR CATEGORIES -->
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
            </div><br>

            <!--FOR  IMAGE-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="produc_image" class="form-lable"> Product image</label>
                <input type="file" name="product_image" id="product_image" class="form-control"
                    placeholder="Enter product image" autocomplete="off" required="required">
            </div><br>

            <!-- FOR PRICE-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="produc_price" class="form-lable"> Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter product price" autocomplete="off" required="required">
            </div><br>

            <!-- FOR BUTTON-->
            <div class="form-outline mb-4 w-50 m-auto">
                <INPUT type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>
        </form>
    </div>

</body>

</html>