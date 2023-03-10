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

$unique_book_no = $_POST['book_no'];

if(!empty($unique_book_no)){
    
    $host="localhost:3307";
    $dbusername="root";
    $dbpassword="";
    $dbname ="book_info";

    $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);

    
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }

    else{
    $sql= "SELECT * FROM addbook WHERE Unique_book_number=$unique_book_no";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        while($row= mysqli_fetch_assoc($result)){
        echo "<h1>Book_Name:</h1>"."<center><h1>".$row["Book_Name"]."</center></h1>"."<br>"."<h1>Author_Name:</h1>"."<center><h1>".$row["Author_Name"]."</center></h1>"."<br>"."<h1>Pages :</h1>"."<center><h1>".$row["Pages"]."</center></h1>"."<br>"."<h1>Price :</h1>"."<center><h1>".$row["Price"]."</center></h1>"."<br>"."<h1>Unique_Book_Number :</h1>"."<center><h1>".$row["Unique_book_number"]."</center></h1>"."<br>"."<h1>Copies :</h1>"."<center><h1>".$row["No_of_Copies"]."</center></h1>";
        }
    }
    else{
    echo "0 results";
    }
     mysqli_close($conn);
}
}
else{
    echo "<center></h1>Unique book number is neccessary!</center></h1>";
    die();
}

?>

</body>
</html>