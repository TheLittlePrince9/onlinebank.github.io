/* <!-- The Modal 
  <div class="modal" id="myModalUserProfile">
    <div class="modal-dialog">
      <div class="modal-content">
      
         Modal Header 
        <div class="modal-header">
          <h4 class="modal-title"><strong>Account Holder Login</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
         Modal body 
        <div class="modal-body">
        
          <table  cellpadding="5" cellspacing="5" border="0">
            	<tr class="usertable_row">
                	<?php echo $_SESSION['user1']['email']?>
                	<td class="usertable1">Name:</td>
                    <td  class="form-control"><?php echo $_SESSION['user1']['name']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Status:</td>
                    <td class="form-control"><?php echo $_SESSION['user1']['status']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Gender:</td>
                    <td class="form-control"><?php echo $_SESSION['user1']['gender']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Account Number:</td>
                    <td class="form-control"><?php echo $_SESSION['user1']['accountNUM']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Current Money:</td>
                    <td class="form-control"><?php echo $_SESSION['user1']['money']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Phone:</td>
                    <td class="form-control"><?php echo $_SESSION['user1']['phone']?></td>
                </tr>
                 <tr>
                	<td class="usertable1">Email:</td>
                    <td class="form-control"><?php echo $_SESSION['user1']['email']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Occupation:</td>
                    <td class="form-control"><?php echo $_SESSION['user1']['occupation']?></td>
                </tr>
          	</table>
        </div>
        
         Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>*/