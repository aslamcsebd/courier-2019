<?php
session_start();
include("header.php");
?>

<script type="text/JavaScript">
  <!--
  function MM_openBrWindow(theURL,winName,features) { //v2.0
    window.open(theURL,winName,features);
  }
  //-->
</script>

<style type="text/css">
  <!--
  #Layer1 {
    position:absolute;
    left:178px;
    top:347px;
    width:632px;
    height:89px;
    z-index:1;
  }
  .style1 {
    color: #008000;
    font-weight: bold;
  }
  -->
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

        <h4 class="text-center" style="background-color: #dfe6e9;">
          <span>Tracking Shipment</span>
        </h4>

        <table align="center" width="35%" style="border: none;">
            <tbody>
              <tr>
                  <td>
                    <div onClick="MM_openBrWindow('printview1.php?id=2233','pv','scrollbars=yes,resizable=yes,width=600,height=500')" align="right"><a href="#" class="gentxt">Printable Version </a>
                    </div>
                  </td>
                </tr>
              </tbody>
          </table>
          
        
		    <table align="center">
            <tbody>
              <tr>
                <td bgcolor="#FEE9A9" height="27"><strong>&nbsp;Consignment No</strong> : 2233
                </td>
              </tr>
               <tr align="center">
                  <td>
                     <br>
                     <table width="100%">
                        <tbody><tr>
                          <td>
                           <table align="right" border="none">
                            <tbody><tr>
                              <td class="paratext"><em><strong>Shipper </strong></em></td>
                            </tr>
                            <tr>
                              <td class="paratext"><em>Tousif Khan</em></td>
                            </tr>
                            <tr>
                              <td class="paratext"><em>020 253623</em></td>
                            </tr>
                            <tr>
                              <td class="paratext"><em>10 metro tower, kondwa</em></td>
                            </tr>
                        </tbody>
                     </table>
                  </td>
                  <td>
                     <table align="left" border="none">
                        <tbody>
                           <tr>
                              <td class="paratext"><em><strong>Receiver</strong></em></td>
                           </tr>
                            <tr>
                              <td class="paratext"><em>Rizwan Ahmed</em></td>
                            </tr>
                            <tr>
                              <td class="paratext"><em>020 88552233</em></td>
                            </tr>
                            <tr>
                              <td class="paratext"><em>03 merta tower kondwa</em></td>
                            </tr>
                        </tbody>
                     </table>
                  </td>

               </tr>
            </tbody>
         </table><br>

         <table align="center">
            <tbody>
               <tr>
                  <td><strong>Origin</strong></td>
                  <td>XYZ</td>
                  <td><strong>Destination</strong></td>
                  <td>ABC</td>
               </tr>
                <tr>
                  <td colspan="4" bgcolor="#F0F0F0" height="1"></td>
                  </tr>
               <tr>
                  <td><strong>Pickup date/Time</strong></td>
                  <td>18/01/2011<span class="gentxt"> -
                      4                  </span></td>
                  <td><strong>Weight</strong></td>
                  <td>20 kg</td>
               </tr>
               <tr>
                  <td colspan="4" bgcolor="#F0F0F0" height="1"></td>
                  </tr>
               <tr>
                  <td><strong>Courier</strong></td>
                  <td>XYZ</td>
                  <td><strong>Status</strong></td>
                  <td><span class="style1">In Transit</span></td>
               </tr>
               <tr>
                  <td colspan="4" bgcolor="#F0F0F0" height="1"></td>
                  </tr>
                
   				<tr>
   				   <td><strong>Expected Delivery Date</strong></td>
   				   <td colspan="3">25/01/2011</td>
   				   </tr>
   				<tr>
                  <td colspan="4" bgcolor="#F0F0F0" height="1"></td>
               </tr>
				</tbody>
         </table>         
                <br>
      </td>
   </tr>
</tbody>
</table>

		 
		  <!-- <table class="blackbox" cellpadding="2" cellspacing="0" align="center" width="90%">
            <tbody><tr>
              <td bgcolor="#D9F2FF" align="right"><div align="center">Date</div></td>
              <td bgcolor="#D9F2FF" align="right"><div align="center">Time </div></td>
              <td bgcolor="#D9F2FF"><div align="center">Location </div></td>
              <td bgcolor="#D9F2FF"><div align="center">Status</div></td>
              <td bgcolor="#D9F2FF"><div align="center">Comments</div></td>
            </tr>
                                    </tbody></table>
	  
		  
          <table cellpadding="2" cellspacing="2" align="center" width="90%">
            <tbody><tr>
              <td bgcolor="#FFFFFF" align="right" width="29%"><div align="center"></div></td>
              <td bgcolor="#FFFFFF" align="right" width="20%"><div align="center"></div></td>
              <td bgcolor="#FFFFFF" width="28%"><div align="center"></div></td>
              <td bgcolor="#FFFFFF" width="23%"><div align="center"></div></td>
            </tr>
          </tbody></table></td>
        </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr> -->

</div>
</div>
<?php require_once('footer.php'); ?>            
