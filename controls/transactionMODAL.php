<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <!-- The Modal -->
  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">PLEASE LOGIN TO CONTINUE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="controls/sendMONEY.php"> <!-- for CAPTACH MATCHING  -->
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
         <td></td>
                <td><input type="submit" name="submit"><input type="reset" name="reset" /></td>
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