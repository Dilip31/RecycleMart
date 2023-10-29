<!-- connect file -->
<?php
include('./admin_area/connect.php');
include('./functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- css link -->
  <link rel="stylesheet" href="styles.css" />

  <!-- bootstrap css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- first child -->

  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="./images/r.png" alt="" class="logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Request</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search_products.php" method="get">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
          <input type='submit' value='Search' class="btn btn-outline-success" name="search_data_product">
        </form>
      </div>
    </nav>

    <!-- second child -->
    <div class="bg-secondary text-light text-center">
      <h4>store</h4>
      <p>Recycle to Reimagine: Turning Trash into Treasure!</p>
    </div>

    <!-- third child -->
    <div class="row px-1">
      <div class="col-md-10">
        <!-- products -->
        <div class="row">
          <!-- fetching products -->
          <?php
          search_product();
         getproducts();
         get_unique_categories() ;
          ?>


        </div>

      </div>

      <!-- side navbar -->
      <div class="col-md-2 bg-secondary">
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>categories</h4>
            </a>
          </li>

          <?php
          $Select_categories = "SELECT * FROM categories";
          $result_categories = mysqli_query($con, $Select_categories);
          while ($row_data = mysqli_fetch_assoc($result_categories)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<li class='nav-item'>
    <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a></li>";
          }
          ?>

        </ul>

      </div>

    </div>
    <!-- last child -->
    <div class="bg-light text-center p-3">
      <p>Designed by team RycycleMart-2023</p>
    </div>
  </div>
  <!-- bootstrape js link -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>