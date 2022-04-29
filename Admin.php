<?php
$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "Success connecting to the db"; how to handle cookies with php(next tuesday)

$Productid = $_POST['Productid'];
$ProductName = $_POST['Name'];
$img=$_POST['image'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];
$Description = $_POST['Description'];

$sql = "INSERT INTO `wpl`.`admin` (`Sr.no`, `Productid`,`Name`,`Image`,`Price`,`Discount`,`Description`) VALUES (NULL,'$Productid','$ProductName','$img','$Price', '$Discount','$Description');";

if ($con->query($sql) === TRUE)
{
    echo "New record created successfully";
    header('Location:view.php ');
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


