<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table>
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>PHONE</th>
<th>EMAIL</th>
<th>DOB</th>
<th>GENDER</th>
<th>FILE</th>
</tr>
</thead>
<tbody
<tr>


<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{
	include("dbconfig.php");
	if(isset($_POST['submit']))
	{
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
	
	$qry="SELECT * from register WHERE email='$email' AND password='$pass'";
	$exe=mysqli_query($con,$qry) or die("NO MATCH FOUND");
	$x=mysqli_fetch_array($exe);
	if($x['password']==$pass)
	{
	if(mysqli_num_rows($exe)>0)
	{
	
	echo "welcome here ". $x['name'];
	

	?><td> <?php echo $x['id']?></td>
    <td> <?php echo $x['name']?></td>
    <td> <?php echo $x['phone']?></td>
    <td> <?php echo $x['email']?></td>
    <td> <?php echo $x['dob']?></td>
    <td> <?php echo $x['gender']?></td>
    <td> <?php echo $x['url']?></td>
    <?php
    
	}else
	{
		?>
    <script>
	alert("you are not registered yet, kindly sign up")
	window.location.href="../index.php";
	</script><?php
		}}
		else{?>
			<script>
	alert("password did not match")
	window.location.href="../index.php";
	</script><?php
    }
		
	}
}


?>
</tr>
</tbody>
</table>
</body>
</html>