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
</head>
<body>

<div class="full">
    <div id="inner_full">
        <div id="header" align="center">
            <h2><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management System</a></h2>
        </div>
        <div id="body">
            <br><br><br>
            <?php
            if (!$un) {
                header("location: index.php");
            }
            ?>
            <h1>Exchange Registration</h1>
            <div id="form">
                <form action="" method="post">
                    <table>
                        <!-- Your form fields here -->
                        <tr>
                <td width="200px" height="50px">Enter Name</td>
                <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                <td width="200px" height="50px">Enter Father's Name</td>
                <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Enter Address</td>
                <td width="200px" height="50px"><textarea name="address" placeholder="Enter Address"></textarea></td>
                <td width="200px" height="50px">Enter City</td>
                <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City Name"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Enter Age</td>
                <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
                <td width="200px" height="50px">Select Blood Group</td>
                <td width="200px " height="50px">
                    <select name="bgroup">
                        <option>O+</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="200px" height="50px">Enter Email</td>
                <td width="200px" height="50px"><input type="email" name="email" placeholder="Enter Email"></td>
                <td width="200px" height="50px">Enter Mobile No</td>
                <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile Number"></td>
                <td width="200px" height="50px">Exchange Blood Group</td>
                <td width="200px " height="50px">
                    <select name="exbgroup">
                        <option>O+</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" name="submit" value="Save"></td>
            </tr>
                    </table>
                </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $fname = $_POST['fname'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $age = $_POST['age'];
                $bgroup = $_POST['bgroup'];
                $email = $_POST['email'];
                $mno = $_POST['mno'];
                $exbgroup = $_POST['exbgroup'];

                // Perform your database insert operation here

                $sql = "SELECT * FROM donor_registration WHERE bgroup = '$bgroup'";
                $st = $db->query($sql);
                $num_row = $st->fetch();
                $id = $num_row['id'];
                $name = $num_row['name'];
                $b1 = $num_row['bgroup'];
                $mno = $num_row['mno'];

                $sql1 = "INSERT INTO out_stoke_b (bname, name, mno) VALUES (?, ?, ?)";
                $st1 = $db->prepare($sql1);
                if ($st1->execute([$b1, $name, $mno])) {
                    $delete_q = "DELETE FROM donor_registration WHERE id = :id";
                    $st2 = $db->prepare($delete_q);
                    if ($st2->execute([':id' => $id])) {
                        echo "<script>alert('Donor data moved successfully')</script>";

                        // Insert new donor data
                        $sql3 = $db->prepare("INSERT INTO exchange_b(name, fname, address, city, age, bgroup, email, mno, ebgroup) VALUES (:name, :fname, :address, :city, :age, :bgroup, :email, :mno, :ebgroup)");
                        $sql3->bindValue(':name', $name);
                        $sql3->bindValue(':fname', $fname);
                        $sql3->bindValue(':address', $address);
                        $sql3->bindValue(':city', $city);
                        $sql3->bindValue(':age', $age);
                        $sql3->bindValue(':bgroup', $bgroup);
                        $sql3->bindValue(':email', $email);
                        $sql3->bindValue(':mno', $mno);
                        $sql3->bindValue(':ebgroup', $exbgroup);

                        if ($sql3->execute()) {
                            echo "<script>alert('Donor registration successful')</script>";
                        } else {
                            echo "<script>alert('Donor registration failed')</script>";
                        }
                    } else {
                        echo "<script>alert('Failed to delete donor data')</script>";
                    }
                } else {
                    echo "<script>alert('Failed to move donor data')</script>";
                }
            }
            ?>
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
