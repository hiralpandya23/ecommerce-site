<?php error_reporting(0); ?>

<?php session_start();?><?php include("define.php"); ?>

<?php include("model/database.php"); ?>

<?php include("header.php"); ?>
<body

        class="shoppage sidebar-text-alignment-left sidebar-position-left sidebar-fixed mobile-site-title-style-auto blog-sidebar-right gallery-style-fit enable-gallery-thumbnails initial-gallery-view-thumbnails homepage-gallery-view-inherit thumbnail-aspect-ratio-auto gallery-controls-simple social-icon-style-normal hide-social-icons show-category-navigation event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label event-list-show-cats event-list-date event-list-time event-list-address event-icalgcal-links event-excerpts event-item-back-link product-list-titles-under product-list-alignment-center product-item-size-23-standard-vertical product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-56dfb5327c65e4cd0ba65afd collection-type-page collection-layout-default mobile-style-available"

        id="collection-56dfb5327c65e4cd0ba65afd"

    >
<!-- <body

        class="sidebar-text-alignment-left sidebar-position-left sidebar-fixed mobile-site-title-style-auto blog-sidebar-right gallery-style-fit enable-gallery-thumbnails initial-gallery-view-thumbnails homepage-gallery-view-inherit thumbnail-aspect-ratio-auto gallery-controls-simple social-icon-style-normal hide-social-icons show-category-navigation event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label event-list-show-cats event-list-date event-list-time event-list-address event-icalgcal-links event-excerpts event-item-back-link product-list-titles-under product-list-alignment-center product-item-size-23-standard-vertical product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-56dfb5327c65e4cd0ba65afd collection-type-page collection-layout-default mobile-style-available"

        id="collection-56dfb5327c65e4cd0ba65afd"

    > -->

        <div id="canvasWrapper">

            <div id="canvas">

<?php include("menu.php");?>

                <div id="pageWrapper" class="hfeed" role="main">

                    <!-- CATEGORY NAV -->



                    <section id="page" style="min-height: 238px;">

                        <div class="main-content" data-content-field="main-content" id="yui_3_17_2_1_1603987050835_87">

                            <!-- <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1591858718492" id="page-56dfb5327c65e4cd0ba65afd">

                                <div class="row sqs-row" id="yui_3_17_2_1_1603987050835_86">

                                    <div class="col sqs-col-12 span-12" id="yui_3_17_2_1_1603987050835_85"> -->
                                        <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1591858718492" id="page-56dfb5327c65e4cd0ba65afd">
                                
                                <div class="row sqs-row" id="yui_3_17_2_1_1603987050835_86">

									<?php

                  		$a = new DB();

                  		$result1 = $a->slider();

                  		if ($result1->num_rows > 0) {

                  			while($row = $result1->fetch_assoc()) {

                  			?>

                            <div class="col sqs-col-5 span-5">
                                <div class="product-item">
                                <!-- sqs-block -->
							<div class="image-block sqs-block-image sqs-text-ready" data-block-type="5" id="block-yui_3_17_2_1_1588750092241_20684">

                                            <div class="sqs-block-content" id="yui_3_17_2_1_1603987050835_84">

                                                <div

                                                    class="image-block-outer-wrapper layout-caption-below design-layout-inline combination-animation-none individual-animation-none individual-text-animation-none"

                                                    data-test="image-block-inline-outer-wrapper"

                                                    id="yui_3_17_2_1_1603987050835_83"

                                                >

                                                    <figure class="sqs-block-image-figure intrinsic" >

                                                        

                                                            

                                                            <img

                                                                alt="<?php $row["sliderpath"]; ?>"

                                                                style="width: 100%; height: auto;"

                                                                data-image-resolution="750w"

                                                                src="<?php echo $siteurl."images/slider/".$row["sliderpath"]; ?>"

                                                            />

                                                        

                                                    </figure>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-yui_3_17_2_1_1588750092241_52369">

                                            <div class="sqs-block-content"><p class="" style="white-space: pre-wrap;"><?php echo $row["slidename"];?></p></div>

                                        </div> -->
                                        <section class="product-overlay">
                                            <div class="product-meta">
                                                <h1 class="product-title"><?php echo $row["slidename"];?></h1>
                                            </div>
                                        </section>


                                    
                                </div>
                            </div>

                  			<?php

                  			}

                  		} else { ?>

						<div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-yui_3_17_2_1_1588750092241_52369">

                                            <div class="sqs-block-content"><p class="" style="white-space: pre-wrap;"><?php echo "No portfolio";?></p></div>

                                        </div>

						<?php

                  		}

                  	?>

                                        

                                        

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>

        </div>



        

    </body>

<?php include("footer.php"); ?>

