<?php
  session_start();
  $conn = mysqli_connect('localhost','root','');
  mysqli_select_db($conn,'res');
    $username=$_POST['uname'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['fname'];
    $mother=$_POST['mname'];
    $mobile=$_POST['number'];
    $state=$_POST['state'];
   /* $s="SELECT * FROM `login` WHERE `uname`='$username' AND `uclass` = '$class' AND `urollno` = '$rollno' AND `ufather` = '$father' AND `umother` = '$mother' AND `mobile` = '$mobile' AND `ustate` = '$state'";*/

    $sql="INSERT INTO `studentdetail` (`uname`, `uclass`, `urollno`, `ufather`, `umother`, `umobile`, `ustate`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$state')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header('location:AddMark2.php');
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        window.open('AddMarks.php','_self');
        </script>
        <?php 
    }
?>