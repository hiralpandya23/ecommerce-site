<?php
session_start();
include("define.php"); ?>
 <?php include("model/database.php"); ?>

     <?php include("header.php"); ?>
     <body>
       <?php include("menu.php"); ?>
   <!-- Page Title-->
   <div class="breadcrumbs_area">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="breadcrumb_content">
                       <ul>
                           <li><a href="index.php">home</a></li>
                           <li>Sucessfully</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- customer login start -->
   <div class="customer_login mt-32">
       <div class="container">
           <div class="row">
              <!--login area start-->
               <div class="col-lg-6 col-md-6">
                   <div class="account_form">
                       <h2>Register</h2>
                       <p>Register sucessfully Done</p>
                    </div>
               </div>
               <!--login area start-->
           </div>
       </div>
   </div>
   <!-- customer login end -->

    <!--call to action start-->
   <section class="call_to_action">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="call_action_inner">
                       <div class="call_text">
                           <h3>We Have <span>Recommendations</span>  for You</h3>
                           <p>Take 30% off when you spend $150 or more with code Autima11</p>
                       </div>
                       <div class="discover_now">
                           <a href="#">discover now</a>
                       </div>
                       <div class="link_follow">
                           <ul>
                               <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                               <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                               <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                               <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--call to action end-->

   <?php include("footer.php"); ?>
