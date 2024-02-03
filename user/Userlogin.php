
<!DOCTYPE html>
<html>
<head>
  <title>Userlogin </title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-primary mt-3">
        <form action="login1.php" method="POST" autocomplete="off">
          <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning">UserLOGIN</p>
          </div>
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="customer_name" class="form-control" placeholder="Enter Your Username">

          </div>
           <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="customer_password" class="form-control" placeholder="Enter password">
          </div>
          <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">login</button>
        </form>
        <p class="text-center fw-bold my-3">Don't Have an account?<a href="register.php">REGISTER NOW</a></p>
        <p class="text-center fw-bold my-3">OR</p>
         <p class="text-center fw-bold my-3"> ADMIN <a href="../admin/login.php"> login</a></p>
          <p class="text-center fw-bold my-3"> DOCTOR <a href="../admin/login.php"> login</a></p>
      </div>
      
    </div>
  </div>
  

</body>
</html>