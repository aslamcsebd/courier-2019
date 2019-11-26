<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
   $error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if

$sql = "SELECT DISTINCT(off_name)
      FROM tbl_offices";
$result = dbQuery($sql);
?>

<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <!--===============================================================================================-->	
   	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/bootstrap2/css/bootstrap.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
   <!--===============================================================================================-->	
   	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
   <!--===============================================================================================-->	
   	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
   <!--===============================================================================================-->
   	<link rel="stylesheet" type="text/css" href="css/util.css">
   	<link rel="stylesheet" type="text/css" href="css/main.css">
   <!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/login.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50" tyle="margin-top: -200px;">
				<span class="login100-form-title p-b-41">
					Admin Login
				</span>
				<form method="post" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="txtusername" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="txtpassword" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

               <div class=" row wrap-input100">
                  <div class="col-md-6 text-center" style="vertical-align: middle;">
                   <span class="focus-input101">Office</span>

                  </div>
                  <div class="col-md-6" style="padding: 0px;">                  
                     <select class="focus-input102" name="OfficeName">
                        <?php while($data = dbFetchAssoc($result)){?>
                           <option value="<?php echo $data['off_name']; ?>">
                              <?php echo $data['off_name']; ?>                                 
                           </option>
                        <?php }?>
                     </select>
                  </div>
               </div>


					<div class="container-login100-form-btn m-t-32">
						<button name="Submit" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
               
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>