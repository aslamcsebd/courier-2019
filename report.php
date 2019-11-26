<?php
session_start();
require_once('library.php');
include("header.php");
isUser();
?>

   <div class="main-panel">
         <nav class="navbar navbar-default navbar-fixed">
            <div class="collapse navbar-collapse" style="background-color: #ecf0f1;">            
               <ul class="nav navbar-nav navbar-left">
               <h3>Reports</h3>               
               </ul>
               <ul class="nav navbar-nav navbar-right" style="padding-right: 50px;">                 
                  <a href="admin.php" class="btn btn-success btn-fill pull-center"><strong>Home</strong></a>
                  <a href="process.php?action=logOut" class="btn btn-danger btn-fill pull-center"><strong>Logout</strong></a>
               </ul>
            </div>
         </nav>

         <div class="container">  
            <div class="row" style="margin-top: 100px; background-color: #ecf0f1;">
               <div class="col-md-6" >
                  <div>
                     <img src="images/12258.gif" border="0" height="50" width="50" style="margin: 40px;">
                      <a href="datewise-list.php" class="btn btn-primary btn-fill pull-center" style="font-size: 16px;">Datewise Report</a>   
                  </div>
                  <div>
                     <img src="images/12258.gif" border="0" height="50" width="50" style="margin: 40px;">
                     <a href="delivered-list.php" class="btn btn-success btn-fill pull-center" style="font-size: 16px;">Delivered Report</a>
                  </div>
               </div>

               <div class="col-md-6">
                  <img src="images/imagesform.jpg" width="120" height="120" style="margin: 80px;">
               </div>
               
            </div>


                     