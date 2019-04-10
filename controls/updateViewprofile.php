<?php
session_start();
 include('connection.php');
$qry  =mysqli_query($con,"SELECT * FROM useraccount WHERE id = '".$_SESSION['user1']['id']."'");
if(mysqli_num_rows($qry)==1){
$fetchData = mysqli_fetch_array($qry);
}else{
	die("something went wrong");		
}


?>
<form method="post">
<table  cellpadding="5" cellspacing="5" border="0">
            	<tr class="usertable_row">
                	<?php //echo $_SESSION['user1']['name']?>
                	<td class="usertable1">Name:</td>
                    <td id="content1"><input class="form-control" type="text" name="name" value="<?php echo $fetchData['name']?>"></td>
                    <td><i class="fa fa-edit" onClick="edit('<?php echo $_SESSION['user1']['id']?>','name',$(this).parent().prev().children().val(),$(this).parent().next().children())"></i></td><!--Using AJAX for getting current value of input to pass in edit()-->
                    <td><i class="fa fa-check" id="named1" style="color:green; display:none"></i></td>
                </tr>
                <tr>
                	<td class="usertable1">Status:</td>
                    <td id="content2" contenteditable="false" class="form-control"><?php echo $fetchData['status']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Gender:</td>
                    <td id="content3" contenteditable="false"><input type="text" class="form-control" name="gender" value="<?php echo $fetchData['gender']?>"></td>
                    <td><i class="fa fa-edit" onclick="edit(<?php echo $_SESSION['user1']['id']?>,'gender',$(this).parent().prev().children().val(),$(this).parent().next().children())" ></td>
                    <td><i class="fa fa-check" id="named2" style="color:green; display:none"></i></td>
                </tr>
                <tr>
                	<td class="usertable1">Account Number:</td>
                    <td id="content4" contenteditable="false" class="form-control"><?php echo $fetchData['accountNUM']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Current Money:</td>
                    <td id="content5" contenteditable="false" class="form-control"><?php echo $fetchData['money']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Phone:</td>
                    <td id="content6" contenteditable="false"><input id="ph" class="form-control" type="text" name="phone" value="<?php echo $fetchData['phone']?>"></td>
                    <td><i class="fa fa-edit" onclick="edit(<?php echo $_SESSION['user1']['id']?>,'phone',$(this).parent().prev().children().val(),$(this).parent().next().children())"></td>
                    <td><i class="fa fa-check" id="named3" style="color:green; display:none"></i></td>
                </tr>
                 <tr>
                	<td class="usertable1">Email:</td>
                    <td id="content7" contenteditable="false" class="form-control"><?php echo $fetchData['email']?></td>
                </tr>
                <tr>
                	<td class="usertable1">Occupation:</td>
                    <td id="content8" contenteditable="false"><input type="text" class="form-control" name="occ" value="<?php echo $fetchData['occupation']?>"></td>
                    <td><i class="fa fa-edit" onclick="edit(<?php echo $_SESSION['user1']['id']?>,'occupation',$(this).parent().prev().children().val(),$(this).parent().next().children())"></td>
                    <td><i class="fa fa-check" id="named4" style="color:green; display:none"></i></td>
                </tr>
          	</table>
            <style>
			.usertable1
			{
				alignment-adjust:central;
				
			}
			</style>