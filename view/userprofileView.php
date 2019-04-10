<?php #session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User profile</title>
</head>

<body>
<?php
# include('userprofileedit.php');
?>
<!-- The Modal -->
  <div class="modal" id="myModalP">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><strong>Profile</strong></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <!-- Modal body -->
        <div class="modal-body">
         <!-- <form action="" method="post"> <!-- NOTE ADD THE LINK HERE -->
        	
         	<div id="showprofile"><!-- updateViewprofile.php here-->
            
            </div>
         <!-- </form>-->
        </div>
        <!--#############################################  CSS   ############################################### -->
        <style>
		.usertable1
		{
			font-weight:bold;
			font-family:"MS Serif", "New York", serif;
			padding-right:50px;
		}
		.usertable_row
		{
			padding-bottom:50px;
		}
		</style>
 
        <!-- Modal footer -->
        <div class="modal-footer">
           <?php /*?>	 <button id="back" style="width:80px; font-size:14px; display:none;" name="back" type="submit" class="form-control" value="1" onClick="back()"> < < Back </button>
        	 <button id="edit" style="width:120px;" name="edit_profile" type="submit" class="form-control" value="1" onClick="useredit()">Edit Profile</button>
			 <button style="display:none; width:130px;" id="saveChanges" style="width:120px;" name="save_changes" type="submit" class="form-control" value="1" onClick="editph()">Save Changes</button>
             </form><?php */?>
	          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
        <!--###################################### JAVA SCRIPT ######################################################## -->
        <script>
			
			
			/*function useredit()
			{
				var x,y;
				x= document.getElementById("edit").value;
				y= document.getElementById("saveChanges").value;
				if(x==1)
				{
					document.getElementById("content1").contentEditable="true";	
					document.getElementById("content6").contentEditable="true";
					document.getElementById("content7").contentEditable="true";
					document.getElementById("content8").contentEditable="true";
					document.getElementById("content1").style.backgroundColor = "#feffbd";
					document.getElementById("content6").style.backgroundColor = "#feffbd";
					document.getElementById("content7").style.backgroundColor = "#feffbd";
					document.getElementById("content8").style.backgroundColor = "#feffbd";
					document.getElementById("saveChanges").style.display="block";
					document.getElementById("edit").style.display="none";
					document.getElementById("back").style.display="block";
				}
			}*/
			</script>
             
            
            <script>
			/*function saveChange()
			{
				var x,y;
				//var value= xyz.innerhtml;
				x= document.getElementById("edit").value;
				y= document.getElementById("saveChanges").value;
				if(y==1)
				{
					document.getElementById("content1").contentEditable="false";	
					document.getElementById("content6").contentEditable="false";
					document.getElementById("content7").contentEditable="false";
					document.getElementById("content8").contentEditable="false";
					document.getElementById("content1").style.backgroundColor = "white";
					document.getElementById("content6").style.backgroundColor = "white";
					document.getElementById("content7").style.backgroundColor = "white";
					document.getElementById("content8").style.backgroundColor = "white";
					
					document.getElementById("saveChanges").style.display="none";
					document.getElementById("edit").style.display="block";
					document.getElementById("back").style.display="none";
					
					
                     */
					/*
					document.write('<input type="hidden" name="newName" value="' + document.getElementById("content1").innerHTML + '" />');
					document.write('<input type="hidden" name="newPhone" value="' + document.getElementById("content6").innerHTML + '" />');
					document.write('<input type="hidden" name="newEmail" value="' + document.getElementById("content7").innerHTML + '" />');
					document.write('<input type="hidden" name="newOccupation" value="' + document.getElementById("content8").innerHTML + '" />');
					document.write('<input type="hidden" name="submitChange" value="' + document.getElementById("saveChanges").innerHTML + '" />');
					document.write('<input type="hidden" name="idchange" value="<?php # echo $_SESSION['user1']['id'] ?>" />');
                   
				   
				}
			}
			function back()
			{
				var x= document.getElementById("back").value;
				if(x==1)
				{
					document.getElementById("content1").contentEditable="false";	
					document.getElementById("content6").contentEditable="false";
					document.getElementById("content7").contentEditable="false";
					document.getElementById("content8").contentEditable="false";
					document.getElementById("content1").style.backgroundColor = "white";
					document.getElementById("content6").style.backgroundColor = "white";
					document.getElementById("content7").style.backgroundColor = "white";
					document.getElementById("content8").style.backgroundColor = "white";
					
					document.getElementById("edit").style.display="block";
					document.getElementById("saveChanges").style.display="none";
					document.getElementById("back").style.display="none";	
					
				}	
			}
			 /*var id=<?php echo $_SESSION['user1']['id']?>;
			 document.getElementById("saveChanges").onclick = function(){
						alert("working");
						$.ajax({
						url:"../controls/saveChanges.php",
						data:{id:id,value:document.getElementById("content1").value,colname:"name"},
						type:"POST";
						success: function(response){   HOW???response is the echo we are generating in the other page
			if( response == 1 ){
				$(xyz).css('background-color','green');}
						
            		window.location.href="index.php";
					});
				}*/
			
		</script>
        
						<script>
						/*function editph(id,col)
						{
							alert("in fun");
							var x= $("#ph").val();
							$.ajax({
								url:"controls/saveChanges.php",
								data:{id:id ,val:x,col:col},
								type:"POST",
								success: function(response){
										if(response==1)
										{
											alert("kaam kiya");	
										}
									}
								
								)};
						}*/
                        </script>
				
       
      </div>
    </div>
  </div>

</body>
</html>