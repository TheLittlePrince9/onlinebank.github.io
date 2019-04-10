<?php
if ($_SERVER['REQUEST_METHOD']==='POST')
{
	include ('../../controls/connection.php');
	if(isset($_POST['adsubmit']))
		{
			$email=$_POST['ademail'];
			$pass=$_POST['adpass'];
			$adqry= "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
			$exadqry= mysqli_query($con,$adqry) or die("Could not execute");
			$x= mysqli_fetch_array($exadqry);
			if(mysqli_num_rows($exadqry)>0)
			{
				if($x['password']== $pass)
				{
					echo "Welcome ".$x['name']; ?>
					<script>
						alert('You are admin');
                		window.location.href="../index.php?success=1";
                	</script>
				<?php	}
				else
				{?>
				<script>
					alert('You are not registered')
                	window.location.href="../../index.php?success=0";
                </script>
				<?php }	
			}
			else
			{?>
				<script>
					alert('You are not registered')
                	window.location.href="../../index.php?success=0";
                </script>
				<?php }	
		}
}
?>