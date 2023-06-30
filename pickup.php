<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title>Pick Up | Seller </title>
	</head>
<head>
<style>
body {background-image:url(css/booksbg.jpg);
    background-color: lightYellow;}
ul {
	list-style-type:none;
	margin:2px;
	padding:0;
	overflow:hidden;
    background-color: khaki;
	}

	li{
	float:left;
	font-family: 'Garamond',serif;
	font-size: 24px;
	}
		
	li a {
	display:block;
	color:black;
	padding: 14px 16px;
	text-decoration:none;
	}
		
	li a:hover{
	background-color:lightSkyBlue;
	color:lemonChiffon;
	}	
	
	.navbar-nav>a {
    color: white;
    }	
</style>
</head>
<div>
	<ul class="navbar-nav">
		<li class="nav-item"><a href="sellerprofile.php" ><b><u>Profile</u></b></a></li>
		<li class="nav-item"><a href="display_books.php" ><b><u>Update Books</u></b></a></li>
		<li class="nav-item"><a href="pickup.php" ><b><u>Pick up</u></b></a></li>
	</ul>
	</div>
<?php 
include 'conn.php';
echo "<h2>Pick Up Details</h2>";
echo "<table cellpadding=5 cellspacing=10 border=1 width=50% class='center' bgcolor=steelblue>
<tr><th colspan=1 rowspan=1 bgcolor=lightblue>Purchase ID</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Customer Username</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Customer Phone Number</th>";
echo "<th colspan=1 rowspan=1 bgcolor=lightblue>Date Pickup</th></tr>";
$result = mysqli_query($conn, "select * from purchase");
while($row = mysqli_fetch_row($result)){
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[0]</td>";
	
	echo "</tr>";}
$result = mysqli_query($conn, "select * from pickup");
while($row = mysqli_fetch_row($result)){
	echo "<tr><th colspan=1 rowspan=1 bgcolor=steelblue></th>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[0]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[1]</td>";
	echo "<td colspan=1 rowspan=1 bgcolor=lightblue>$row[2]</td>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "</tr>";}
	
	echo "</table>";
mysqli_free_result($result);
mysqli_close($conn);
?>
</html>