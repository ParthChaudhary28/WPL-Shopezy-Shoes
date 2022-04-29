<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="Admin.css"> --> 
    
</head>
<style>
    th{
        width:15vw;
    }
</style>

<body>
    
    <a href="admin.html"><h4>Add Product</h4></a>
    <a href="EditAdmin.html"><h4>Edit Product</h4></a>
    <a href="index1.php"><h4>Home</h4></a>


    <h2>View Product</h2>
    <table id='list' border = '5'>
        <!-- <tr>
        <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
            <td align="right" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
         <tr></tr>
         <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td align="left" valign="top" class="gray12_txt"><table width="100%" border="0" cellpadding="1" cellspacing="1">
          <tr>
            <td colspan="4" align="left" valign="top"><p><strong>ADMIN Page</strong></p></td>
    
           </tr> -->
          <tr>
               <!-- <td width="25%" align="left" valign="top"><strong>Productid&nbsp; </strong></td> -->
                <th   valign="top"><strong>Name</strong></th>
                <th   valign="top"><strong>Image</strong></th>

                 <th   valign="top"><strong>Price</strong></th>
                  <!-- <td width="25%" align="left" valign="top"><strong>Discount</strong></td> -->
                 <th  valign="top"><strong>Description</strong></th>
                 <th   valign="top"><strong>Delete</strong></th>
        </tr>
                                  <!-- <tr>
                                    
                                    <td align="left" valign="top">1 </td>
                                    <td align="left" valign="top">Nike airmax </td>
                                    <td align="left" valign="top">2500 </td>
                                    <td align="left" valign="top">100% </td>
                                    <td align="left" valign="top">Na </td>
                                    <td><button>Delete</button> </td>
                                    <td><input class="btn btn-primary" type="submit" value="Submit"></td>
                                    
                       </tr> -->


                                  
                              </table>
    
        

</body>
</html>
<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    $sql="SELECT * FROM `wpl`.`admin`";
    $res=$con->query($sql);
    $id=array();
    $Name=array();
    $img=array();
    $Price=array();
    $Description=array();
    while($row = $res->fetch_assoc()){
        // array_push($img, $row['Image']);
        array_push($id, $row['Sr.no']);
        array_push($Name, $row['Name']);
        array_push($img, $row['Image']);
        array_push($Price, $row['Price']);
        array_push($Description, $row['Description']);
    }
    // echo count($Price);
    for ($i = 0; $i < count($Price); $i++){
        echo "
        <script type='text/javascript'>
            var table = document.getElementById('list');
            table.innerHTML+='\
            <tr>\
                <td width=5vw >$Name[$i] </td>\
                <td width=5vw ><img src=$img[$i] style=width:100px></td>\
                <td width=5vw >$Price[$i]</td>\
                <td width=5vw >$Description[$i]</td>\
                <td><button id=$id[$i] onclick= myFunction(this.id)>Delete</button></td>\
            </tr>';
        </script>";
    }
?>
<script type="text/javascript">
    function change(page){
        window.location.href = page;
    }
    function myFunction(id) {
        if(confirm("Are you sure you want to delete this entry?")){
            var form = document.createElement("form");
            var element1 = document.createElement("input"); 
            form.method = "POST";
            element1.value=id;
            element1.name="ID";
            form.appendChild(element1);  
            document.body.appendChild(form);
            form.submit();
        }
    }
</script>
<?php
if ( 'POST' === $_SERVER['REQUEST_METHOD'] ){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $id = $_POST["ID"];
    $sql1="DELETE FROM `wpl`.`admin` WHERE `admin`.`Sr.no` = $id;";
    if($con->query($sql1)){
        echo "
        <script type='text/javascript'>
            alert('Shoe entry deleted successfully.');
            window.location.href = 'view.php';
        </script>"; 
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
