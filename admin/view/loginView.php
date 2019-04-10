 <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Customer Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="controls/checklogin.php">
          <table>
          	<tr>
            	<td>Email</td>
                <td><input type="email" name="email" class="form-control"></td>
            </tr>
            <tr>
            	<td>Password</td>
                <td><input type="password" name="password" class="form-control"></td>
            </tr>
            <tr>
            	<td>CAPTCHA</td><br />
                <td> <?php $x= rand(0,99999);
				echo $x ?></td>
             </tr>
            <tr><td></td>
                <td><input type="text" name="captcha" class="form-control"></td>
            </tr>
            <tr>
         <td></td>
                <td><input type="submit" name="submit" class="form-control"><input type="reset" name="reset" class="form-control" /></td>
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