<?php
session_start();

if(!isset($_SESSION['un'])){
    header("location: index.php");
    exit();
}

$un = $_SESSION['un'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>

<div class="full">
    <div id="inner_full">
        <div id="header" align="center"><h2><a href="admin-home.php" style="text-decoration: none; color: white;" >Blood Bank Management System</a></h2></div>
        <div id="body">
            <br><br><br>
            <?php
            if(!$un){
                header("location: index.php");
            }
            ?>
            <h1>Welcome Admin</h1>
            <br><br>
            <!-- Your admin home page content here -->
            <ul> 
            		<li> <a href="donor-reg.php"> Donor Registration</a></li>
            	    <li> <a href="donor-list.php"> Donor list</a></li>
            	    <li> <a href="sotke-blood-list.php"> Stoke Blood List</a></li>
            </ul><br><br>    <br><br>
            <ul> 
            		<li> <a href="out-stock-list.php"> Out Stock  Blood List</a></li>
            	    <li> <a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
            	    <li> <a href="ngo-list.php">Exchnange Blood List</a></li>
            </ul><br><br>

        </div>
        <div id="footer"><h4 align="center">Copyright @Saroj</h4></div>
        <div style="text-align: center; margin-top: 20px;">
            <button class="btn"><a href="logout.php"><font color="red">Logout</font></a></button>
        </div>
    </div>
</div>
</body>
</html>
