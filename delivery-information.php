<?php include("define.php"); ?>
 <?php include("model/database.php"); ?>
 <?php include("header.php"); ?>
 <body>
   <?php include("menu.php"); ?>
     <div class="breadcrumbs_area">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="breadcrumb_content">
                         <ul>
                             <li><a href="index.php">home</a></li>
                             <li>Delivery Information</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--breadcrumbs area end-->
     <div class="privacy_policy_main_area">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                    <?php
                    $pid=9;
                    $a = new DB();
                    $result1 = $a->pagebyid($pid);
                    if ($result1->num_rows > 0) {
                      while($row = $result1->fetch_assoc()) {
                        echo $row['content'];
                      }
                    }
                    ?>
                  </div>
                </div>
         </div>
     </div>






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


     </div>
       </div>
       </div>
     <?php include("footer.php"); ?>
