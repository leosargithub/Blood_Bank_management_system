<?php
session_start();

if (!isset($_SESSION['un'])) {
    header("location: index.php");
    exit();
}

$un = $_SESSION['un'];

include('connection.php'); // Make sure to include your connection.php file here
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td {
            width: 250px;
            height: 40px;
        }
    </style>
</head>
<body>

<div class="full">
    <div id="inner_full">
        <div id="header" align="center"><h2><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management System</a></h2></div>
        <div id="body">
            <br><br><br>
            <?php
            if (!$un) {
                header("location: index.php");
            }
            ?>
            <h1>Stock Blood List</h1>
            <div id="form">
                <table align="center">
                    <thead style="color: blue; font-size: 20px;">
                    <tr>
                        <td><center>Blood Group</center></td>
                        <td><center>Qty</center></td>
                    </tr>
                    <tr>
                        <td><center>O+</center></td>
                        <td><center>
                            <?php
                            $sql = $db->query("SELECT * FROM donor_registration WHERE bgroup = 'O+'");
                            $row = $sql->rowCount();
                            echo $row;
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>AB+</center></td>
                        <td><center>
                             <?php
                            $sql = $db->query("SELECT * FROM donor_registration WHERE bgroup = 'AB+'");
                            $row = $sql->rowCount();
                            echo $row;
                            ?>
                        </center></td>
                    </tr>
                    <tr>
                        <td><center>AB-</center></td>
                        <td><center>
                             <?php
                            $sql = $db->query("SELECT * FROM donor_registration WHERE bgroup = 'AB-'");
                            $row = $sql->rowCount();
                            echo $row;
                            ?>
                        </center></td>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <br><br>
        </div>
        <div id="footer"><h4 align="center">Copyright @Saroj</h4></div>
        <div style="text-align: center; margin-top: 20px;">
            <button class="btn"><a href="logout.php"><font color="red">Logout</font></a></button>
        </div>
    </div>
</div>
</body>
</html>
