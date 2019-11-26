<?php
session_start();
include("header.php");
?>


<script language="javascript">
  function validate()
    {
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
         <div class="collapse navbar-collapse" style="background-color: #ecf0f1; padding-right: 50px;">
           
            <ul class="nav navbar-nav navbar-right">                  
              <a href="admin.php" class="btn btn-success btn-fill pull-center"><strong>Home</strong></a>
              <a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center"><strong>Logout</strong></a>
            </ul>
         </div>
      </nav>

      <div style="background-color: #dfe6e9; margin: 100px 0 0 -15px; padding: 20px 0px; text-align: center;"> 
               
         <h3 style="font-family:Verdana; font-size:16px;">
            <label>Consignment Number 
            Courier status changed to Delivered. <a href="courier-list.php">Click Here</a> To View The status
            </label>               
         </h3>
      </div>
   </div>
<?php require_once('footer.php'); ?>            
