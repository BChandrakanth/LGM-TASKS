<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link href="index.css" rel="Stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
   
 <nav>
     <ul>
         <li><a class="active" href="">Home</a></li>
         <li><a href="about.php">About US</a></li>
         <li><a href="contactPage.php">Contact</a></li>
         <li><a href="admin.php">Admin Login</a></li>
     </ul>
 </nav>
 <div class="text"><h2>Enter Your Details For Checking Result:</h2></div>
<div id="container">
<form action="result.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">HallTicket Number</label>
    <input type="text" class="form-control" name="rollno">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Standard</label>
    <input type="password" class="form-control" name="class">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>


  </body>
</html>