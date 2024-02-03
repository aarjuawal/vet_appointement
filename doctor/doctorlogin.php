
<!DOCTYPE html>
<html>
<head>
  <title>Adminlogin </title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-primary mt-3">
        <form action="login1.php" method="POST">
          <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning">ADMIN LOGIN</p>
          </div>
          <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter email">
          </div>
           <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
          </div>
          <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">login</button>
        </form>
      </div>
      
    </div>
  </div>
  

</body>
</html>