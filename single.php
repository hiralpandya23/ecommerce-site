<?php session_start();?><?php include("define.php"); ?>
<?php include("model/database.php"); ?>
<?php include("header.php"); ?>
<body
        class="shoppage inner sidebar-text-alignment-left sidebar-position-left sidebar-fixed mobile-site-title-style-auto blog-sidebar-right gallery-style-fit enable-gallery-thumbnails initial-gallery-view-thumbnails homepage-gallery-view-inherit thumbnail-aspect-ratio-auto gallery-controls-simple social-icon-style-normal hide-social-icons show-category-navigation event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label event-list-show-cats event-list-date event-list-time event-list-address event-icalgcal-links event-excerpts event-item-back-link product-list-titles-under product-list-alignment-center product-item-size-23-standard-vertical product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-56dfb5327c65e4cd0ba65afd collection-type-page collection-layout-default mobile-style-available"
        id="collection-56dfb5327c65e4cd0ba65afd"
    >
    <style type="text/css">
    	.disabled {
    		pointer-events: none;
    		opacity: 0.7;
    	}
    </style>
        <div id="canvasWrapper">
            <div id="canvas">
<?php include("menu.php");?>
                <div id="pageWrapper" class="hfeed" role="main">
                    <!-- CATEGORY NAV -->

                    <section id="page" style="min-height: 238px;">
                        <div class="main-content" data-content-field="main-content" id="yui_3_17_2_1_1603987050835_87">
                            <a href="cart.php" class="cartbutton" >CART (<?php if(isset($_SESSION['cart'])){
                                  $cart = $_SESSION['cart']; ?><?php
								echo count($cart);}else{ echo 0;} ?></span>)</a>
                            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1591858718492" id="page-56dfb5327c65e4cd0ba65afd">
                                
                                <div class="row sqs-row" id="yui_3_17_2_1_1603987050835_86">
                                    
									<?php
                  		$a = new DB();
                  		$result1 = $a->productbyp($_GET['pid']);
                  		if ($result1->num_rows > 0) {
                  			$row = $result1->fetch_assoc();
                  			// while($row = $result1->fetch_assoc()) {
                  			?>
							<form action="#" class="single-product">
							 <div class="col sqs-col-6 span-6 mobile-sec">
								<?php $images =explode(",",$row['images']); ?>
								<section class="product-item-details">
									<h1 class="product-details-title mb80" ><?php echo $row['productname']; ?></h1>
									
									<div class="product-details-excerpt mb80" >
										<p class="" style="white-space:pre-wrap;line-height: 30px;"><?php echo $row['longdescription']; ?></p>
									</div>
									<div class="product-price mb80">
									    <?php if($row['dprice'] != 0){ ?> 
										<span class="visually-hidden v6-visually-hidden">Sale Price:</span>
										<span class="sqs-money-native"><?php echo $row['dprice']; ?> USD</span>
										<span class="visually-hidden v6-visually-hidden" >Original Price:</span>
										<span class="original-price">
											<span class="sqs-money-native" style="text-decoration: line-through;"><?php echo $row['price']; ?> USD</span>
										</span>
										<?php }else{ ?>
										<span class="visually-hidden v6-visually-hidden">Original Price:</span>
										<span class="original-price">
											<span class="sqs-money-native"><?php echo $row['price']; ?> USD</span>
										</span>
										
										<?php } ?>
									</div>
										<?php if($row['stock'] == 0){ ?>
										<p>SOLD OUT</p>
										<?php }else{ ?>
										<div class="product-quantity-input mb80">
											<div class="quantity-label">Quantity:</div>
											<input size="4" max="<?php echo $row['stock']; ?>" min="1" value="1" type="number" step="1" id="quantity_count">
										</div>
										<p class="error er-msg " style="font-size: 16px;"></p>
										<div class="sqs-add-to-cart-button-wrapper mb80" style="visibility: visible;">
											<div class="sqs-add-to-cart-button sqs-suppress-edit-mode" role="button" >
												<a class="sqs-add-to-cart-button-inner" href="addtocart.php?id=<?php echo $row['pid']; ?>" title="add to cart">Add to cart</a>
											</div>
										</div>
										<?php } ?>
									
								</section>
							</div>
							<div class="col sqs-col-6 span-6 mobile-first">
								<?php $images =explode(",",$row['images']); ?>
								<div class="gproduct-image">
								<img src="<?php echo $siteurl."images/product/".$images[0]; ?>" alt="image-1" class="gimag">
								</div>
								<?php if($images[1] != "no file"){ ?>
								<div class="gproduct-image">
								<img src="<?php echo $siteurl."images/product/".$images[1]; ?>" alt="image-2" class="gimag">
								</div>
								<?php } ?>
								<?php if($images[2] != "no file"){ ?>
								<div class="gproduct-image">
								<img src="<?php echo $siteurl."images/product/".$images[2]; ?>" alt="image-3" class="gimag">
								</div>
								<?php } ?>
								<?php if($images[3] != "no file"){ ?>
								<div class="gproduct-image">
								<img src="<?php echo $siteurl."images/product/".$images[3]; ?>" alt="image-4" class="gimag">
								</div>
								<?php } ?>
								<?php if($images[4] != "no file"){ ?>
								<div class="gproduct-image">
								<img src="<?php echo $siteurl."images/product/".$images[4]; ?>" alt="image-5" class="gimag">
								</div>
								<?php } ?>
									
							</div>
							<?php
                  			// }
                  		} else { ?>
						<div class="col sqs-col-12 span-12">
						<div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-yui_3_17_2_1_1588750092241_52369">
                                            <div class="sqs-block-content"><p class="" style="white-space: pre-wrap;"><?php echo "No Product";?></p></div>
                                        </div>
										</div>
						<?php
                  		}
                  	?>
                                        
                                        
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    	$('#quantity_count').on('keyup keypress blur change', function(){
    		var qnt = parseInt('<?php echo $row['stock']; ?>');
    			$('.er-msg').text('');
    		if ($(this).val() > qnt) {
    			$('.er-msg').text('Only '+qnt+' product available');
    			$('.sqs-add-to-cart-button-inner').addClass('disabled');
    		} else {
    			$('.er-msg').text('');
    			$('.sqs-add-to-cart-button-inner').removeClass('disabled');
    		}
    	});
    </script>
<?php include("footer.php"); ?>