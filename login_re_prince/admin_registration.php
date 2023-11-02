<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <!-- font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
     integrity="your-integrity-value-here" crossorigin="anonymous">
     <style>
        body{
            overflow: hidden;
          }
          .main{

            background-color: cornflowerblue;
          }
        .button{
          background-color:#45ba5b;
        }
     </style>

     
</head>
<body>
    
    <div class="container-sm main mt-5 w-50  border-2 border rounded-4 p-5  shadow shadow-lg">
      
       <div class="d-flex flex-row justify-content-center"> <h2 class="text-center mb-5">Admin Registration</h2>
        <!-- <p class="small fw-bold mt-2 pt-1">user <a href="user_registration.php" class="link-danger">registration</a></p> -->
      </div>

     <div class="row d-flex justify-content-sm-evenly">
        <div class="col-lg-6 col-xl-7">
            <img src="admin_registration.jpg" alt="Admin registration" class="img-thumbnail w-7">
        </div>

        <div class="col-lg-6 col-xl-4">
          <form action="" method="post">
          <div class="form-outline mb-2">
            <label for="username" class="form-label"><b>Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" require class="form-control">
          </div>

          <div class="form-outline mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" require class="form-control">
          </div>

          <div class="form-outline mb-2">
            <label for="password" class="form-label">password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" require class="form-control">
          </div>

           <div class="form-outline mb-2">
            <label for="confirm_password" class="form-label">Confirm password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter your confirm_password" require class="form-control">
          </div>

          <div>
            <input type="submit" class="button py-2 px-3 ms-4 border-1 rounded-3" name="admin_registration" value="Register">
            <p class="small fw-bold mt-2 pt-1">Do you already have an account? <a href="admin_login.php" class="link-danger">Login</a></p>
          </div>

          </form>
        </div>
     </div>
    </div>

    
</body>
</html>