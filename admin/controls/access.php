<?php
	include("../../controls/connection.php");
	$aqry= "SELECT * FROM details";
	$exaqry= mysqli_query($con,$aqry) or die('Error');
	if($_GET['success']==1)
	{
		if(mysqli_num_rows($exaqry)>0)
		{ ?>
        	<table cellpadding="5" cellspacing="0" border="1">
			<thead>
        		<tr>
            		<th>ID</th>
                	<th>Name</th>
                	<th>Email</th>
                	<th>DOB</th>
                	<th>Gender</th>
                	<th>Phone</th>
                	<th>Address</th>
                	<th>Occupation</th>
                	<th>Password</th>
                	<th>Url</th>
                	<th>Aadhar</th>
                	<th>Money</th>
            	</tr>
        	</thead>	
        	<tbody>
        		<?php while($row=mysqli_fetch_array($exaqry)){
				?>
        		<tr>
            		<td><?php echo $row['0']?></td>
                	<td><?php echo $row['name']?></td>
                	<td><?php echo $row['email']?></td>
                	<td><?php echo $row['dob']?></td>
                	<td><?php echo $row['gender']?></td>
                	<td><?php echo $row['phone']?></td>
                	<td><?php echo $row['address']?></td>
                	<td><?php echo $row['occupation']?></td>
                	<td><?php echo $row['password']?></td>
                	<td><?php echo $row['url']?></td>
                	<td><?php echo $row['aadhar']?></td>
                	<td><?php echo $row['money']?></td>
            	</tr> <?php } ?>
        	</tbody>
            </table>
			<?php }	
			else{
			echo "No records found";
				}
	}
	else{
			echo "Could not display";
		}
?>

