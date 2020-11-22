<!DOCTYPE html>
<html>
<?php
	$username="root";
	$password="Passw0rd$";
	$database="hackGSU";
	$dno=$_GET['crn'];
	mysql_connect(localhost,$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");
	$query="SELECT lname,salary FROM employee where dno=$dno";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	mysql_close();
?>
<head>
</head>
<body>
	<p>Hello World! Here's the first registred guy: {{string_var}}. The second one is: {{string_var2}}</p>
</body>
</html>