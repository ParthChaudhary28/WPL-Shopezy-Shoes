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
$NewName=$_POST['NewName'];
$img=$_POST['image'];
$ProductName = $_POST['Name'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];
$Description = $_POST['Description'];

$sql = "UPDATE `wpl`.`admin` SET `Name` = '$NewName', `Image` = '$img', `Price` = '$Price',`Description` = '$Description' WHERE `admin`.`Name` = '$ProductName'";
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


