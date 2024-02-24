<?php include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>

<div class="full">
	<div id="inner_full">
		<div id="header" align="center"><h2>Blood Bank Management System</h2></div>
		<div id="body">
			

			<br><br><br>
			<form action="" method="post">
			<table align="center">
				<tr>
					<td width="200px" height="70px" ><b>Enter Username</b></td>
					<td width="100px" height="70px"><input type="text" name="un" placeholder="Enter a Username" style="width:180px;height:40px; border-radius:10px ;" ></td>
				</tr>
				<tr>
					<td width="200px" height="70px" ><b>Enter Password</b></td>
					<td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter a Password"  style="width:180px;height:40px; border-radius:10px ;"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"  style="width:70px;height:40px; border-radius:5px ;"></td>
				</tr>
			</table>
		</form>
		<?php
		if(isset($_POST['submit'])){
			 $un = $_POST['un'];
			 $ps = $_POST['ps'];

			 $sql=$db->prepare("SELECT * FROM admin where uname = '$un' AND pass='$ps'");
			 $sql->execute();
			 $res = $sql->fetchAll(PDO::FETCH_OBJ);
			 if($res){
			 	$_SESSION['un']= $un;

			 header("location:admin-home.php");

			 }
			 else{
			 	
			 	echo "<script>alert('Wrong User')</script>";
			 }
		}

?>
		</div>
		<div id="footer"> <h4 align="center" >Copyright @Saroj</h4></div>
	</div>
</div>
</body>
</html>