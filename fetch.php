<?php
define('server','localhost');
define('db_username','root');
define('db_password','');
define('db_database','mydatabase');
$db=mysqli_connect(server,db_username,db_password,db_database);
$myusername=$_POST['username'];
$mypassword=$_POST['passwd'];
$sql="SELECT password FROM test WHERE username='$myusername'";
$result=mysqli_query($db,$sql);
print_r($result);
$fetched_data=mysqli_fetch_assoc($result);
print_r($fetched_data);
if($mypassword==$fetched_data["password"])
 {
	 echo("hey its working");
 }
?>