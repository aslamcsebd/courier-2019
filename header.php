<?php require_once('head.php'); ?>
   
<div class="wrapper">
   <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">

      <div class="sidebar-wrapper">
         <div class="logo">
             <a href="#" class="simple-text">
                SHIPMENT
             </a>
         </div>

            <ul class="nav">
               <li class="">
                  <a href="add-courier.php">
                     <i class="pe-7s-graph"></i>
                     <p>Add</p>
                  </a>
               </li>
               <li>
                  <a href="courier-list.php">
                     <i class="pe-7s-plus"></i>
                     <p>Update</p>
                  </a>
               </li>
                <li>
                  <a href="search-edit.php">
                     <i class="pe-7s-plus"></i>
                     <p>Search &amp; Edit</p>
                  </a>
               </li>              
            </ul>
            <hr>

         <div class="logo">
             <a href="#" class="simple-text">
                REPORTS
             </a>
         </div>

            <ul class="nav">
               <li class="">
                  <a href="delivered-list.php">
                     <i class="pe-7s-graph"></i>
                     <p>Delivered</p>
                  </a>
               </li>
                <li>
                  <a href="datewise-list.php">
                     <i class="pe-7s-plus"></i>
                     <p>Datewise</p>
                  </a>
               </li>             
              
            </ul>
            <hr>        

         <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') { ?>

         <div class="logo">
            <a href="#" class="simple-text">
               Admin Menu
            </a>
         </div>

            <ul class="nav">
               <li class="">
                  <a href="offices-list.php">
                     <i class="pe-7s-graph"></i>
                     <p>Office Details</p>
                  </a>
               </li>

               <li>
                  <a href="add-office.php">
                     <i class="pe-7s-plus"></i>
                     <p>Add New Office</p>
                  </a>
               </li>
               <li>
                  <a href="manager-list.php">
                     <i class="pe-7s-plus"></i>
                     <p>Manager Details</p>
                  </a>
               </li>
               <li>
                  <a href="add-new-officer.php">
                     <i class="pe-7s-plus"></i>
                     <p>Add New Manager</p>
                  </a>
               </li>
            </ul>
         <?php } ?> 

      </div>
   </div>  

