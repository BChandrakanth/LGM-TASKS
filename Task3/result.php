<?php
if(isset($_POST['submit']))
{

session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'res');
	$standard = $_POST['class'];
	$rollno = $_POST['rollno'];
	$sql="SELECT * FROM `studentdetail` WHERE `uclass`='$standard' AND `urollno`='$rollno'";
  $sql2="SELECT * FROM `stumarks` WHERE `uclass`='$standard' AND `urollno`='$rollno'";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link href="result.css" rel="Stylesheet">
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
 <div class="data" style="background-color:tomato;width: fit-content;color:#ffffff;margin:auto;padding:3px;border-radius:10px;margin-top:20px;">
   <p>NAME:<?php echo $data['uname']; ?></p>
   <p>ROLL NO:<?php echo $data['urollno']; ?></p>
 </div>
 <div class="table">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">SUBJECT</th>
      <th scope="col">MID1 MARKS</th>
      <th scope="col">MID2 MARKS</th>
      <th scope="col">TOTAL</th>
      <th scope="col">MAX MARKS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">HINDI</th>
      <td><?php echo $data2['hindi1']; ?></td>
      <td><?php echo $data2['hindi2']; ?></td>
      <td><?php echo $total1=($data2['hindi2'] + $data2['hindi1'])/2; ?></td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">ENGLISH</th>
      <td><?php echo $data2['english1']; ?></td>
      <td><?php echo $data2['english2']; ?></td>
      <td><?php echo $total2=($data2['english2'] + $data2['english1'])/2; ?></td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">MATHS</th>
      <td><?php echo $data2['maths1']; ?></td>
      <td><?php echo $data2['maths2']; ?></td>
      <td><?php echo $total3=($data2['maths2'] + $data2['maths1'])/2; ?></td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">PHYSICS</th>
      <td><?php echo $data2['physics1']; ?></td>
      <td><?php echo $data2['physics2']; ?></td>
      <td><?php echo $total4=($data2['physics2'] + $data2['physics1'])/2; ?></td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">CHEMISTRY</th>
      <td><?php echo $data2['chemistry1']; ?></td>
      <td><?php echo $data2['chemistry2']; ?></td>
      <td><?php echo $total5=($data2['chemistry2'] + $data2['chemistry1'])/2; ?></td>
      <td>100</td>
    </tr>
    <tr>
    <th scope="row">TOTAL MARKS:</th>
    <th scope="row"></th>
    <th scope="row"></th>
    <th scope="row"><?php echo $all= $total1 + $total2 + $total3 + $total4 + $total5; ?></th>
    <th>500</th>
</tr>
  </tbody>
</table>
<h3 style="text-align:centre; margin:auto;">You Are <span class="colorchange1" style="color:blue;"><?php 
                        if($all<=200) 
                        {
                            echo "Fail";
                        }
                       else
                       {
                           echo"Pass";
                       }
                      ?></span></h3>
            <marquee scrollamount="5"><p>Your Result is Declared. Kindly check your marks and in case of any discrepany contact the admin. </p>
                </marquee>
 </div>
  </body>
</html>
<?php
}
else
{
?>
<script>
alert('Record Not found');
    window.open('index.php','_self');
</script>
<?php
}
}
?>