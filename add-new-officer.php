<?php
session_start();
require_once('database.php');
require_once('library.php');
include("header.php");

isUser();
$sql = "SELECT DISTINCT(off_name)		FROM tbl_offices";
$result = dbQuery($sql);	

?>

<script type="text/JavaScript">
  <!--
  function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
      d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
  }

  function MM_validateForm() { //v4.0
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
  }
  //-->
</script>



<div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
         <div class="collapse navbar-collapse" style="background-color: #ecf0f1; adding-right: 50px;">
           
            <ul class="nav navbar-nav navbar-right">                  
              <a href="admin.php" class="btn btn-success btn-fill pull-center"><strong>Home</strong></a>
              <a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center"><strong>Logout</strong></a>
            </ul>
         </div>
      </nav> 

      <div>

         <h4 class="text-center" style="background-color: #dfe6e9;">
            <span>Add New Office Manager</span>
         </h4>  
 
         <form action="process.php?action=add-manager" method="post" name="frmShipment" >
            <table class="Partext1" cellpadding="2" cellspacing="2" align="center">
          <tbody>
            <tr>
               <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="center" style="background-color: #dfe6e9"><strong><h4>Office Manager  info </h4></strong></div>
               </div></td>
            </tr>
          <tr>
            <td class="TrackMediumBlue" align="right" width="138">Manager  Name   :</td>
            <td width="13">&nbsp;</td>
            <td width="477">
			<input name="ManagerName" type="TEXT" id="ManagerName" size="40"  maxlength="100">                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Password   :</td>
            <td>&nbsp;</td>
            <td><input name="Password" id="Password" maxlength="20" size="40" type="password"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Address" cols="27" rows="2" id="Address"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Email :</td>
            <td>&nbsp;</td>
            <td><input name="Email" id="Email" maxlength="40" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone No. : </td>
            <td>&nbsp;</td>
            <td><input name="PhoneNo" id="PhoneNo" maxlength="30" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Office Name : </td>
            <td>&nbsp;</td>
            <td>
			<select name="OfficeName">
			<?php 
			while($data = dbFetchAssoc($result)){
			?>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
			</select>
			</td>
          </tr>
          
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input class="btn btn-success btn-fill pull-center" name="Submit" type="submit" onClick="MM_validateForm('ManagerName','','R','Password','','R','Email','','RisEmail','PhoneNo','','R','Address','','R');return document.MM_returnValue" value="Add New Office Manager"></td>
          </tr>
        </tbody></table>
</form>/
</div>
</div>

<?php require_once('footer.php'); ?>