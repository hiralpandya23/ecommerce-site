<?php session_start();?><?php include("define.php"); ?>

<?php include("model/database.php"); ?>

<?php include("header.php"); ?>

<body

        class="shoppage sidebar-text-alignment-left sidebar-position-left sidebar-fixed mobile-site-title-style-auto blog-sidebar-right gallery-style-fit enable-gallery-thumbnails initial-gallery-view-thumbnails homepage-gallery-view-inherit thumbnail-aspect-ratio-auto gallery-controls-simple social-icon-style-normal hide-social-icons show-category-navigation event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label event-list-show-cats event-list-date event-list-time event-list-address event-icalgcal-links event-excerpts event-item-back-link product-list-titles-under product-list-alignment-center product-item-size-23-standard-vertical product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-56dfb5327c65e4cd0ba65afd collection-type-page collection-layout-default mobile-style-available"

        id="collection-56dfb5327c65e4cd0ba65afd"

    >
    <style type="text/css">
    	.product-meta {
    		text-align:left;
    	}
    	
		.shoptitle {
			text-align: center;
		}
		.product-item .product-image {
		    width: 100% ! important;
		   
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

							<h2 class="shoptitle" ><center> LIMITED EDITION PRINTS</center></h2>

                            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1591858718492" id="page-56dfb5327c65e4cd0ba65afd">

                                

                                <div class="row sqs-row" id="yui_3_17_2_1_1603987050835_86">

                                   

									<?php

                  		$a = new DB();

                  		$result1 = $a->productbyc();

                  		if ($result1->num_rows > 0) {

                  			while($row = $result1->fetch_assoc()) {

                  			?>

							 <div class="col sqs-col-5 span-5">

							 <div class="product-item"><?php $images =explode(",",$row['images']); ?>

								<a href="single.php?pid=<?php echo $row['pid']; ?>"  class="product-item-link"></a>

								<figure class="product-outer-image-wrapper">
									<?php 
									if ($row['stock'] < 1) {
										?>
										<lable style=" position: absolute;  padding: 2px 10px; background: #fff;">SOLD OUT</lable>
										<?php
									}
									?>
									<div class="product-innerImageWrapper sqs-pinterest-image">

										<img class="product-image"  alt="Ego Death"

										src="<?php echo $siteurl."images/product/".$images[0]; ?>">

									</div>

									<div class="product-status-wrapper sqs-product-mark-wrapper">

									<?php if($row['stock'] == 0){ ?>

									<div class="product-mark sold-out">sold out</div>	

									<?php }else{ ?>

									<?php if($row['dprice'] != 0){ ?>

										<div class="product-mark sale">sale</div>

										<?php } ?>

									<?php } ?>

									</div>

								

								<section class="product-overlay">

									<div class="product-meta">

										<h1 class="product-title"><?php echo $row['productname']; ?></h1>

										<div class="product-price">

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

										

									</div>

								</section>
								</figure>
							</div>

							</div>

							<?php

                  			}

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

<?php include("footer.php"); ?>

