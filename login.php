<?php include("model/database.php"); ?>
<?php
if(isset($_POST["login"])){
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);

	$a= new DB();
	$result = $a->customer_login($username, $password);
}
?><?php include("define.php"); ?>


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
                            <li>Login</li>
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
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form class="login-box" action=""  method="post">
                            <p>
                                <label>Username or email <span>*</span></label>
                              <input class="form-control" type="email" name="username" placeholder="Email" required><span class="input-group-addon"><i class="icon-mail"></i></span>
                             </p>
                             <p>
                                <label>Passwords <span>*</span></label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                             </p>
                            <div class="login_submit">
                               <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <input class="btn btn-primary margin-bottom-none" type="submit" name="login" value ="Login" />

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
