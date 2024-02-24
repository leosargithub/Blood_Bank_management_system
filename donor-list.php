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
            <h1>Donor List</h1>
            <div id="form">
                <table align="center">
                    <thead style="color: blue; font-size: 20px;">
                    <tr>
                        <td><center><b>Name</b></center></td>
                        <td><center><b>Father's Name</b></center></td>
                        <td><center><b>Address</b></center></td>
                        <td><center><b>City</b></center></td>
                        <td><center><b>Age</b></center></td>
                        <td><center><b>Blood Group</b></center></td>
                        <td><center><b>Email</b></center></td>
                        <td><center><b>Mobile No</b></center></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = $db->query("SELECT * FROM donor_registration");
                    while ($res = $sql->fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <tr>
                            <td><center><?= $res->name; ?></center></td>
                            <td><center><?= $res->fname; ?></center></td>
                            <td><center><?= $res->address; ?></center></td>
                            <td><center><?= $res->city; ?></center></td>
                            <td><center><?= $res->age; ?></center></td>
                            <td><center><?= $res->bgroup; ?></center></td>
                            <td><center><?= $res->email; ?></center></td>
                            <td><center><?= $res->mno; ?></center></td>
                        </tr>
                        <?php
                    }
                    ?>
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
