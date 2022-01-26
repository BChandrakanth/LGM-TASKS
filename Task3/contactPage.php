<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="conatact.css"  rel="stylesheet" >
    <title>Document</title>
  </head>
  <body>
         
 <nav>
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">About US</a></li>
         <li><a class="active"  href="contactPage.php">Contact</a></li>
         <li><a href="admin.php">Admin Login</a></li>
     </ul>
 </nav>
      <div class="info">
          <h2>Contact US</h2>
      </div>
  <form>
      <div class="container1">
      <div class="mb-3">
    <label class="form-label">Enter Your Name:</label>
    <input type="text" class="form-control" name="text" >
  </div>
  <div class="mb-3">
    <label class="form-label">Enter Your Email:</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Enter Your Contact Number:</label>
    <input type="number" class="form-control" name="number">
  </div>
  <div class="mb-3">
  <label class="form-label">Enter Your Query:</label>
  <textarea class="form-control" placeholder="Leave a comment here" name="textarea" style="height: 100px"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
      </div>

</form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>