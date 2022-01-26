<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="addmark2.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav>
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="AdminDash.php" >ADMIN DASHBOARD</a></li>
     </ul>
 </nav>
      <div class="header"><ul>
          <li><h2>Mid1 Marks</h2></li>
          <li><h2>Mid2 Marks</h2></li>
        </ul></div>
      <form action="markssheet2.php" method="post">
 <div class="container">
 <div class="cbox">
   <ul> 
     <li style="float:left;">
     <label>RollNo</label>
             <input type="text" name="rollno" class="rollno"  required/>
     </li>
     <li>
     <label>class</label>
             <input type="text" name="class" class="class"  required/>
     </li>
   </ul>
     </div>
     <div class="paper1" width="300px">
         <ul>
             <li>
             <div class="col-md-9">
             <label  class="form-label">Hindi</label>
             <input type="text" class="form-control"  name="Hindi1">
             </div>
            </li>
            <li>
            <div class="col-md-9">
           <label for="inputCity" class="form-label">English</label>
           <input type="text" class="form-control"  name="English1">
           </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Maths</label>
            <input type="text" class="form-control"  name="Maths1">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Physics</label>
            <input type="text" class="form-control"  name="Physics1">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Chemistry</label>
            <input type="text" class="form-control" name="Chemistry1">
            </div>
            </li>
         </ul>
     </div>
     <div class="paper2" width="300px">
     <ul>
     <li>
             <div class="col-md-9">
             <label  class="form-label">Hindi</label>
             <input type="text" class="form-control"  name="Hindi2">
             </div>
            </li>
            <li>
            <div class="col-md-9">
           <label for="inputCity" class="form-label">English</label>
           <input type="text" class="form-control"  name="English2">
           </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Maths</label>
            <input type="text" class="form-control"  name="Maths2">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Physics</label>
            <input type="text" class="form-control"  name="Physics2">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Chemistry</label>
            <input type="text" class="form-control" name="Chemistry2">
            </div>
            </li>
         </ul>
     </div>
 </div>
 <div class="col-12" class="btn">
    <button type="submit" class="btn btn-primary" name="btn">Next</button>
  </div>
</form>
  </body>
</html>