<?php
if(isset($_POST['submit']))
{
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'res');
$username=$_POST['name'];
$password=$_POST['Password'];
$qry="SELECT * FROM `login` WHERE `user`='$username' AND `password` = '$password'";
$run=mysqli_query($conn,$qry);
$row=mysqli_num_rows($run);
if($row<1)
{
    header('location:admin.php');
}
else
{
   header('location:AdminDash.php');
}
}
?>