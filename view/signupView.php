<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SignupView</title>
</head>

<body>


 <!-- The Modal -->
  <div class="modal" id="myModall">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><strong>Sign Up</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="controls/savedata.php" method="post">
          <table>
          	<tr>
            	<td>Name</td>
                <td><input type="text" name="name" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Email</td>
                <td><input type="email" name="email" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Date Of Birth</td>
                <td><input type="date" name="dob" class="form-control" required></td>
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
                <td><input type="tel" name="num" maxlength="10" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Address</td>
                <td><input type="text" name="address" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Occupation</td>
                <td><input type="text" name="occupation" on class="form-control" required></td>
            </tr>
            <tr>
            	<td>Password</td>
                <td><input id="pass" type="password" name="password" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Confirm Password</td>
                <td><input id="cpass" type="password" onKeyUp="validpass()" name="conpass" class="form-control" required></td>
            </tr>
            <tr>
            	<td></td>
            	<td><b><p id="demo"></p></b></td>
            </tr>
            <tr>
                <td><input id="sub" type="submit" name="submit" class="btn btn-danger" disabled></td>
            	<td><input type="reset" name="reset" class="btn btn-danger"></td>
            </tr>
          </table>
          </form>
          <script>
          	function validpass()
			{
				var x,y,text,result;
				x = document.getElementById("pass").value;
				y = document.getElementById("cpass").value;
				if(x!=y)
					{
						document.getElementById("sub").disabled = true;
						text= "Password does not match";
						result= text.fontcolor("red");
					}
				else
					{
						document.getElementById("sub").disabled = false;
						text= "Password match";
						result= text.fontcolor("green");
					}
				document.getElementById("demo").innerHTML= result;		
			}
          </script>
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