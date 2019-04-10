<?php 
$host="localhost";
$username="root";
$password='';
$dbname="user";
$con= mysqli_connect($host,$username,$password,$dbname) or die("something is wrong with server and database connection");
if(is_object($con))
echo "good coonection";

?>