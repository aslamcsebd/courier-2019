<?php
session_start();
require_once('database.php');
require_once('library.php');
include("header.php");
isUser();
$cid= (int)$_GET['cid'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);		
$result_1 = dbQuery($sql_1);
while($data = dbFetchAssoc($result)) {
extract($data);
?>

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

        <h4 class="text-center" style="background-color: #dfe6e9;">
          <span>Edit Shipment </span>
        </h4>

        <table align="center"  width="60%">
           <tbody align="center">
              <tr>
                 <td>    
                     <table>

                         <tbody><tr>

                           <td ><div align="left" class="style3">Shipper Name : </div></td>

                           <td ><div align="left" class="style3">

                             <?php echo $ship_name; ?>
                           </div></td>

                         </tr>

                         <tr>

                           <td><div align="left" class="style3">Shipper Phone : </div></td>

                           <td><div align="left" class="style3">

                             <?php echo $phone; ?>
                           </div></td>
                         </tr>

                         <tr>

                           <td><div align="left" class="style3">Shipper Address : </div></td>

                           <td><div align="left" class="style3">
                  			<?php echo $s_add; ?>
                  			</div></td>
                            </tr>
                           </tbody>
                     </table>
                  </td>
                 <td> 
                     <table>

                         <tbody><tr>

                           <td class="style3"><div align="left">Receiver Name : </div></td>

                           <td class="style3"><div align="left"><?php echo $rev_name; ?></div></td>

                         </tr>

                         <tr>

                           <td class="style3"><div align="left">Receiver Phone : </div></td>

                           <td class="style3"><div align="left">
               			<?php echo $r_phone; ?>
                           </div></td>
                         </tr>

                         <tr>

                           <td class="style3"><div align="left">Receiver Address : </div></td>

                           <td class="style3"><div align="left">
               			<?php echo $r_add; ?>
                           </div></td>
                         </tr>
                       </tbody>
                     </table>
                  </td>
              </tr>
           </tbody>
        </table>
        <br>
        <table align="center"  width="60%">
           <tbody>   
             <tr> 

               <td class="style3" bgcolor="#FFFFFF" align="right" >Consignment No  : </td> 

               <td class="style3" bgcolor="#FFFFFF"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td> 
             </tr> 

             <tr>

               <td class="style3" bgcolor="#FFFFFF" align="right">Ship Type  :</td>

               <td class="style3" bgcolor="#FFFFFF"><?php echo $type; ?>&nbsp;</td>
             </tr>

             <tr>

               <td class="style3" bgcolor="#FFFFFF" align="right">Weight :</td>

               <td class="style3" bgcolor="#FFFFFF"><?php echo $weight; ?>&nbsp;kg</td>
             </tr>

             <tr>

               <td class="style3" bgcolor="#F3F3F3" align="right">Invoice no  :</td>

               <td class="style3" bgcolor="#FFFFFF"><?php echo $invice_no; ?>&nbsp;</td>
             </tr>

             <tr>

               <td class="style3" bgcolor="#F3F3F3" align="right">Booking Mode :</td>

               <td class="style3" bgcolor="#FFFFFF"><?php echo $book_mode; ?>&nbsp;</td>
             </tr>

             <tr>

               <td class="style3" bgcolor="#F3F3F3" align="right">Total freight : </td>

               <td class="style3" bgcolor="#FFFFFF"><?php echo $freight; ?>&nbsp;Rs.</td>
             </tr>

             <tr>

               <td class="style3" bgcolor="#F3F3F3" align="right">Mode : </td>

               <td class="style3" bgcolor="#FFFFFF"><?php echo $mode; ?></td>
             </tr> 

             <tr> 

               <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Date/Time  :</td> 

               <td class="style3" bgcolor="#FFFFFF">

                 <?php echo $pick_date; ?> -<span class="gentxt">
         <?php echo $pick_time; ?>
                 </span> </td> 
             </tr> 

             <tr> 

               <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td> 

               <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $status; ?></td> 
             </tr> 

     

             <tr> 

               <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Comments :</td> 

               <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $comments; ?></td> 
             </tr>   
         </tbody>

      </table> 
      <br>


  <form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment"> 

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="60%">

    <tbody>
      <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div class="Partext1" align="center"><strong>UPDATE STATUS </strong>

</div></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" idth="16%">New Location:</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

        <select name="OfficeName">
			<?php 
			while($data = dbFetchAssoc($result_1)){
			?>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
	</select>      </td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">New Status: </td>

      <td class="Partext1" bgcolor="#FFFFFF" idth="26%">

	  






<select name="status">

<option value="In Transit">In Transit</option>

<option value="Landed">Landed</option>

<option value="Delayed">Delayed</option>

<option value="Completed">Completed</option>
<option value="Onhold">Onhold</option>
</select>

<br></td>

      <td class="Partext1" bgcolor="#FFFFFF" width="58%"><div align="center">
	  <a href="process.php?action=delivered&cid=<?php echo $cid; ?>">Marked this shipment as to be <span class="style1">DELIVERED </span></a><span class="style1"></span></div></td>
    </tr>

    <tr>

      <td bgcolor="#FFFFFF" align="right"><span class="Partext1">Comments:</span></td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
	  <textarea name="comments" cols="40" rows="3" id="comments"></textarea></td>
    </tr>

    

    <tr>

      <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

       <input name="submit" value="Submit" type="submit">

          <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">

          <input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>" type="hidden">      </td>
    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div align="center">


      </div></td>
      </tr>
  </tbody></table>

  <br>

  </form> 


<?php } 
?>
</div>
<?php require_once('footer.php'); ?>            
