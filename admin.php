<?php
session_start();
require_once('library.php');
include("header.php");
isUser();
?>

 <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><strong>Courier Management System </strong></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="padding-right: 50px;">
                       <!--  <a href="add-courier.php" class="btn btn-primary btn-fill pull-center REDLink"><strong>Add Shipment</strong></a> -->
                        <a href="courier-list.php" class="btn btn-success btn-fill pull-center REDLink"><strong>List Shipment</strong></a>
                        <!-- <a href="report.php" class="btn btn-info btn-fill pull-center REDLink"><strong>Report</strong></a> -->
                        <a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center REDLink"><strong>Logout</strong></a>
                    </ul>
                </div>
            </div>
        </nav>       

</div>

 

<?php include("footer.php"); ?>
