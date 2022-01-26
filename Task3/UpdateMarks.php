<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="updatemarks.css" rel="stylesheet">
    <link href="index.css" rel="Stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav>
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="logout.php">LogOut</a></li>
     </ul>
 </nav>
  <div class="container1" class="row">
<form method="post" action="UpdateMarks.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CLASS</label>
    <input type="text" class="form-control" name="class">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ROLL NUMBER</label>
    <input type="text" class="form-control" name="Rollno">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Father</th>
      <th scope="col">Mother</th>
    </tr>
  </thead>
  <tbody>
  <?php
             if(isset($_POST['submit']))
             {
                session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'res');
                $class=$_POST['class'];
                $rollno=$_POST['Rollno'];
                
                $sql="SELECT * FROM `studentdetail` WHERE `uclass`='$class'  AND `urollno`='$rollno' ";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<0)
                {
                     ?>
                     <script>
                     alert('No Record Found');
                     </script>
                    <?php
                }
                else{
                $data=mysqli_fetch_assoc($run)
                    
             ?>
                   <tr>
          
            <th > <?php  echo $data['uname']; ?></th> 
            <th > <?php  echo $data['uclass']; ?></th> 
            <th > <?php  echo $data['ufather']; ?></th> 
            <th > <?php  echo $data['umother']; ?></th> 
            <th ><a href="updateform.php?sid=<?php echo $data['urollno']; ?>">Edit</a></th> 
           
           </tr>    
              
               <?php  
                 
                } 
                }
                ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>