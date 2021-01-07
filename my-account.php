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
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                <li><a href="#address" data-toggle="tab"  class="nav-link">Addresses</a></li>
                                <li><a href="profile.php"  class="nav-link">Account details</a></li>
                                <li><a href="logout.php" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
																					<?php
								          $a = new DB();
								          $result1 = $a->orders_by_uid($id);
								          if ($result1->num_rows > 0) {
								            while($row = $result1->fetch_assoc()) { ?>

                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo date('d M, Y',strtotime($row['timestamp'])); ?></td>
                                                <td><span class="success"><?php echo $row['orderstatus']; ?></span></td>
                                                <td>Rs <?php echo $row['totalprice']; ?></td>
                                            </tr>
																					<?php } } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="address">
                               <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="profile.php" class="view">Edit</a>
																<?php $a = new DB();
																$result2 = $a->customer_id($id);
																if ($result2->num_rows > 0) {
																	while($row2 = $result2->fetch_assoc()) {
																?>
                                <p><strong><?php echo $row2['firstname'] ?> <?php echo $row2['lastname'] ?></strong></p>
                                <address>
                                    <?php echo $row2['address1'] ?><br>
                                    <?php echo $row2['address2'] ?><br>
                                    <?php echo $row2['city'] ?><br>
                                    <?php echo $row2['zipcode'] ?><br>
                                </address>
                                <p>Gujarat, India</p>
															<?php } } ?>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="#">
                                                <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                </div> <br>
                                                <label>First Name</label>
                                                <input type="text" name="first-name">
                                                <label>Last Name</label>
                                                <input type="text" name="last-name">
                                                <label>Email</label>
                                                <input type="text" name="email-name">
                                                <label>Password</label>
                                                <input type="password" name="user-password">
                                                <label>Birthdate</label>
                                                <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                <span class="example">
                                                  (E.g.: 05/31/1970)
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="optin">
                                                    <label>Receive offers from our partners</label>
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="newsletter">
                                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                </span>
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </form>
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
