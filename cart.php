<?php error_reporting(0); ?>
<?php session_start(); $cart = $_SESSION['cart']; ?>
<?php include("define.php"); ?>
<?php include("model/database.php"); ?>
<?php include("header.php");


	  ?>
<body
        class="shoppage sidebar-text-alignment-left sidebar-position-left sidebar-fixed mobile-site-title-style-auto blog-sidebar-right gallery-style-fit enable-gallery-thumbnails initial-gallery-view-thumbnails homepage-gallery-view-inherit thumbnail-aspect-ratio-auto gallery-controls-simple social-icon-style-normal hide-social-icons show-category-navigation event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label event-list-show-cats event-list-date event-list-time event-list-address event-icalgcal-links event-excerpts event-item-back-link product-list-titles-under product-list-alignment-center product-item-size-23-standard-vertical product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-56dfb5327c65e4cd0ba65afd collection-type-page collection-layout-default mobile-style-available"
        id="collection-56dfb5327c65e4cd0ba65afd"
    >
        <div id="canvasWrapper">
            <div id="canvas">
<?php include("menu.php");?>
                <div id="pageWrapper" class="hfeed" role="main">
                    <!-- CATEGORY NAV -->

                    <section id="page" style="min-height: 238px;">
                        <div class="main-content cartc" data-content-field="main-content" id="yui_3_17_2_1_1603987050835_87">
                            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1591858718492" id="page-56dfb5327c65e4cd0ba65afd">
                                <div class="row sqs-row" id="yui_3_17_2_1_1603987050835_86">
								<h3>SHOPPING CART</h3>
                                <?php if(count($cart) > 0){ ?>
								<div class="col sqs-col-12 span-12">   
                                            <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
															<form action="checkout.php" method="post"/>
			<?php

			$total = 0;
			$a = new DB();
			
	foreach ($cart as $key => $value) {


					$result1 = $a->cartproductbyp($key);
						if ($result1->num_rows > 0) {
						while($row = $result1->fetch_assoc()) {
						?>
						<?php $images =explode(",",$row['images']);
						if($row['dprice'] == 0){
						    $price = $row['price'];    
						}else{
						    $price = $row['dprice'];
						}
						
						?>
						<tr id="tr<?php echo $row['pid']; ?>" class="trall">
							 <td class="product_remove"><a class="remove" href="delcart.php?id=<?php echo $key; ?>">X</a></td>
								<td class="product_thumb"><a href="#"><img src="<?php echo $siteurl."images/product/".$images[0]; ?>" alt=""></a></td>
								<td class="product_name"><a href="#"><?php echo $row['productname']; ?></a></td>
								<td class="product-price">$ <?php echo $price; ?> USD</td>
								<td class="product_quantity"><label><?php echo $value['quantity']; ?></td>
								<td class="product_total">$ <?php echo $price; ?> USD</td>
						</tr>
            <?php
						$total = $total + ($price*$value['quantity']);
							}
						}
					}
					?>



                            </tbody>
                        </table>
                            </div>
                            <!--<div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>-->
                        </div>
                     </div>
					 </div>
					 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row sqs-row">
                        <div class="col sqs-col-6 span-6">
                            <div class="coupon_code left">
                                <h3></h3>
                                <div class="coupon_inner">
                                    <p></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col sqs-col-6 span-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount">$ <?php echo $total; ?> USD</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Shipping</p>
                                       <p class="cart_amount"><span>Flat Rate:</span>$ 14.99 USD</p>
                                   </div>
                                   
                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount">$ <?php echo $total + 14.99; ?> USD</p>
                                   </div>
                                   <div class="checkout_btn">
									<a href="checkout.php">Proceed to Checkout</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
                    
                                 </form>       
								<?php }else{ ?>
								<p>You have nothing in your shopping cart. <a href="shop.php">Continue Shopping</a></p>
								<?php } ?>								
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        
    </body>
<?php include("footer.php"); ?>