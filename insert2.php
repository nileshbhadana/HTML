<?php
if (isset($_POST['add']))
{
define('dbhost','localhost');
define('db_username','root');
define('db_password','');
define('db_database','test');
$conn=mysqli_connect(dbhost,db_username,db_password,db_database);
if(!$conn){
	die('Connection could not be established'.mysql_error());
}

$bookname=$_POST['booknamef'];
$bookauthor=$_POST['bookauthorf'];
$submissiondate=$_POST['submissiondatef'];
$sql="INSERT INTO books (book_title,book_author,submission_date) VALUES ('$bookname', '$bookauthor', '$submissiondate');";
$retval=mysqli_query($conn,$sql);

if(!$retval)
{
	die('could not insert into database'.mysql_error());
}
echo($retval." Records Added");
}
?>
