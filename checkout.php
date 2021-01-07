<?php error_reporting(0); ?>
<?php
session_start();
$cart = $_SESSION['cart']; ?>
<?php include("define.php"); ?>
<?php include("model/database.php");
if(isset($_POST) & !empty($_POST)){
	
		$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
		$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['emailid'], FILTER_SANITIZE_STRING);
		$address1 = filter_var($_POST['address1'], FILTER_SANITIZE_STRING);
		$address2 = filter_var($_POST['address2'], FILTER_SANITIZE_STRING);
		$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
		$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
		$phonenumber = filter_var($_POST['phonenumber'], FILTER_SANITIZE_NUMBER_INT);
		$payment = filter_var($_POST['check_method'], FILTER_SANITIZE_STRING);
		$zipcode = filter_var($_POST['zipcode'], FILTER_SANITIZE_NUMBER_INT);
    
    $a = new DB();
    
				$total = 0;
				foreach ($cart as $key => $value) {
          $result3 = $a->cartproductbyp($key);
						if ($result3->num_rows > 0) {
              while($row3 = $result3->fetch_assoc()) {
                  if($row3['dprice'] == 0){
						    $price = $row3['price'];    
						}else{
						    $price = $row3['dprice'];
						}
                $total = $total + ($price * $value['quantity']);
              }
           }
         }
         $status = 'Order Placed';
         $total=$total + 14.99;
        $result4 = $a->order( $firstname, $lastname,$email, $phonenumber, $address1, $address2, $city,$country,$state, $zipcode, $total, $status , $payment);
				if($result4){
					$orderid = $result4;
					foreach ($cart as $key => $value) {
            $result5 = $a->product_id($key);
            if ($result5->num_rows > 0) {
              while($row5 = $result5->fetch_assoc()) {
                  if($row5['dprice'] == 0){
						    $price = $row5['price'];    
						}else{
						    $price = $row5['dprice'];
						}
                $result6 = $a->orderitems( $row5['pid'] ,$value['quantity'],$orderid, $price);
              }
           }
          }
		  unset($_SESSION['cart']);
				if($payment == "Paypal"){
				    header("location: request.php?orderid=".$orderid."&total=".$total);    
				}
				}
					
	}
?>
<?php include("header.php"); ?>
<body class="shoppage sidebar-text-alignment-left sidebar-position-left sidebar-fixed mobile-site-title-style-auto blog-sidebar-right gallery-style-fit enable-gallery-thumbnails initial-gallery-view-thumbnails homepage-gallery-view-inherit thumbnail-aspect-ratio-auto gallery-controls-simple social-icon-style-normal hide-social-icons show-category-navigation event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label event-list-show-cats event-list-date event-list-time event-list-address event-icalgcal-links event-excerpts event-item-back-link product-list-titles-under product-list-alignment-center product-item-size-23-standard-vertical product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd collection-56dfb5327c65e4cd0ba65afd collection-type-page collection-layout-default mobile-style-available"
        id="collection-56dfb5327c65e4cd0ba65afd"
    >
        <div id="canvasWrapper">
            <div id="canvas">
<?php include("menu.php");?>
                <div id="pageWrapper" class="hfeed" role="main">
                    <!-- CATEGORY NAV -->

                    <section id="page" class="checkout" style="min-height: 238px;">
                        <div class="main-content" data-content-field="main-content" id="yui_3_17_2_1_1603987050835_87">
                            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1591858718492" id="page-56dfb5327c65e4cd0ba65afd">
                                <div class="row sqs-row" id="yui_3_17_2_1_1603987050835_86">
								<h3>CHECKOUT</h3>
                               	        <div class="checkout_form">
              <form method="post">
                <div class="row">
                    <div class="col sqs-col-6 span-6">

                            <h3>Billing Details</h3>
                            <div class="row">
                             
                              <form class="row" method="post" action="">
                              <div class="col-lg-6 mb-20">
                              <div class="form-group">
                              <input class="form-control" type="text" placeholder="First Name" id="account-fn" name="firstname" value="" required>
                              </div>
                              </div>
                              <div class="col-lg-6 mb-20">
                              <div class="form-group">
                              <input class="form-control" type="text" placeholder="Last Name"  id="account-ln" name="lastname" value="" required>
                              </div>
                              </div>
                              <div class="col-lg-6 mb-20">
                              <div class="form-group">
                              <input class="form-control" type="email" placeholder="E-mail"  id="account-email" name="emailid" value="" required>
                              </div>
                              </div>
                              <div class="col-lg-6 mb-20">
                              <div class="form-group">
                              <input class="form-control" type="text" placeholder="Phone Number"  id="account-phone" name="phonenumber" value="" required>
                              </div>
                              </div>
                              <div class="col-lg-6 mb-20">
                              <div class="form-group">
                              <input class="form-control" type="text" placeholder="Address1"  id="account-fn" name="address1" value="" required>
                              </div>
                              </div>
                              <div class="col-lg-6 mb-20">
                              <div class="form-group">
                              <input class="form-control" type="text" placeholder="unit# (Optional)"  id="account-ln" name="address2" value="" >
                              </div>
                              </div>
							  <div class="col-lg-6 mb-20">
                              <div class="form-group">
                              <select name="country" class="form-control" required>
								<option value="AF">Afghanistan</option>
								<option value="AX">Aland Islands</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="BQ">Caribbean Netherlands</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, Democratic Republic</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote d'Ivoire</option><option value="HR">Croatia</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KR">Korea (the Republic of)</option><option value="XK">Kosovo</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine, State of</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City State (Holy See)</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                              </div>
                              </div>
							  <div class="col-lg-6 mb-20">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="City"  name="city" value="" required>
								</div>
                              </div>
							  <div class="col-lg-6 mb-20">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="State"  name="state" value="" required>
								</div>
                              </div>
                              <div class="col-lg-6 mb-20">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Postal code"  name="zipcode" value="">
								</div>
                              </div>

                            </div>

                    </div>
                    <div class="col sqs-col-6 span-6">

                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php

                                			$total = 0;
                                			$a = new DB();
                                	foreach ($cart as $key => $value) {


                                					$result1 = $a->cartproductbyp($key);
                                						if ($result1->num_rows > 0) {
                                						while($row = $result1->fetch_assoc()) {
                                						?>
                                					<?php	if($row['dprice'] == 0){
						    $price = $row['price'];    
						}else{
						    $price = $row['dprice'];
						} ?>
                                        <tr>
                                            <td> <?php echo $row['productname']; ?> <strong> × <?php echo $value['quantity']; ?></strong></td>
                                            <td> $ <?php echo $price; ?> USD</td>
                                        </tr>
                                        <?php
                            						$total = $total + ($price*$value['quantity']);
                            							}
                            						} }?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>$ <?php echo $total; ?> USD</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>$ 14.99 USD</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>$ <?php echo $total + 14.99; ?> USD</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                              <label>PAYMENT METHOD</label>
                               
                               <div class="panel-default">
                                    <input id="payment_defult" name="check_method" type="radio" checked value="Paypal" data-target="createp_account" />
                                    <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="order_button">
                                    <button  type="submit">Proceed to PayPal</button>
                                </div>
                            </div>

                    </div>
                </div>
                </form>
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