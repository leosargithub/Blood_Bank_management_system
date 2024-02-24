
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
    	td{
    		width: 200px;
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
            <h1>Donor Registration</h1>
            <div id="form">
                <form action="" method="post">
                    <table align="center">
                    	<tr>
                    		<thead style="color: blue; font-size: 20px;">
           		      <td><b>Name</b></td>
		        <td><b>Father Name</b></td>
		           <td><b>Address</b></td>
		        <td><b>City</b></td>
		            <td><b>Age</b></td>
		           <td><b>Blood Group</b></td>
		       <td><b>Email</b></td>
		         <td><b>Mobile No</b></td>
		         </thead>

		              </tr>
		              <?php 

		              $sql = $db->query("SELECT * FROM donor_registration");
		              while ($res=$sql->fetch(PDO::FETCH_OBJ)) {

		              	?>
		              	<tr><center><?= $res->name; ?></center> </tr>
		              	 	<tr><center><?= $res->fname; ?></center> </tr>
		              	  	<tr><center><?= $res->address; ?></center> </tr>
		              	  	 	<tr><center><?= $res->city; ?></center> </tr>
		                     	<tr><center><?= $res->age; ?></center> </tr>
		                     	<tr><center><?= $res->bgroup; ?></center> </tr>
		              	  	 	 	 	 	<tr><center><?= $res->email; ?></center> </tr>
		              	  	 	 	 	 	 	<tr><center><?= $res->mno; ?></center> </tr>



		              	// code...

		              	<?php
		              }
		         



		              ?>
		          
                    </table>
                </form>
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
