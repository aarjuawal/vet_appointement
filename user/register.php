
<!DOCTYPE html>
<html>
<head>
  <title>userRegister </title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
        <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
        <form action="insert.php" method="POST" autocomplete="off">
          
          <div class="mb-3">
            <label class="form-label">UserName:</label>
            <input type="text" name="customer_name" class="form-control" placeholder="Enter your Name"><p class="error username-error"></p>
          </div>
           <div class="mb-3">
            <label class="form-label">Address:</label>
            <input type="text" name="customer_address" class="form-control" placeholder="Enter your address"><p class="error address-error"></p>
          </div>
          <div class="mb-3">
            <label class="form-label">Number:</label>
            <input type="number" name="customer_number" class="form-control" placeholder="Enter your Number"><p class="error number-error"></p>
          </div>
           <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" name="customer_password" class="form-control" placeholder="Enter password"><p class="error password-error"></p>
          </div>
          <div class="mb-3">
          <button name="submit" class="bg-warning fs-4 fw-bold my-3 form-control text-white">REGISTER</button>
          </div>
        </form>
            <p class="text-center fw-bold my-3">Already Have an account?<a href="Userlogin.php">LOGIN</a></p>
        
      </div>
      
    </div>
  </div>
  

</body>
</html>