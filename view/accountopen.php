<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<!-- The Modal -->
  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><strong>Account Opening</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="controls/account.php" method="post"> <!-- NOTE ADD THE LINK HERE -->
          <table>
          <tr>
            	<td>Name of Account Holder</td>
                <td><input type="text" name="name" class="form-control" required></td>
            </tr>
          	 <tr>
            	<td>Date Of Birth</td><!-- add  -->
                <td><input type="date" name="dob" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Address</td><!-- add  -->
                <td><input type="text" name="address" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Occupation</td><!-- add  -->
                <td><input type="text" name="occupation" on class="form-control" required></td>
            </tr>
            <tr>
            	<td>Gender</td><!-- add  -->
                
                <td >
                <select name="gender">
    				<option value="male">Male</option>
    				<option value="female">Female</option>
    				<option value="others">Others</option>
    
  				</select></td>
  			
            </tr>
            <tr>
            	<td>Email</td>
                <td><input type="email" name="email" class="form-control" required></td>
            </tr>
           
             <tr>
            	<td>Contact Number</td>
                <td><input type="tel" name="num" maxlength="10" class="form-control" required></td>
            </tr>
            <tr>
            	<td>City</td>
                <td><input type="text" name="city" class="form-control" required></td>
            </tr>
            
           <tr>
            	<td>State</td>
                <td><input type="text" name="state" class="form-control" required></td>
            </tr>
            
              <tr>
            	<td>Country</td>
                
                <td >
                <select name="country">
    				<option value="india">India</option>
    				<option value="bangladesh">Bangladesh</option>
    				<option value="nepal">Nepal</option>
                    <option value="srilanka">Sri Lanka</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="bhutan">Bhutan</option>
    
    
    
    
  				</select></td>
  			
            </tr>
             <tr>
            	<td>Pin Code</td>
                <td><input type="number" name="pin"  class="form-control" maxlength="7" required></td>
            </tr>
            <tr>
            	<td>Money</td>
                
                <td >
                <select name="money">
    				<option value="1000">Rs 1000</option>
    				<option value="5000">Rs 5000</option>
    				<option value="10000">Rs 10000</option>
                    <option value="20000">Rs 20000</option>
                    <option value="50000">Rs 50000</option>
                    <option value="100000">Rs 100000</option>
    
    
    
    
  				</select></td>
  			
            </tr>
            
            <tr>
            	<td>Password</td>
                <td><input id="pass2" type="password" name="password" class="form-control" required></td>
            </tr>
            <tr>
            	<td>Confirm Password</td>
                <td><input id="cpass2" type="password" name="conpass" onKeyUp="passcheck()" class="form-control" required></td>
            </tr>
            <tr>
            	<td></td>
                <td><b><p id="demo2"></p></b></td>
            </tr>
             <tr>
                <td><input id="sub2" type="submit" name="submit" class="btn btn-danger" disabled></td>
            
            
                <td><input type="reset" name="reset" class="btn btn-danger"></td> 
            </tr>
            
          </table>
          </form>
        </div>
        <script>
			function passcheck()
			{
				var p,c,r,text;
				p=document.getElementById("pass2").value;
				c=document.getElementById("cpass2").value;
				if(p==c)
				{
					document.getElementById("sub2").disabled= false;
					text="Password match";	
					r=text.fontcolor("green");
					
				}	
				else
				{
					document.getElementById("sub2").disabled = true;
					text="Password does not match";
					r=text.fontcolor("red");	
				}
				document.getElementById("demo2").innerHTML=r;
			}
		</script>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html>