<?php include("define.php"); ?>
 <?php include("model/database.php"); ?>
<?php
if(isset($_POST["register"])){
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $emailid = $_POST["emailid"];
 $phonenumber = $_POST["phonenumber"];
 $password = $_POST["password"];
 $address1 = $_POST["address1"];
 $address2 = $_POST["address2"];
 $city = $_POST["city"];
 $zipcode = $_POST["zipcode"];

 $a = new DB();
 $result2 = $a->user_register($firstname, $lastname, $emailid, $phonenumber, $password, $address1, $address2, $city, $zipcode);

}
?>
     <?php include("header.php"); ?>
     <body>
     <?php include("menu.php"); ?>
   <!--breadcrumbs area start-->
   <div class="breadcrumbs_area">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="breadcrumb_content">
                       <ul>
                           <li><a href="index.html">home</a></li>
                           <li>Register</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--breadcrumbs area end-->


   <!-- customer login start -->
   <div class="customer_login mt-32">
       <div class="container">
           <div class="row">
              <!--login area start-->
               <div class="col-lg-12 col-md-12">
                   <div class="account_form">
                       <h3 class="margin-bottom-1x">No Account? Register</h3>
            <p>Registration takes less than a minute but gives you full control over your orders.</p>
            <form class="row register-box" action="" method="post" >
				<div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn">First Name</label>
                  <input class="form-control" type="text" name="firstname" id="reg-fn" maxlength="50" required>
                </div>
              </div>
				<div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln">Last Name</label>
                  <input class="form-control" type="text" name="lastname" id="reg-ln" maxlength="50" required>
                </div>
              </div>
				<div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email">E-mail Address</label>
                  <input class="form-control" type="email" name="emailid" id="reg-email" maxlength="50" required>
                </div>
              </div>
				<div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone">Phone Number</label>
                  <input class="form-control" type="text" name="phonenumber" maxlength="12" id="reg-phone" required>
                </div>
              </div>
				<div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">Password</label>
                  <input class="form-control" type="password" name="password" maxlength="50" id="reg-pass" required>
                </div>
              </div>
				<div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm">Confirm Password</label>
                  <input class="form-control" type="password" name="confirmpassword" maxlength="50" id="reg-pass-confirm" required>
                </div>
              </div>
				<div class="col-sm-6">
				<div class="form-group">
					<label for="checkout-address1">Address 1</label>
					<input class="form-control" type="text" name="address1" id="checkout-address1" maxlength="99" required>
                </div>
			</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="checkout-address1">Address 2</label>
						<input class="form-control" type="text" name="address2" maxlength="99" id="checkout-address1">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
					<label for="checkout-city">City</label>
					<select class="form-control" name="city" id="checkout-city" required>
                    <option>Choose city</option>
                    <option value="Ahmedabad">Ahmedabad</option>
					<option value="Amreli">Amreli</option>
					<option value="Anand">Anand</option>
					<option value="Aravalli">Aravalli</option>
					<option value="Banaskantha">Banaskantha</option>
					<option value="Palanpur">Palanpur</option>
					<option value="Bharuch">Bharuch</option>
					<option value="Bhavnagar">Bhavnagar</option>
					<option value="Botad">Botad</option>
					<option value="Dahod">Dahod</option>
					<option value="Dang">Dang</option>
					<option value="Gandhinagar">Gandhinagar</option>
					<option value="gir-somnath">Gir Somnath</option>
					<option value="Jamnagar">Jamnagar</option>
					<option value="Junagadh">Junagadh</option>
					<option value="Kutch">Kutch</option>
					<option value="Kheda">Kheda</option>
					<option value="Mahisagar">Mahisagar</option>
					<option value="Mehsana">Mehsana</option>
					<option value="Morbi">Morbi</option>
					<option value="Narmada">Narmada</option>
					<option value="Navsari">Navsari</option>
					<option value="Panchmahal">Panchmahal</option>
					<option value="Patan">Patan</option>
					<option value="Porbandar">Porbandar</option>
					<option value="Rajkot">Rajkot</option>
					<option value="Sabarkantha">Sabarkantha</option>
					<option value="Surat">Surat</option>
					<option value="Surendranagar">Surendranagar</option>
					<option value="Tapi">Tapi</option>
					<option value="Vadodara">Vadodara</option>
					<option value="Valsad">Valsad</option>
					<option value="Veraval">Veraval</option>


                  </select>
                </div>
              </div>
				<div class="col-sm-6">
					<div class="form-group">
					<label for="checkout-zip">ZIP Code</label>
					<input class="form-control" type="text" name="zipcode" maxlength="6" id="checkout-zip">
                </div>
              </div>
           <div class="col-12 text-center text-sm-right">
                <input class="btn btn-primary margin-bottom-none" type="submit" name="register" value="Register">
              </div>
            </form>
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
