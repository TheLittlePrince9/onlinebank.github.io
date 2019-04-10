<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

if($_SERVER['REQUEST_METHOD']==="POST")
{ include("connection.php");
	if(isset($_POST['submit']))
	{
		$email=$_POST['email1'];
		$pass=md5($_POST['password1']);
		  
		  
		  $qry="SELECT * FROM details WHERE email='$email' AND password='$pass'";
		  $exe=mysqli_query($con,$qry) or die("error in query");
		  $x=mysqli_fetch_array($exe);
	if($x['password']==$pass)  // important line please note
	{
	if(mysqli_num_rows($exe)>0)
	{
	
	echo "welcome here ". $x['name'];
	?>
	
	 <form method="post" action=""> <!-- add LINK HERE -->
          <table>
          <tr>
            	<td>YOUR ACCOUNT NUMBER</td>
                <td><input type="text" name="accountSENDER" class="form-control" required></td>
            </tr>
            <tr>
            	<td>ACCOUNT NUMBER OF RECEIVER</td>
                <td><input type="text" name="accountRECEIVER" class="form-control" required></td>
            </tr>
            <tr>
            	<td>MONEY YOU WANT TO SEND</td>
                <td><input type="text" name="money" class="form-control" required></td>
            </tr>
            <tr>
            	<td>YOUR MOBILE NUMBER</td>
                <td><input type="tel" name="number" class="form-control" required maxlength="10"></td>
            </tr>
          	<tr>
            	<td>Email</td>
                <td><input type="email" name="email1" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Password</td>
                <td><input type="password" name="password1" class="form-control" required></td>
            </tr>
            
            <tr>
            	<td>CAPTCHA</td><br />
                <td> <?php $x= rand(0,99999);
				echo $x ?></td>
             </tr>
            <tr><td></td>
                <td><input type="text" name="captcha" class="form-control" required></td>
            </tr>
            <tr>
         <td></td>
                <td><input type="submit" name="submit"><input type="reset" name="reset" /></td>
            </tr>
          </table>
          </form>
	
	<?php
		  
	}
	
	else
	{
		?>
    <script>
	alert("you are not registered yet, kindly sign up")
	window.location.href="../index.php";
	</script><?php
		}}
		else
		{?>
			<script>
	alert("password did not match")
	window.location.href="../index.php";
	</script><?php
    }
	}
	}


?>
</body>
</html>