
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="Admin.css" rel="stylesheet">
    <title>Documents</title>
  </head>
  <body>
  <nav>
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">About US</a></li>
         <li><a href="contactPage.php">Contact</a></li>
         <li><a class="active" href="admin.php">Admin Login</a></li>
     </ul>
 </nav>
 <div id="label"><h1>ADMIN LOGIN</h1></div>
 <div class="box">
 <div class="container" class="row">
   <div class="head"><h2>Registration:</h2></div>
<form action="register.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User</label>
    <input type="text" class="form-control" name="user">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="container1" class="row">
<div class="head"><h2>Login:</h2></div>
<form method="post" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Login ID</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="Password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
  </body>
</html>
