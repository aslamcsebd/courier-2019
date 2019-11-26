<?php
session_start();
require_once('database.php');
require_once('library.php');
include("header.php");
isUser();
?>

<script language="javascript">
   function validate()
     {
    if (document.form1.track.value == "" )
          {
            alert("Consignment No is required.");
            document.form1.track.focus( );
            return false;
         }
      }
</script>

<div class="main-panel" >
   <nav class="navbar navbar-default navbar-fixed">
     <div class="collapse navbar-collapse" style="background-color: #ecf0f1; ">            
            <ul class="nav navbar-nav navbar-right" style="padding-right: 50px;">                 
               <a href="admin.php" class="btn btn-success btn-fill pull-center"><strong>Home</strong></a>
               <a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center"><strong>Logout</strong></a>
            </ul>
         </div>
      </nav>
      
      <div class="text-center" style="background-color: #dfe6e9; margin: 50px 0 0 -15px; padding: 20px 100px; text-align: center;">
            <h3>Enter Consignment Number</h3><br>
         <label>
            <h5><strong>Key in the Shipment Number to MODIFY the data. This is helpful if you have made spelling errors while adding the shipment.</strong></h5>
         </label>

            
         <form action="search-courier.php" method="post">
                  
            <label><h4> <strong>Enter Consignment number : </strong></h4></label>&nbsp;&nbsp;                
            <input name="Consignment" lass="form-control" style="height: 40px;" id="track" maxlength="50" type="text">
                        <br>                        
            <input name="Submit" class="btn btn-success btn-fill pull-center" value="Submit" type="submit" style="margin-left: 200px;">       
         </form>  
                         <br><br><br><br><br>
      </div>
</div>
<?php require_once('footer.php'); ?>            