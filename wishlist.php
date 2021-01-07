<?php include("define.php"); ?>
<?php include("model/database.php"); ?>
<?php
session_start();
if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {
header ("Location: login.php");
}
else
{
$email = $_SESSION['email'];
$uid = $_SESSION['id'];
}
?>
<?php include("header.php"); ?>
<body>
<?php include("menu.php"); ?>
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


     <!--wishlist area start -->
    <div class="wishlist_area mt-30">
                <div class="container">
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc wishlist">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product_quantity">Stock Status</th>
                                                    <th class="product_total">Add To Cart</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                              $a = new DB();
                              $result1 = $a->wishlistuid($uid);
                              if ($result1->num_rows > 0) {
                                while($row = $result1->fetch_assoc()) {
                                  $images =explode(",",$row['images']); ?>
                                                <tr>
                                                   <td class="product_remove"><a href="delwishlist.php?id=<?php echo $row['id']; ?>">X</a></td>
                                                    <td class="product_thumb"><img src="<?php echo $siteurl."images/product/".$images[0]; ?>" alt=""></td>
                                                    <td class="product_name"><a href="single.php?pid=<?php echo $row['pid']; ?>" ><?php echo $row['productname']; ?></a></td>
                                                    <td class="product-price">Rs <?php echo $row['dprice']; ?></td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="addtocart.php?id=<?php echo $row['pid']; ?>">Add To Cart</a></td>
                                                </tr>
                                              <?php } } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                             </div>
                         </div>

                    </form>
                    <div class="row">
                        <div class="col-12">
                             <div class="wishlist_share">
                                <h4>Share on:</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
     <!--wishlist area end -->

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

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container contact_us">
                            <div class="footer_logo">
                                <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="footer_contact">
                                <p>We are a team of designers and developers that
                                    create high quality Magento, Prestashop, Opencart...</p>
                                <p><span>Address</span> 4710-4890 Breckinridge St, UK Burlington, VT 05401</p>
                                <p><span>Need Help?</span>Call: <a href="tel:1-800-345-6789">1-800-345-6789</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="privacy-policy.html">privacy policy</a></li><li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Gift Certificates</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Extras</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <div class="widgets_container">
                            <h3>Newsletter Subscribe</h3>
                            <p>We’ll never share your email address with a third-party.</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
               <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2019 <a href="#">Autima</a>  All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <a href="#"><img src="assets/img/icon/payment.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>


<!-- Mirrored from demo.hasthemes.com/autima-preview/autima/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 06:31:57 GMT -->
</html>
