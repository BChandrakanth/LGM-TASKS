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
  <table class="table">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">CLASS</th>
      <th scope="col">ROLL NUMBER</th>
      <th scope="col">FATHER</th>
      <th scope="col">MOTHER</th>
      <th scope="col">STATE</th>
      <th scope="col">MOBILE</th>
    </tr>
  </thead>
  <tbody>
  <?php
                session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'res');
                $sql="SELECT * FROM `studentdetail`";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)>0)
                {
                    while($data=mysqli_fetch_assoc($run))
                    {
            ?>
                   <tr>
          
            <th > <?php  echo $data['uname']; ?></th> 
            <th > <?php  echo $data['uclass']; ?></th> 
            <th > <?php  echo $data['urollno']; ?></th> 
            <th > <?php  echo $data['ufather']; ?></th> 
            <th > <?php  echo $data['umother']; ?></th> 
            <th > <?php  echo $data['ustate']; ?></th> 
            <th > <?php  echo $data['umobile']; ?></th> 
           </tr>    
              
               <?php  
                 
                } 
                }
                else{
                    echo "No Record Found";
                }
                
                ?>
  </tbody>
</table>
  </body>
</html>