<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>signup</title>
</head>

<body>


 <!-- The Modal -->
  <div class="modal" id="myModall">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="controls/saveData.php" method="post">
          <table>
          	<tr>
            	<td>Name</td>
                <td><input type="text" name="name" class="form-control"></td>
            </tr>
            <tr>
            	<td>Email</td>
                <td><input type="email" name="email" class="form-control"></td>
            </tr>
            <tr>
            	<td>Date Of Birth</td>
                <td><input type="date" name="dob" class="form-control"></td>
            </tr>
            <tr>
            	<td>Gender</td>
                
                <td >
                <select name="gender">
    				<option value="male">Male</option>
    				<option value="female">Female</option>
    				<option value="others">Others</option>
    
  				</select></td>
  			
            </tr>
             <tr>
            	<td>Contact Number</td>
                <td><input type="tel" name="num" maxlength="10" class="form-control"></td>
            </tr>
            <tr>
            	<td>Address</td>
                <td><input type="text" name="address" class="form-control"></td>
            </tr>
            <tr>
            	<td>Occupation</td>
                <td><input type="text" name="occupation" class="form-control"></td>
            </tr>
            <tr>
            	<td>Password</td>
                <td><input type="password" name="password" class="form-control"></td>
            </tr>
            <tr>
            	<td>Confirm Password</td>
                <td><input type="password" name="conpass" class="form-control"></td>
            </tr>
             <tr>
    
                <td><input type="submit" name="submit" class="btn btn-danger"></td>
            
            
                <td><input type="reset" name="reset" class="btn btn-danger"></td>
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