<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=na, initial-scale=1.0">
    <title>E-library Management</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body style="   background-color: #4159D0;
background-image: linear-gradient(43deg, #4158D0 12%, #C850C0 40%, #FFCC70 100%);
">


<?php
    
    $host="localhost:3307";
    $dbusername="root";
    $dbpassword="";
    $dbname ="book_info";

    $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);

    
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }

    else{
    $sql= "SELECT * FROM addbook";
  
    if($result=mysqli_query($conn,$sql)){
        $rowcount = mysqli_num_rows($result);
        echo "<center><h1>Total number of books :</center></h1>"."<center><h1>".$rowcount."</center></h1>";
    }
    
    
     mysqli_close($conn);
    }
?>

</body>
</html>