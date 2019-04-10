<?php

if($_SERVER['REQUEST_METHOD']==="POST")
{
	if(isset($_POST['submit']))
	{ echo"hello";
		include("connection.php");
		$name=$_POST['name'];
		$email=$_POST['email'];
		$num=$_POST['num'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$country=$_POST['country'];
		$newpass=md5($_POST['password']);
		$money=$_POST['money'];
		$pin=$_POST['pin'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$adds=$_POST['address'];
		$occupation=$_POST['occupation'];
		
		/*$checkqry="SELECT * FROM details WHERE email='$email' AND password='$newpass'";
		$qrrrry=mysqli_query($con,$checkqry) or die("query didnt work");
		$x=mysqli_fetch_array($qrrrry);
		if($newpass==$x['password'])
		{echo "hey";
			if(mysqli_num_rows($qrrrry)>0)
		{echo "hie";*/
			$che="SELECT * FROM useraccount WHERE email='$email' AND password='$newpass' AND phone='$num'";
			$queryy=mysqli_query($con,$che) or die ("error");
			if(mysqli_num_rows($queryy)>0)
			{
				
		?><script> alert('You  already have an account in our BANK.'); 
		
		window.location.href = '../index.php'; //Redirecting
		</script><?php	
				
			}
			else
		{echo "hmmm";
		$accountNO="BKID"."0000000".rand(0,999999);
		$status="Not Approved";
 $qrysd="INSERT INTO useraccount VALUES('0','$name','$email','$newpass','$num','$city','$state','$country','$pin','$accountNO','$money','$dob','$adds','$occupation','$gender','$status')";
		$execc=mysqli_query($con,$qrysd);
		if($execc==1)
		{ 
			echo"hhhhhhh"; ?>
			
			<?php header("location:../index.php?success=1");
		}
	}
		/*}
		
		}
		
	else{
	?>
    <script>
	alert("THE PASSWORD or PHONE NUMBER OF YOUR ACCOUNT IS NOT IN ACCORDANCE WITH OUR RECORDS. KINDLY TRY AGAIN");
	window.location.href = '../index.php'; //Redirecting
	</script> <?php	}*/
	}
}

?>