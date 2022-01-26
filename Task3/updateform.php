<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'res');
$rollno=$_GET['sid'];
$sql = "SELECT * FROM `studentdetail`";
$sql2 = "SELECT * FROM `stumarks`";
$run=mysqli_query($conn,$sql);
$run2=mysqli_query($conn,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
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
         <li><a href="logout.php" >LOG OUT</a></li>
     </ul>
 </nav>
      <div class="header"><ul>
          <li><h2>Mid1 Marks</h2></li>
          <li><h2>Mid2 Marks</h2></li>
        </ul></div>
      <form action="updatedata.php" method="post">
 <div class="container">
 <div class="cbox">
   <ul> 
     <li style="float:left;">
     <label>RollNo</label>
             <input type="text" name="rollno" class="rollno" value="<?php echo $data['urollno'] ?>" required/>
     </li>
     <li>
     <label>class</label>
             <input type="text" name="class" class="class" value="<?php echo $data['uclass'] ?>" required/>
     </li>
   </ul>
     </div>
     <div class="paper1" width="300px">
         <ul>
             <li>
             <div class="col-md-9">
             <label  class="form-label">Hindi</label>
             <input type="text" class="form-control"  name="Hindi1" value="<?php echo $data2['hindi1'] ?>">
             </div>
            </li>
            <li>
            <div class="col-md-9">
           <label for="inputCity" class="form-label">English</label>
           <input type="text" class="form-control"  name="English1" value="<?php echo $data2['english1'] ?>">
           </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Maths</label>
            <input type="text" class="form-control"  name="Maths1" value="<?php echo $data2['maths1'] ?>">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Physics</label>
            <input type="text" class="form-control"  name="Physics1" value="<?php echo $data2['physics1'] ?>">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Chemistry</label>
            <input type="text" class="form-control" name="Chemistry1" value="<?php echo $data2['chemistry1'] ?>">
            </div>
            </li>
         </ul>
     </div>
     <div class="paper2" width="300px">
     <ul>
     <li>
             <div class="col-md-9">
             <label  class="form-label">Hindi</label>
             <input type="text" class="form-control"  name="Hindi2" value="<?php echo $data2['hindi2'] ?>">
             </div>
            </li>
            <li>
            <div class="col-md-9">
           <label for="inputCity" class="form-label">English</label>
           <input type="text" class="form-control"  name="English2" value="<?php echo $data2['english2'] ?>">
           </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Maths</label>
            <input type="text" class="form-control"  name="Maths2" value="<?php echo $data2['maths2'] ?>">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Physics</label>
            <input type="text" class="form-control"  name="Physics2" value="<?php echo $data2['physics2'] ?>">
            </div>
            </li>
            <li>
            <div class="col-md-9">
            <label for="inputCity" class="form-label">Chemistry</label>
            <input type="text" class="form-control" name="Chemistry2" value="<?php echo $data2['chemistry2'] ?>">
            </div>
            </li>
         </ul>
     </div>
 </div>
 <div class="col-12" class="btn">
    <button type="submit" class="btn btn-primary" name="btn">UPDATE</button>
  </div>
</form>
  </body>
</html>
<?php
}
?>