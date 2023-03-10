<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=na, initial-scale=1.0">
    <title>E-library Management</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>


<?php
$Username = $_POST['username'];
$Password= $_POST['password'];

if(!empty($Username) ||!empty($Password) ){
    
    $host="localhost:3307";
    $dbusername="root";
    $dbpassword="";
    $dbname ="book_info";

    $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);

    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }

    else{
    $sql= "INSERT INTO login (Username,Password) VALUES('$Username','$Password')";
    
    if(mysqli_query($conn,$sql)){
     echo " Login succesfully";
    }
    else{
    echo "Error: ". $Insert ."<br>". mysqli_error($conn);
    }
     mysqli_close($conn);
}
}
else{
    echo "All fields are required";
    die();
}

?>

</body>
</html>