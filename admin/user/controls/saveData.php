<?php
if($_SERVER['REQUEST_METHOD'] === "POST")/*post for secure data*/
	{
	include ('dbconfig.php');# import done here
	if(isset($_POST['submit']))
	{
		
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$phoneno = $_POST['num'];
	$adds=$_POST['address'];
	$gender=$POST['gender'];
	$occupation=md5($_POST['occupation']);
	$dob=$_POST['dob'];
	$confirmpass=$_POST['conpass'];

	$qryStr = "SELECT email FROM register where email='$email'"; # email='coloumn' while $email=value of email
	
	
	$EXEC = mysqli_query($con,$qryStr);
	if(mysqli_num_rows($EXEC)>0){
		
		?><script> alert('You are already registered'); 
		
		window.location.href = './index.php'; //Redirecting
		</script><?php	}
		
		$qry="INSERT INTO register VALUES('0',$name, $email, $password,$phoneno, $adds, $gender,$occupation,$dob)";
		$exeqry=mysqli_query($con,$qry) or die("something went wrong");
	}}
		?>
	
	