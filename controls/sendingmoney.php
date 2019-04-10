<?php
	
	if($_SERVER['REQUEST_METHOD']==="POST")
	{
		if(isset($_POST['sendmoney']))
		{
			$senderid=$_POST['sender'];
			$receiver=$_POST['receiver'];
			$amount=$_POST['amount'];
			include("connection.php");
			
			$fetchsender=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM useraccount WHERE id='$senderid'"));
			
			$receiverid=mysqli_query($con,"SELECT * FROM useraccount WHERE accountNUM='$receiver'");
			$fetchreceiver=mysqli_fetch_array($receiverid);
			$email = $fetchreceiver['email'];
			$name = $fetchreceiver['name'];
			
			#########################Updating useraccount table###############################
			$updatesender=mysqli_query($con,"UPDATE useraccount SET money= money-'$amount' WHERE id='$senderid'");
			$updatereceiver=mysqli_query($con,"UPDATE useraccount SET money= money+'$amount' WHERE id='".$fetchreceiver['id']."'");
			
			#######################Insert into tran_history table###############################
			date_default_timezone_set('Asia/Calcutta');
			$insert_trans= mysqli_query($con,"INSERT INTO tran_history VALUES ('','".$fetchsender['name']."','".$fetchreceiver['name']."','".$fetchsender['accountNUM']."','".$fetchreceiver['accountNUM']."','$amount','".date("d/m/Y")."','".date("H:i:s")."','$senderid','".$fetchreceiver['id']."')");
			
			include('mailer.php');
			$body = "<h1>Amount Rs $amount has beeen credited to your account</h1>";
			$subject = "Amount Recieved from IEM";
			$ret = sendMail($email,$name,$subject,$body);
			//var_dump($ret);
			
			?><script>
			alert('Transaction successful');
			//window.location.href="../index.php";</script><?php
			
			
			
		}	
	}
?>
