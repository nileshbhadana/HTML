<?php
define('server','localhost');
define('db_username','root');
define('db_password','');
define('db_database','mydatabase');
$db=mysqli_connect(server,db_username,db_password,db_database);
$myusername=$_POST['username'];
$mypassword=$_POST['passwd'];
$firstn=$_POST['fname'];
$lastn=$_POST['lname'];
$email1=$_POST['email'];
$mo_num=$_POST['m_no'];
$sql="INSERT INTO test (username, password, firstname, lastname, mobile, email) VALUES ('$myusername', '$mypassword', '$firstn', '$lastn', '$mo_num', '$email1')";
$result=mysqli_query($db,$sql);
echo($result);
?>