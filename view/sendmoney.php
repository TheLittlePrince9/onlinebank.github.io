<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div class="modal" id="myModalsendmoney">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><strong>Send money</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="controls/sendingmoney.php">
          <table>
          		<input type="hidden" name="sender" value="<?php echo $_SESSION['user1']['id']; ?>"
          	<tr>
          		<td>Send to:</td>
          		<td><input type="text" name="receiver" class="form-control" required></td>
          	</tr>
          	<tr>
          		<td>Amount:</td>
          		<td><input type="number" name="amount" class="form-control" required></td>
          	</tr>
          	<tr>
            	<td></td>
          		<td><input type="submit" name="sendmoney" value="Send" class="form-control">
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
  </body>
</html>
