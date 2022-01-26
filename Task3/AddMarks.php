<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="addmarks.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav>
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="AdminDash.php" >ADMIN DASHBOARD</a></li>
     </ul>
 </nav>
 <div class="head"><h2>Enter The Details Of The Students:</h2></div>
 <div class="container">
 <form class="row g-3" action="marksstep1.php" method="post">
  <div class="col-md-6">
    <label>Name</label>
    <input type="text" class="form-control" name="uname" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label>Roll Number</label>
    <input type="text" class="form-control" name="rollno" id="inputPassword4">
  </div>
  <div class="col-5">
    <label for="inputAddress" class="form-label">Class</label>
    <input type="text" class="form-control" id="inputAddress" name="class">
  </div>
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Mother Name</label>
    <input type="text" class="form-control" id="inputAddress2" name="mname">
  </div>
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Father Name</label>
    <input type="text" class="form-control" id="inputAddress2" name="fname">
  </div>
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Number</label>
    <input type="text" class="form-control" id="inputAddress2" name="number">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <input type="text" class="form-control"  name="state">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-4">
    <label>File</label>
    <input type="file" class="form-control" name="file" >
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out:
      </label>
    </div>
  </div>
  <div class="col-12 mar">
    <button type="submit" class="btn btn-primary" name="submit">Next</button>
  </div>
</form>
 </div>
  </body>
</html>
