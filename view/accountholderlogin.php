 <!-- The Modal -->
  <div class="modal" id="myModalA">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><strong>Account Holder Login</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="./controls/accountholderchecklogin.php"> <!-- for CAPTACH MATCHING  -->
          <table>
          	<tr>
            	<td>Email</td>
                <td><input type="email" name="email1" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Password</td>
                <td><input type="password" name="password1" class="form-control" required></td>
            </tr>
            
            <tr>
            	<td>CAPTCHA</td><br />
                <td> <?php $x= rand(0,99999);
				echo $x ?></td>
             </tr>
            <tr><td></td>
                <td><input type="text" name="captcha" class="form-control" required></td>
            </tr>
            <tr>
         		<td style="margin-right:20px;"><input type="submit" name="submit" class="btn btn-danger"></td>
                <td><input type="reset" name="reset" class="btn btn-danger" /></td>
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