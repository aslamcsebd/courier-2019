<?php
  session_start();
  include("header.php");
?>

<script language="javascript">
   function validate()  {
    if (form.Consignment.value == "" )
   		 {
   			alert("Consignment No is required.");
   			form.track.focus( );
   			return false;
   		}
   	}
</script>

  
   <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
         <div class="collapse navbar-collapse" style="background-color: #ecf0f1;">            
            <ul class="nav navbar-nav navbar-right">                 
               <a href="admin.php" class="btn btn-success btn-fill pull-center"><strong>Home</strong></a>
               <a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center"><strong>Logout</strong></a>
            </ul>
         </div>
      </nav>  

      <div class="text-center" style="background-color: #dfe6e9; margin: 150px 0 0 -15px; padding: 20px 100px; text-align: center;"> 
         <div class="alert alert-success text-center" >
           <h4><strong>Success!</strong></h4> <h3>Courier is added successfully.</h3>
         </div>        
      </div>
   </div>

<?php include("footer.php"); ?>