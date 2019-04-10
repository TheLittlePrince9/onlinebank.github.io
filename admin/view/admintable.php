<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin table</title>
</head>

<body>

 <?php
 			
 			include('../../controls/connection.php');
			$cosqry= "SELECT * FROM useraccount";
			$excosqry= mysqli_query($con,$cosqry) or die('Something went wrong');
			if(mysqli_num_rows($excosqry)>0)
			{
				echo "<p><span style='color:red'>Number of records found:</span> ".mysqli_num_rows($excosqry)."</p>";
				?>
                
      <?php	}
		?>
	<table cellpadding="5" cellspacing="0" border="2">
                	<thead>
                    	<tr>
                        	<th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Email</th>
                            <!--<th>Password</th>-->
                            <th>Phone</th>
                            <!--<th>City</th>-->
                            <!--<th>State</th>-->
                            <!--<th>Country</th>-->
                            <!--<th>Pin Code</th>-->
                            <th>Account Number</th>
                            <th>Money</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Occuation</th>
                            <th>Gender</th>
                            <th>Delete</th>
                            <th>Transactions</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							while($row=mysqli_fetch_array($excosqry))
							{?>
								<tr>
                                	
                                	<td><p style="font-size:15px"><?php echo $row['0']?></p></td>
                                    <td><p style="font-size:15px"><?php echo $row['name']?></p></td>
                                    <td><!--For toggle switch-->
                                    <?php if($row['status']=="Not Approved"){?>
                                    	<label class="switch">
  											<input id="approve" type="checkbox" onChange="status(this,<?php echo $row['id'] ?>)"><span class="slider round"></span>
										</label>
                                        <?php } else {?>
										<label class="switch">
  											<input id="approve" type="checkbox" onChange="status(this,<?php echo $row['id'] ?>)" checked><span class="slider round"></span>
										</label>
										<?php } ?>
                                    </td>
                                    <!--<td><p style="font-size:15px"><?php echo $row['status']?></p></td>-->
                                    <td><p style="font-size:14px"><?php echo $row['email']?></p></td>
                                   <!-- <td><?php echo $row['password']?></td>-->
                                    <td><p style="font-size:15px"><?php echo $row['phone']?></p></td>
                                    <!--<td><p style="font-size:15px"><?php echo $row['city']?></p></td>-->
                                    <!--<td><p style="font-size:15px"><?php echo $row['state']?></p></td>-->
                                    <!--<td><p style="font-size:15px"><?php echo $row['country']?></p></td>-->
                                    <!--<td><p style="font-size:15px"><?php echo $row['pin']?></p></td>-->
                                    <td><b><p style="font-size:14px"><?php echo $row['accountNUM']?></p></b></td>
                                    <td><p style="font-size:15px"><?php echo $row['money']?></p></td>
                                    <td style="width:200px;"><p style="font-size:15px"><?php echo $row['dob']?></p></td>
                                    <td style="width:280px"><p style="font-size:12px"><?php echo $row['address']?></p></td>
                                    <td style="width:100px;"><p style="font-size:15px"><?php echo $row['occupation']?></p></td>
                                    <td style="width:30px"><p style="font-size:15px"><?php echo $row['gender']?></p></td>
                                    <td><input type="image" src="img/delete.jpg" alt="Delete" onClick="del(<?php echo $row['id']?>);"></td>
                                     <td><input type="image" src="img/Bitcoin_icon.png" alt="Delete" onClick="tran(<?php echo $row['id']?>);"></td>
                                    
                                </tr>			
					  <?php }
						?>
                    </tbody>
                </table>	
                <script src="../lib/jquery/jquery.min.js"></script>
  				<script src="../lib/jquery/jquery-migrate.min.js"></script>
                <script>
					/*TOGGLE SWITCH CHANGES*/
  					function status(Obj,id)
					{
						var x;
						//alert(Obj);
						if ( $( Obj ).is( ":checked" ) ){  /*to check whwather 0 or 1VVIMP CODE*/
							alert('checked');
							x="Approved";
						}else{
							alert('un-checked');
							x="Not Approved";
						}
						/*var x;
						var val= value.innerHTML;
						if(val=="Not Approved")
							x="Approved";
						else if(val=="Approved")
							x="Not Approved";*/
						$.ajax({
								url:"controls/editstatus.php", 
								data:{val:x,id:id,col:'status'},
								type:"POST",
								success: function(response)
								{}
							});
					}
						
					/*Deletion*/
					function del(id)
					{
						
						$.ajax({
							url:'controls/deleteuser.php',
							data:{id:id},
							type:'POST',
							error:function(r){
								alert(r.status);
							},
							success: function(response)
							{
								//alert('s');
								if(response==1)
									{
										//alert(response);
										setTimeout(function(){$("#admintable").load("view/admintable.php");},1000);
									}
								else{
										alert(response);	
									}	
							}
							});
					}
					
					
					
					/*TRANSACTION*/
					
					function tran(id)
					{
						
						$.ajax({
							url:'controls/deleteuser.php',
							data:{id:id},
							type:'POST',
							error:function(r){
								alert(r.status);
							},
							success: function(response)
							{
								//alert('s');
								if(response==1)
									{
										//alert(response);
										setTimeout(function(){$("#admintable").load("view/admintable.php");},1000);
									}
								else{
										alert(response);	
									}	
							}
							});
					}
					
					
	
				</script>

</body>
</html>