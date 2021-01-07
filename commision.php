<?php include("model/database.php"); ?>
<?php
 if(isset($_POST["Send"])){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $phonenumber = $_POST["phonenumber"];
  
  $email = $_POST["email"];
  $message = $_POST["message"];
  $address = $_POST["address"];

  $a = new DB();
  $result2 = $a->contact($firstname,$lastname, $email,$phonenumber, $message, $address);


 }
?>
<?php include("define.php"); ?>
<?php include("header.php"); ?>
<body
        class="sidebar-text-alignment-left sidebar-position-left sidebar-fixed mobile-site-title-style-auto blog-sidebar-right gallery-style-fit enable-gallery-thumbnails initial-gallery-view-thumbnails homepage-gallery-view-inherit thumbnail-aspect-ratio-auto gallery-controls-simple social-icon-style-normal hide-social-icons show-category-navigation event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label event-list-show-cats event-list-date event-list-time event-list-address event-icalgcal-links event-excerpts event-item-back-link product-list-titles-under product-list-alignment-center product-item-size-23-standard-vertical product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-56dfb5327c65e4cd0ba65afd collection-type-page collection-layout-default mobile-style-available"
        id="collection-56dfb5327c65e4cd0ba65afd"
    >
        <div id="canvasWrapper">
            <div id="canvas">
<?php include("menu.php");?>
                <div id="pageWrapper" class="hfeed" role="main">
                    <!-- CATEGORY NAV -->

                    <section id="page" style="min-height: 238px;">
                        <div class="main-content" style="text-align: center;
    font-size: 13px;">
							<div class="sqs-layout sqs-grid-12 columns-12" id="page-57f6fa7bd1758e2f46e1699a">
								<div class="row sqs-row">
									<div class="col sqs-col-12 span-12">
										<div class="sqs-block html-block sqs-block-html" id="block-921d58eeeb1c62817c4f">
											<div class="sqs-block-content">
												<p>Please read before filling in the request form below.<p>
												<h4><b>PROCESS</b></h4>
												<p>Once your request for a commission has been approved, I will be sending you a pencil draft of the concept to be approved by you.</br>Unless I’ve been given creative freedom, a reference photo would make the process a lot easier. If you have any inspirational photos or a mood-board you’d like me to work around, please forward it to me.</br>By requesting a commission by me, you are thereby agreeing to my style and technique of painting.</br>After approving concept, draft, and size, a price will be given. Price depends on not only size and medium but also the time this project will take.</p>
												<h4><b>PAYMENT AND SHIPPING</b></h4>
												<p>Once draft is approved, 50% of the price will be requested. When the painting is complete, the rest of the payment + shipping will be requested. The painting will only be sent once full payment has been received.</br>Shipping will be covered by you. I have no control over issues with shipping costs and delivery.</p>
												<h2>COMMISSION REQUEST FORM</h2>
												<form id="contact-form1" method="POST"  action="">
                            <p>
                               <input name="firstname" placeholder="First Name *"  maxlength="100" required type="text">
                            </p>
							<p>
                               <input name="lastname" placeholder="Last Name *"  maxlength="100" required type="text">
                            </p>
                            <p>
                               <input name="email" placeholder="E-mail *" type="email"  maxlength="100" required>
                            </p>
							<p>
                               <input name="phonenumber" placeholder="Phone Number *"  maxlength="50" required type="text">
                            </p>
                            <p>
                               <input name="address" placeholder="City, State/Province *" type="text"  maxlength="50" required>
                            </p>
                            <div class="contact_textarea">
                                <textarea placeholder="Please give a description of what you are interested in and include size (inches)*" name="message"  class="form-control2" required ></textarea>
                            </div>
                            <input class="btn btn-primary margin-bottom-none" type="submit" name="Send" value ="Submit" />
                            <p class="form-messege"></p>
                        </form>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </section>
                </div>
            </div>
        </div>

        
    </body>
<?php include("footer.php"); ?>
