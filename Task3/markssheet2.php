<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'res');
$class=$_POST['class'];
$rollno=$_POST['rollno'];
$hindi1=$_POST['Hindi1'];
$physics1=$_POST['Physics1'];
$english1=$_POST['English1'];
$chemistry1=$_POST['Chemistry1'];
$maths1=$_POST['Maths1'];
$hindi2=$_POST['Hindi2'];
$physics2=$_POST['Physics2'];
$english2=$_POST['English2'];
$chemistry2=$_POST['Chemistry2'];
$maths2=$_POST['Maths2'];
$sql = "INSERT INTO `stumarks` (`uclass`, `urollno`, `hindi1`, `english1`, `maths1`, `physics1`, `chemistry1`, `hindi2`, `english2` , `maths2`, `physics2`, `chemistry2`) VALUES ('$class','$rollno','$hindi1','$english1','$maths1','$physics1','$chemistry1','$hindi2','$english2','$maths2','$physics2','$chemistry2')";
$run=mysqli_query($conn,$sql);
if($run)
{
     ?>
    <script>
        window.alert('Data Added Successful');
      window.open('AdminDash.php', '_self');
    </script>
    <?php 

}
?>