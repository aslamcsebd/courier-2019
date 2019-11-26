<?php
session_start();
require_once('database.php');
require_once('library.php');
include("header.php");

isUser();
?>

<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>

<script language="JavaScript">
  <!--
  function Check_form() {


  // Check Password 
  		if ( signupForm.txtp.value == "" )
  		{
  			alert( "Kindly enter a password." );
  			signupForm.txtp.focus( );
  			return false;
  		}

  		if ( signupForm.txtp.value.length < 4 )
  		{
  			alert( "Password must be atleast 4 characters." );	
  			signupForm.txtp.focus( );
  			return false;
  		}


  		if ( signupForm.txtp.value.length > 20 )
  		{
  		alert( "Password must be Max 20 characters." );	
  		signupForm.txtp.focus( );
  		return false;
  		}

  		if ( signupForm.txtcp.value == "" )
  		{
  			alert( "Kindly enter a confirm password." );
  			signupForm.txtcp.focus( );
  			return false;
  		}

  		if ( signupForm. txtp.value != signupForm. txtcp.value )
  		{
  			alert( "Password and Confirm password must be same." );
  			signupForm.txtp.value = "";
  			signupForm.txtcp.value = "";

  			signupForm.txtp.focus( );

  			return false;
  		}

  		tmpPass = signupForm.txtp.value;

  		goodPasswd = 1;

  		for( var idx=0; idx< tmpPass.length; idx++ )
  		{
  			ch = tmpPass.charAt(idx);

  			if( !((ch>='a') && (ch<='z')) && !((ch>='A') && (ch<='Z')) && !((ch>=0) && (ch <=9)) )
  			{
  				goodPasswd = 0;
  				break;
  			}
  		}

  		if( goodPasswd ==0 )
  		{
  			alert( "Password must contains only letters and digits." );
  			signupForm. txtp.value="";
  			signupForm. txtcp.value="";
  			signupForm. txtp.focus();
  			return false;
  		}

  	

  return true;
  }

  //-->
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

      <div>

        <h4 class="text-center" style="background-color: #dfe6e9;">
          <span>Change Admin Password</span>
        </h4>

         <form name="signupForm" id="signupForm" method="post" action="process.php?action=change-pass" onSubmit="return Check_form();"> 
            <table align="center" width="30%">
            
               <tbody>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td ><div align="right">New Password  : </div></td>
                    <td ><div align="left">
                        <input name="txtp" id="txtp" type="password">
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="right">Confirm Password : </div></td>
                    <td><div align="left">
                        <input name="txtcp" id="txtcp" type="password">
                    </div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left">
                        <input class="btn btn-success btn-fill pull-center" style="padding: 5px;" name="Submit" value="Submit" type="submit">
                    </div></td>
                  </tr>
               </tbody>
            </table>
         </form>

<?php require_once('footer.php'); ?>            
