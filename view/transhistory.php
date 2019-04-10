<?php  ?>
 <!-- The Modal -->
  <div class="modal" id="myModaltrans">
    <div class="modal-dialog">
    	<div class="modal-content">
        
     <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><strong>Transaction History</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <?php
		  if(isset($_SESSION['user1'])){
		  	$qry="SELECT * FROM `tran_history` WHERE `sender_id`=".$_SESSION['user1']['id']." OR `receiver_id`=".$_SESSION['user1']['id']."";
		  	$x=mysqli_query($con,$qry);
		  	if(mysqli_num_rows($x)==0)
			{
				
				echo 'NO transactions yet!';  
		 
				//exit;
				}else {
		  	while($fetchhistory=mysqli_fetch_array($x))
		  	{
				if($fetchhistory['sender_id']==$_SESSION['user1']['id'])
				{?>
					<table>
                    	<tr>
                            <td><p><b>MONEY SENT</b></p></td>
                        </tr>
                        <tr>
                        	<td><p>Sent To:</p></td>
                            <td><?php echo $fetchhistory['receiver_name']?></td>
                        </tr>
                        <tr>
                        	<td><p>Receiver's Account no.</p></td>
                            <td><?php echo $fetchhistory['receiver']?></td>
                        </tr>
                        <tr>
                        	<td><p>Amount:</p></td>
                            <td><?php echo $fetchhistory['amount']?></td>
                        </tr>
                        <tr>
                        	<td><p>Date:</p></td>
                            <td><?php echo $fetchhistory['date']?></td>
                        </tr>
                        <tr>
                        	<td><p>Time:</p></td>
                            <td><?php echo $fetchhistory['time']?></td>
                        </tr>
                        <tr></tr>
                        
                    </table>
			<?php }
				else if($fetchhistory['receiver_id']==$_SESSION['user1']['id'])
				{?>
					<table>
                   	 	<tr></tr>
                    	<tr>
                            <td><p><b>MONEY Received</b></p></td>
                        </tr>
                        <tr>
                        	<td><p>From:</p></td>
                            <td><?php echo $fetchhistory['sender_name']?></td>
                        </tr>
                        <tr>
                        	<td><p>Sender's Account no.</p></td>
                            <td><?php echo $fetchhistory['sender']?></td>
                        </tr>
                        <tr>
                        	<td><p>Amount:</p></td>
                            <td><?php echo $fetchhistory['amount']?></td>
                        </tr>
                        <tr>
                        	<td><p>Date:</p></td>
                            <td><?php echo $fetchhistory['date']?></td>
                        </tr>
                        <tr>
                        	<td><p>Time:</p></td>
                            <td><?php echo $fetchhistory['time']?></td>
                        </tr>
                        <tr></tr>
                    </table>
			<?php }  
			  
		  	}
				}
			mysqli_free_result($x);
			mysqli_close($con);
		  } 
		  ?>
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
     
      
       
        