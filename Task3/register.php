<?php

session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'res');
$username=$_POST['user'];
$password=$_POST['password'];
$qry="SELECT * FROM `login` WHERE `user`='$username'";
$run=mysqli_query($conn,$qry);
$row=mysqli_num_rows($run);
if($row==1)
{
    ?>
    <script>
    alert('Username already taken');
    window.open('admin.php','_self');
    </script>
   <?php
}
else
{
  $reg="INSERT INTO `login` (`user`, `password`) VALUES ('$username', '$password')";
  mysqli_query($conn,$reg);
  header('location:admin.php');
}

?>