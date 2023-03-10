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
$bookname = $_POST['book_name'];
$authorname = $_POST['author_name'];
$pages = $_POST['pages'];
$price = $_POST['price'];
$unique_book_no = $_POST['book_no'];
$copies= $_POST['copies'];

if(!empty($bookname) ||!empty($authorname) || !empty($pages) || !empty($price) || !empty($unique_book_no) || !empty($copies)){
    
    $host="localhost:3307";
    $dbusername="root";
    $dbpassword="";
    $dbname ="book_info";

    $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }

    else{
    $sql= "INSERT INTO addbook (Book_Name,Author_Name,Pages,Price,Unique_book_number,No_of_Copies) VALUES('$bookname','$authorname','$pages','$price','$unique_book_no','$copies')";
    
    if(mysqli_query($conn,$sql)){
     echo "<center><h1>New record is inserted succesfully</h1></center>";
    }
    else{
    echo "Error: ". $Insert ."<br>". mysqli_error($conn);
    }
     mysqli_close($conn);
}
}
else{
    echo "<center><h1>All fields are required</h1></center>";
    die();
}

?>

</body>
</html>