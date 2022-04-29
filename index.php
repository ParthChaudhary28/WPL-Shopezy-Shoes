<?php
$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "Success connecting to the db"; how to handle cookies with php(next tuesday)

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Phonenumber = $_POST['Phonenumber'];

$sql = "INSERT INTO `wpl`.`signup` (`Sr.no`, `Username`, `Password`,`Email`,`Phonenumber`) VALUES (NULL,'$Username', '$Password','$Email', '$Phonenumber');";

if ($con->query($sql) === TRUE)
{
    echo "New record created successfully";
    header('Location:login.html ');
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


<?php
echo readfile("webdictionary.txt");
?>