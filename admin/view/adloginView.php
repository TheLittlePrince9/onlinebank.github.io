<div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><strong>Admin Login</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<form method="post" action="../controls/test.php">
            	<input type="hidden" name="request" value=5 />
            </form>
          <form method="post" action="./admin/controls/adviewData.php">
          <table>
          	<tr>
          		<td>Admin Email:</td>
          		<td><input type="email" name="ademail" class="form-control" required></td>
          	</tr>
          	<tr>
          		<td>Password:</td>
          		<td><input type="password" name="adpass" class="form-control" required></td>
          	</tr>
          	<tr>
            	<td></td>
          		<td><input data-toggle="modal" data-target="#admodal" type="submit" name="adsubmit" value="Login" class="form-control">
          			<input type="reset" name="adreset" class="form-control"></td>
          	</tr>
            
          </table>
          </form>
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>