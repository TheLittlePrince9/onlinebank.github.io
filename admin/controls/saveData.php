<?php
if($_SERVER['REQUEST_METHOD'] === "POST")/*post for secure data*/
	{
	include ('../view/dbconfig.php');# import done here
	if(isset($_POST['submit']))
	{
		
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password1 = md5($_POST['password']);
	$phoneno = $_POST['num'];
	$adds=$_POST['address'];
	$gender=$_POST['gender'];
	$occupation=$_POST['occupation'];
	$dob=$_POST['dob'];
	$confirmpass1=md5($_POST['conpass']);
	if($password1!= $confirmpass1)
	{
?><script> alert('the password did not match'); 
		window.location.href = '../index.php'; //Redirecting
		
		</script><?php
	}
	else{
	$qryStr = "SELECT email FROM register where email='$email'"; # email='coloumn' while $email=value of email
	
	
	$EXEC = mysqli_query($con,$qryStr);
	if(mysqli_num_rows($EXEC)>0){
		
		?><script> alert('You are already registered'); 
		
		window.location.href = '../index.php'; //Redirecting
		</script><?php	}
		
		$qry="INSERT INTO register VALUES('0','$name','$email','$dob', '$gender','$phoneno','$adds','$occupation','$password')";
		$exeqry=mysqli_query($con,$qry) or die("Registration not successfull");
		if($exeqry==1)
		{?><script>
        	window.location.href = '../index.php?success=1';
        	alert('Registration Successful');
        </script>
			
		<?php	}
	}}}
		?>
	
	