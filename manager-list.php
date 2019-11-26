<?php
session_start();
require_once('database.php');
require_once('library.php');
include("header.php");
isUser();

$sql = "SELECT * FROM tbl_courier_officers";
$result = dbQuery($sql);
?>

<script language="JavaScript">
	var checkflag = "false";

	function check(field) {
	if (checkflag == "false")
	 {
		for (i = 0; i < field.length; i++) {
		if(field[i].type=="checkbox" && field[i].name!="chkAll")
		{
		field[i].checked=true;	
		}
		}
		checkflag = "true";
	}
	else
	{
		for (i = 0; i < field.length; i++) {
		if(field[i].type=="checkbox" && field[i].name!="chkAll")
		{
		field[i].checked=false;
		}
		}
		checkflag = "false";
	}

	}
	function confirmDel(field,msg)
	{
		count=0;
		for (i = 0; i < field.length; i++) {
		if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
		{
		count++;
		}
		}
		
		if(count == 0)
		{
			alert("Select any one record to delete!");
			return false;
		}
		else
		{
			return confirm(msg);
		}
	}
</script>




<div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
         <div class="collapse navbar-collapse" style="background-color: #ecf0f1; padding-right: 50px;">            
            <ul class="nav navbar-nav navbar-right">                	
             	<a href="admin.php" class="btn btn-success btn-fill pull-center"><strong>Home</strong></a>
             	<a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center"><strong>Logout</strong></a>
            </ul>
         </div>
      </nav>

  		<div id="page-wrapper">
        <div class="panel panel-default">
                  <div class="panel-heading text-center">
                  	<h3>View All Manager Details</h3>
                     
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                           <tr>
                              <th>Officer Name </th>
                              <th>Address </th>
                              <th>Email </th>
                              <th>Phone Numner </th>
                              <th> Office Name</th>
                              									 	 
                           </tr>
                       	</thead>

			  					<tbody align="center">
				  					<?php	while($data = dbFetchAssoc($result)){	extract($data); ?>

				      				<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">	
				      					  <td class="gentxt"><?php echo $officer_name; ?></td>
									      <td class="gentxt"><?php echo $address; ?></td>
									      <td class="gentxt"><?php echo $email; ?></td>
									      <td class="gentxt"><?php echo $ph_no; ?></td>
									      <td class="gentxt"><?php echo $office; ?></td>
									   </tr>
									<?php } ?>
			  					</tbody>            	
		            	</table>
		         	</div>
		      	</div>
		     
		</div>
	</div>

<?php require_once('footer.php'); ?>
