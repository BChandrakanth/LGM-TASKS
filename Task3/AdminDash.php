<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admindash.css">
    <title>Document</title>
</head>
<body>     
 <nav>
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="admin.php">Admin Login</a></li>
         <li><a href="logout.php">LogOut</a></li>
     </ul>
 </nav>
    <div class="label"><h1>ADMIN DASHBOARD</h1></div>
    <div class="container">
        <h2><a href="AddMarks.php"><span class="symbol"> > </span> Add Marks Of Students</a></h2></br>
        <h2><a href="UpdateMarks.php"><span class="symbol"> > </span>Update Marks Of Students</a></h2></br>
        <h2><a href="StuData.php"><span class="symbol"> > </span> Student Data</a></h2></br>
        <h2><a href="Me"><span class="symbol"> > </span> Message Of Student</a></h2>
    </div>
</body>
</html>