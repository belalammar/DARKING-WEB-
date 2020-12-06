
<?php
session_start();
$con = mysqli_connect('localhost', 'root', '' , 'darking');
$if($con) {
echo "connected success";	

}
else {
	echo "no connected";
}
$db =  mysqli_select_db($con, 'darking');
if(isset($_POST['submit'])) {
$username = $_POST['username'];

$password = $_POST['password'];
$sql = "select * from  login  where username = '$username' and password = '$password'";
$query = mysqli_query($con,$sql);
$row = mysqli_num_rows() {
if($row == 1) {
echo "login success";
$_SESSION['username'] = $username;
header('location:dashboard.php');	
}	
else{
echo "login falid ";
	
}
}

}

if(isset($_POST['btnLogin'])){
	$email = trim($_POST['user_email']);
	$upass  = trim($_POST['user_pass']);
	$h_upass = sha1($upass);
	
	 if ($email == '' OR $upass == '') {
  
		message("Invalid Username and Password!", "error");
		redirect("login.php");
		   
	  } else {  
	//it creates a new objects of member
	  $user = new User();
	  //make use of the static function, and we passed to parameters
	  $res = $user::userAuthentication($email, $h_upass);
	  if ($res==true) { 
		 message("You logon as ".$_SESSION['U_ROLE'].".","success");
		if ($_SESSION['U_ROLE']=='Administrator'){
		   redirect(web_root."admin/index.php");
		}else{
			 redirect(web_root."admin/login.php");
		}
	  }else{
		message("Account does not exist! Please contact Administrator.", "error");
		 redirect(web_root."admin/login.php"); 
	  }
   }
   } 
   ?> 
   
<html lang="en" dir="ltr">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<meta content="Buy Bank Login, CC, Chase Bank logs, CC Drop, Scampages, Email leads,Boa Bank Logs, Canada Logs, Uk logs, SMTP, Rdp, Cpanel, PHP Mailer" name="description">
		<meta name="keywords" content="Buy Bank Login, CC, Chase Bank logs, CC Drop, Scampages, Email leads,Boa Bank Logs, Canada Logs, Uk logs, SMTP, Rdp, Cpanel, PHP Mailer">

		<!-- Favicon -->
		<link rel="icon" href="assets/images/brand/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico">

		<!-- Title -->
		<title>Login - Buy Bank Login, CC, Chase Bank logs, CC Drop, Scampages, Email leads,Boa Bank Logs, Canada Logs, Uk logs, SMTP, Rdp, Cpanel, PHP Mailer</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!-- Dashboard css -->
		<link href="assets/css-dark/style.css" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">

		<!-- Horizontal-menu css -->
		<link href="assets/plugins/horizontal-menu/dark-horizontalmenu.css" rel="stylesheet">

		<!--Daterangepicker css-->
		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

		<!-- Sidebar Accordions css -->
		<link href="assets/plugins/accordion1/css/dark-easy-responsive-tabs.css" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="assets/plugins/sidebar/dark-sidebar.css" rel="stylesheet">

		<!---Font icons css-->
		<link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet">
		<link href="assets/plugins/iconfonts/icons.css" rel="stylesheet">
		<link href="assets/fonts/fonts/font-awesome.min.css" rel="stylesheet">

	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style>._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{-webkit-animation:n0BD1--rotation 3.5s linear forwards;animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style></head>
	<body class="bg-account sidebar-gone"><div data-v-d97144a6="" id="dm-extension-sniffer"><!----></div>
	    <!-- page -->
		<div class="page">

			<!-- page-content -->
			<div class="page-content">
				<div class="container text-center text-dark">
					<div class="row">
						<div class="col-lg-4 d-block mx-auto">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-md-12">
									<div class="card">
										<div class="card-body">
											
											<h3>Login</h3>
											<span class="text-danger"></span>
											<p class="text-muted">Sign In to your account</p>
												<form role="form" action="/login.php" method="post" name="loginform">
											<div class="input-group mb-3">
												<span class="input-group-addon "><i class="fa fa-envelope"></i></span>
												<input type="text" name="email" class="form-control" placeholder="Email Address">
											</div>
											<div class="input-group mb-4">
												<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
												<input type="password" name="password" class="form-control" placeholder="Password">
											</div>
											<div class="row">
												<div class="col-12">
													<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
												</div>
												<div class="col-12">
													<a href="register.php" class="btn btn-link box-shadow-0 px-0 md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">Register?</a>
												</div>
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
			<!-- page-content end -->
		</div>
		<!-- page End-->

		<!-- Jquery js-->
		<script src="assets/js-dark/vendors/jquery-3.2.1.min.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery Sparkline js-->
		<script src="assets/js-dark/vendors/jquery.sparkline.min.js"></script>

		<!-- Chart Circle js-->
		<script src="assets/js-dark/vendors/circle-progress.min.js"></script>

		<!-- Star Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Sidebar Accordions js -->
		<script src="assets/plugins/accordion1/js/easyResponsiveTabs.js"></script>

		<!--Moment js-->
		<script src="assets/plugins/moment/moment.min.js"></script>

		<!-- Daterangepicker js-->
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Custom scroll bar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom js-->
		<script src="assets/js-dark/custom.js"></script>

	
</body></html>