<?php
session_start();
require_once('database.php');
require_once('library.php');
include("header.php");

isUser();

$cons= $_POST['Consignment'];


?>
<style type="text/css">
   .color{
      background-color: #dfe6e9;
   }
</style>

  
   <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
         <div class="collapse navbar-collapse" style="background-color: #ecf0f1; padding-right: 50px;">            
            <ul class="nav navbar-nav navbar-right">                 
               <a href="admin.php" class="btn btn-success btn-fill pull-center"><strong>Home</strong></a>
               <a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center"><strong>Logout</strong></a>
            </ul>
         </div>
      </nav>
      <div>
         <?php 
            $sql = "SELECT * FROM tbl_courier WHERE cons_no = '$cons'";
            $result = dbQuery($sql);
            $no = dbNumRows($result);
            if($no == 1){
               while($data = dbFetchAssoc($result)) {
               extract($data);
         ?>       
         <table class="table table-bordered"  style="border: 3px solid #00b894;">
            <tbody style="padding: 50px; background-color: reen;"> 
               <div style="background-color:#b2bec3; text-align: center;">
                  <h4 >Edit Shipment</h4>               
               </div>

               <tr> 
                  <td colspan="2">
                     <div class="row">
                        <div class="col-md-6" align="right">Shipper Name  :</div>
                        <div class="col-md-6" align="left"> <?php echo $ship_name; ?></div>
                     </div> 

                     <div class="row">
                        <div class="col-md-6" align="right">Shipper Phone  :</div>
                        <div class="col-md-6" align="left"> <?php echo $phone; ?></div>
                     </div> 
                     <div class="row">
                        <div class="col-md-6" align="right">  Shipper Address  :</div>
                        <div class="col-md-6" align="left"><?php echo $s_add; ?></div>
                     </div>  
                  </td>

                  <td colspan="2">
                     <div class="row">
                        <div class="col-md-6" align="right">Receiver Name  :</div>
                        <div class="col-md-6" align="left"> <?php echo $rev_name; ?></div>
                     </div> 

                     <div class="row">
                        <div class="col-md-6" align="right">Receiver Phone  :</div>
                        <div class="col-md-6" align="left"> <?php echo $r_phone; ?></div>
                     </div> 
                     <div class="row">
                        <div class="col-md-6" align="right">Receiver Address  :</div>
                        <div class="col-md-6" align="left"> <?php echo $r_add; ?></div>
                     </div>  
                  </td>
               </tr>               

               <tr>
                  <td align="right" colspan="2"> Consignment No  :</td>
                  <td align="left" colspan="2"> <?php echo $cons_no; ?></td>
               </tr>

               <tr>
                  <td align="right" colspan="2"> Ship Type  :</td>
                  <td align="left" colspan="2"> <?php echo $type; ?></td>
               </tr>

               <tr>
                  <td align="right" colspan="2"> Weight  :</td>
                  <td align="left" colspan="2"> <?php echo $weight; ?></td>
               </tr>

               <tr>
                  <td class="color" align="right" colspan="2"> Invoice no  :</td>
                  <td align="left" colspan="2"> <?php echo $invice_no; ?></td>
               </tr> 

               <tr>
                  <td class="color" align="right" colspan="2"> Booking Mode   :</td>
                  <td align="left" colspan="2"> <?php echo $book_mode; ?></td>
               </tr> 

               <tr>
                  <td class="color" align="right" colspan="2"> Total freight :  :</td>
                  <td align="left" colspan="2"> <?php echo $freight; ?>&nbsp;Rs.</td>
               </tr> 

               <tr>
                  <td class="color" align="right" colspan="2"> Mode   :</td>
                  <td align="left" colspan="2"> <?php echo $mode; ?></td>
               </tr> 

               <tr>
                  <td align="right" colspan="2"> Pickup Date/Time  :</td>
                  <td align="left" colspan="2"> <?php echo $pick_date; ?> -<span class="gentxt">
                                    <?php echo $pick_time; ?>  </span>
                  </td>
               </tr> 

               <tr>
                  <td align="right" colspan="2"> Status :  :</td>
                  <td align="left" colspan="2"> &nbsp;<?php echo $status; ?></td>
               </tr> 

               <tr>
                  <td align="right" colspan="2"> Comments  :</td>
                  <td align="left" colspan="2"> &nbsp;<?php echo $comments; ?></td>
               </tr>  
            </tbody>        
         </table> 

         <?php }} else { ?>


            <div style="background-color: #dfe6e9; margin: 100px 0 0 -15px; padding: 20px 0px; text-align: center;"> 
               <h3 style="font-family:Verdana; font-size:16px;"><label>Consignment Number 
                  <font color="#FF0000"><?php echo $cons; ?></font>
                  not found. Please verify the Number.<br/><br/>
                  <a class="btn-success btn-fill pull-center" href="search-edit.php">Go Back</a> to Search Again. </label>
               </h3>
            </div>

         <?php } ?>
      </div>
   </div>  
<?php require_once('database.php'); ?>