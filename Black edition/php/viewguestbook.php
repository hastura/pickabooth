<!doctype html>
<html>
<head>
<style>
body{
	font-family: Helvetica, Arial, sans-serif, "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed";
	font-size:14px;
	}
	
header{
	width:200px;
	height: auto;
	margin:auto;
	}	

#table_outside{
	height:100;
	width:800;
	border-radius:10px;
	bgcolor:#CCCCCC;
	}
#table_inside{
	height:100;
	width:800;
	border-radius:10px;
	width:800;
	border:0;
	}
	
</style>
<meta charset="UTF-8">
<title>guestbook</title>
</head>

<body bgcolor="#D0F7CB">
<header><img src="../guestbook content/buku_tamu.svg"></header>
<br>

<?php

$host="localhost"; // Host name 
$username="picx7165_pab"; // Mysql username 
$password="pickabooth042013"; // Mysql password 
$db_name="picx7165_pickabooth"; // Database name 
$tbl_name="guestbook"; // Table name 




// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
while ($row = mysql_fetch_assoc($result)){
?>

<table id="table_outside"  cellpadding="0"; cellspacing="4"; >
<tr>
<td><table id="table_inside" cellpadding="1" cellspacing="5" bgcolor="#FFFFFF">
<tr>
<td>ID</td>
<td>:</td>
<td><?php echo $row['id']; ?></td>
</tr>
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="auto"><?php echo $row['name']; ?></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><?php echo $row['email']; ?></td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><?php echo $row['comment']; ?></td>
</tr>
<tr>
<td valign="top">Date/Time </td>
<td valign="top">:</td>
<td><?php echo $row['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<?php
}
mysql_close(); //close database
?>
</body>
</html>