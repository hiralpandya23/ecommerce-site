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
$id = $_SESSION['id'];
}
if(isset($_POST["Update"])){
	$cid = $id;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phonenumber = $_POST['phonenumber'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];

	$a = new DB();
	$result1 = $a->update_customer_profile($cid, $firstname, $lastname, $phonenumber, $address1, $address2, $city, $zipcode);

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
                            <li><a href="index.php">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="my-account.php#dashboard"  class="nav-link ">Dashboard</a></li>
                                <li> <a href="my-account.php#orders" class="nav-link">Orders</a></li>
                                <li><a href="my-account.php#address"  class="nav-link">Addresses</a></li>
                                <li><a href="profile.php"  class="nav-link active">Account details</a></li>
                                <li><a href="logout.php" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
																					<?php
		$a = new DB();
		$result2 = $a->customer_id($id);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
		?>
																					<form class="row" method="post" action="">
						<div class="col-md-6">
							<div class="form-group">
								<label for="account-fn">First Name</label>
								<input class="form-control" type="text" id="account-fn" name="firstname" value="<?php echo $row2['firstname']; ?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="account-ln">Last Name</label>
								<input class="form-control" type="text" id="account-ln" name="lastname" value="<?php echo $row2['lastname']; ?>" required>
							</div>
						</div>
			<div class="col-md-6">
							<div class="form-group">
								<label for="account-email">E-mail Address</label>
								<input class="form-control" type="email" id="account-email" name="emailid" value="<?php echo $row2['emailid']; ?>" disabled>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="account-phone">Phone Number</label>
								<input class="form-control" type="text" id="account-phone" name="phonenumber" value="<?php echo $row2['phonenumber']; ?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="account-fn">Address1</label>
								<input class="form-control" type="text" id="account-fn" name="address1" value="<?php echo $row2['address1']; ?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="account-ln">Address2</label>
								<input class="form-control" type="text" id="account-ln" name="address2" value="<?php echo $row2['address2']; ?>" required>
							</div>
						</div>
			<div class="col-sm-6">
				<div class="form-group">
				<label for="checkout-city">City</label>
				<select class="form-control" name="city" id="checkout-city" required>
									<option>Choose city</option>
									<option value="Ahmedabad" <?php if($row2['city'] == "Ahmedabad" ){ ?> Selected <?php } ?> >Ahmedabad</option>
				<option value="Amreli" <?php if($row2['city'] == "Amreli" ){ ?> Selected <?php } ?> >Amreli</option>
				<option value="Anand" <?php if($row2['city'] == "Anand" ){ ?> Selected <?php } ?> >Anand</option>
				<option value="Aravalli" <?php if($row2['city'] == "Aravalli" ){ ?> Selected <?php } ?> >Aravalli</option>
				<option value="Banaskantha" <?php if($row2['city'] == "Banaskantha" ){ ?> Selected <?php } ?> >Banaskantha</option>
				<option value="Palanpur" <?php if($row2['city'] == "Palanpur" ){ ?> Selected <?php } ?> >Palanpur</option>
				<option value="Bharuch" <?php if($row2['city'] == "Bharuch" ){ ?> Selected <?php } ?> >Bharuch</option>
				<option value="Bhavnagar" <?php if($row2['city'] == "Bhavnagar" ){ ?> Selected <?php } ?> >Bhavnagar</option>
				<option value="Botad" <?php if($row2['city'] == "Botad" ){ ?> Selected <?php } ?> >Botad</option>
				<option value="Dahod" <?php if($row2['city'] == "Dahod" ){ ?> Selected <?php } ?> >Dahod</option>
				<option value="Dang" <?php if($row2['city'] == "Dang" ){ ?> Selected <?php } ?> >Dang</option>
				<option value="Gandhinagar" <?php if($row2['city'] == "Gandhinagar" ){ ?> Selected <?php } ?> >Gandhinagar</option>
				<option value="gir-somnath" <?php if($row2['city'] == "gir-somnath" ){ ?> Selected <?php } ?> >Gir Somnath</option>
				<option value="Jamnagar" <?php if($row2['city'] == "Jamnagar" ){ ?> Selected <?php } ?> >Jamnagar</option>
				<option value="Junagadh" <?php if($row2['city'] == "Junagadh" ){ ?> Selected <?php } ?> >Junagadh</option>
				<option value="Kutch" <?php if($row2['city'] == "Kutch" ){ ?> Selected <?php } ?> >Kutch</option>
				<option value="Kheda" <?php if($row2['city'] == "Kheda" ){ ?> Selected <?php } ?> >Kheda</option>
				<option value="Mahisagar" <?php if($row2['city'] == "Mahisagar" ){ ?> Selected <?php } ?> >Mahisagar</option>
				<option value="Mehsana" <?php if($row2['city'] == "Mehsana" ){ ?> Selected <?php } ?> >Mehsana</option>
				<option value="Morbi" <?php if($row2['city'] == "Morbi" ){ ?> Selected <?php } ?> >Morbi</option>
				<option value="Narmada" <?php if($row2['city'] == "Narmada" ){ ?> Selected <?php } ?> >Narmada</option>
				<option value="Navsari" <?php if($row2['city'] == "Navsari" ){ ?> Selected <?php } ?> >Navsari</option>
				<option value="Panchmahal" <?php if($row2['city'] == "Panchmahal" ){ ?> Selected <?php } ?> >Panchmahal</option>
				<option value="Patan" <?php if($row2['city'] == "Patan" ){ ?> Selected <?php } ?> >Patan</option>
				<option value="Porbandar" <?php if($row2['city'] == "Porbandar" ){ ?> Selected <?php } ?> >Porbandar</option>
				<option value="Rajkot" <?php if($row2['city'] == "Rajkot" ){ ?> Selected <?php } ?> >Rajkot</option>
				<option value="Sabarkantha" <?php if($row2['city'] == "Sabarkantha" ){ ?> Selected <?php } ?> >Sabarkantha</option>
				<option value="Surat" <?php if($row2['city'] == "Surat" ){ ?> Selected <?php } ?> >Surat</option>
				<option value="Surendranagar" <?php if($row2['city'] == "Surendranagar" ){ ?> Selected <?php } ?> >Surendranagar</option>
				<option value="Tapi" <?php if($row2['city'] == "Tapi" ){ ?> Selected <?php } ?> >Tapi</option>
				<option value="Vadodara" <?php if($row2['city'] == "Vadodara" ){ ?> Selected <?php } ?> >Vadodara</option>
				<option value="Valsad" <?php if($row2['city'] == "Valsad" ){ ?> Selected <?php } ?> >Valsad</option>
				<option value="Veraval" <?php if($row2['city'] == "Veraval" ){ ?> Selected <?php } ?> >Veraval</option>
			</select>
							</div>
						</div>

			<div class="col-md-6">
							<div class="form-group">
								<label for="account-confirm-pass">Zipcode</label>
								<input class="form-control" type="text" name="zipcode" value="<?php echo $row2['zipcode']; ?>">
							</div>
						</div>
						<div class="col-12">
							<hr class="mt-2 mb-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center">
								 <input class="btn btn-primary margin-right-none" type="submit" name="Update" value="Update" >
							</div>
						</div>
					</form><?php } }  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account end   -->


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
