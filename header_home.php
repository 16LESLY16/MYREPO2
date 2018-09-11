<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<style>		
		#primary_nav_wrap ul { list-style:none; position:relative; float:left; margin:0; padding:0 }
		#primary_nav_wrap ul a { text-decoration:none; min-width: 160px; display: block; padding: 3px 20px; clear: both; font-weight: 400; line-height: 1.42857143; color: #333; white-space: nowrap; }
		#primary_nav_wrap ul li { position:relative; float:left; margin:0; padding:0 }
		#primary_nav_wrap ul li.current-menu-item { background:#ddd }
		#primary_nav_wrap ul li:hover { background:#f6f6f6 }		
		#primary_nav_wrap ul ul { display:none; min-width: 160px; position:absolute; top:-16%; right:150px; background:#fff; padding:0; border: 1px solid rgba(0,0,0,.15); border-radius: 4px; -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175); box-shadow: 0 6px 12px rgba(0,0,0,.175); }
		#primary_nav_wrap ul ul li { float:none; width:160px }
		#primary_nav_wrap ul ul a { text-decoration:none; line-height:80%; padding:10px 15px }
		#primary_nav_wrap ul ul ul { top:0; left:100% }
		#primary_nav_wrap ul li:hover > ul { display:block }
		#FreshWidget {
			margin-top:5%;
		}
		.feedback-wrapper {
			height:0%;
		}
		
		.modalLoader {
		border: 10px solid #f3f3f3;
		border-radius: 50%;
		border-top: 10px solid #3498db;
		width: 50px;
		height: 50px;
		margin: auto;
		-webkit-animation: spin 2s linear infinite;
		animation: spin 2s linear infinite;
		}

		@-webkit-keyframes spin {
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
		}
	</style>
    <title>Fat Turtle</title>
		<link rel="shortcut icon" href="<?php echo  base_url(); ?>favicon.ico.png" type="image/x-icon">
		<link rel="icon" href="<?php echo  base_url(); ?>favicon.ico.png" type="image/x-icon">	
    <!-- Bootstrap -->
    <link rel='stylesheet' href='<?php echo  base_url(); ?>css/bootstrap.min.css'/>
	<link rel='stylesheet' href='<?php echo  base_url(); ?>css/bootstrap-theme.min.css'/>		
    <link href="<?php echo  base_url(); ?>css/style.css?<?=rand();?>" rel="stylesheet">
    <link href="<?php echo  base_url(); ?>css/owl.carousel.css" rel="stylesheet">
	
    <link href='<?php echo base_url(); ?>css/fonts.googleapis.css' rel='stylesheet' type='text/css'>
	<script src="<?php echo  base_url(); ?>js/creditcard.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if gt IE 7]> <link rel="stylesheet" type="text/css" href="css/ie8.css" /> <![endif]-->
	<!-- <script type="text/javascript" src="https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.js"></script> -->
	<!-- <script type="text/javascript"> -->
		<!-- FreshWidget.init("", {"queryString": "&widgetType=popup&formTitle=Help+%26+Support&submitTitle=Send&submitThanks=Thank+you.+We'll+get+back+to+you+soon&searchArea=no", "utf8": "✓", "widgetType": "popup", "buttonType": "text", "buttonText": "Support", "buttonColor": "white", "buttonBg": "#006063", "alignment": "2", "offset": "500px", "submitThanks": "Thank you. We'll get back to you soon", "formHeight": "478px;", "url": "https://fatturtleherbs.freshdesk.com"} ); -->
	<!-- </script> -->
    <noscript>
		<br/><br/><br/><br/>
		<div class="container">
			<div class="well">
				<div style="border: 1px solid purple">
					<?php echo "<h1 style='text-align:center'>Please Enable Javascript</h1>"; ?>
				</div>
			</div>
	  </div>
    </noscript>
	<script>
		// if('<?php echo $this->session->userdata('user_id') ?>' == "") {
			 localStorage.clear();
		// }
	</script>
  </head>
  <body>
  	<div id="page-loader" class="text-light">  
		<div class="page-loader-inner">
			<div class="loader-logo-name"><img src="<?php echo  base_url(); ?>images/fat-turtle-logo.png" alt=""/></div>
			<h6 class="alttitle ">Loading</h6>
		</div>
	</div>		
   
    <!-- Navigation -->
    <div id="nav-anchor"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top top_menu" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myCarousel"><img src="<?php echo  base_url(); ?>images/fat-turtle-logo-wh.png" class="log_size"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav_navbr nav-toper log_desktop">
					<li><a href="#myCarousel" class="menuMob">HOME</a></li>
					<li><a class="displayNone" href="#section-welcome"></a></li>
					<li><a class="displayNone" href="#section-about"></a></li>
					<li><a href="#section-what" class="menuMob">WHAT WE DO</a></li>
					<li><a class="displayNone" href="#section-purity"></a></li>
					<li><a href="#section-service" class="menuMob">HOW IT WORKS</a></li>
					<li><a href="#section-safety" class="menuMob">SAFETY</a></li>
					<li><a href="#section-products" class="menuMob">PRODUCTS</a></li>
					<li><a class="displayNone" href="#section-faq"></a></li>
					<li><a href="#section-contact" class="menuMob">CONTACT</a></li>
					<li><a class="displayNone" href="#section-form"></a></li>
					<li><a class="displayNone" href="#section-contact-form"></a></li>
					<li><a class="displayNone" href="#section-in-touch"></a></li>
					<li><a class="displayNone" href="#section-form"></a></li>
					<li><a class="displayNone" href="#section-address"></a></li>
				</ul>
          
				<ul class="nav navbar-nav nav_navbr nav-toper log_mobile">
					<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a href="<?php echo  base_url(); ?>#myCarousel">HOME</a></li>
					<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a href="<?php echo  base_url(); ?>#section-what">WHAT WE DO</a></li>
					<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a href="<?php echo  base_url(); ?>#section-service">HOW IT WORKS</a></li>
					<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a href="<?php echo  base_url(); ?>#section-safety">SAFETY</a></li>
					<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a href="<?php echo  base_url(); ?>#section-products">PRODUCTS</a></li>
					<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a href="<?php echo  base_url(); ?>#section-contact">CONTACT</a></li>
					
					<li><a class="displayNone" href="<?php echo  base_url(); ?>#section-about"></a></li>
					<li><a class="displayNone" href="<?php echo  base_url(); ?>#section-purity"></a></li>
					<li><a class="displayNone" href="<?php echo  base_url(); ?>#section-faq"></a></li>
					<li><a class="displayNone" href="<?php echo  base_url(); ?>#section-contact-form"></a></li>
					
					<li><a class="displayNone" href="<?php echo  base_url(); ?>#section-form"></a></li>
					<li><a class="displayNone" href="<?php echo  base_url(); ?>#section-in-touch"></a></li>
				</ul>
           
				<ul class="nav navbar-nav nav_navbr navbar-right log_desktop">
					<?php 
					$data = $this->session->userdata('user_type');
					$user_name = $this->session->userdata('ADMIN_NAME');
					$user_id = $this->session->userdata('user_id');
					$user_name = strtoupper($user_name);
					if(!$data){ ?>
						<li><a href="<?php echo site_url() ?>register" id="regDes">REGISTER</a></li>  
						<li><a class="log" data-toggle="modal" id="staticLogin" data-target="#myModal" onClick="disableNavbar();" data-keyboard="false" data-backdrop="static">LOGIN</a></li>
					<?php } else { ?>
						<?php if($data == 1 || $data ==2){ ?>
							<li class="dropdown log"> <a href="#" class="dropdown-toggle menu-tog menu-lst" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li>
									<li><a href="<?php echo site_url();?>admin/open_order/index/0">Open Orders</a></li>	
									<li><a href="<?php echo site_url();?>admin/users">Users</a></li>
									<li><a href="<?php echo site_url();?>admin/patients/"><?php if(@$_SESSION['user_type'] == 1 || @$_SESSION['user_type'] == 2) echo "Patient Profiles"; else echo "My Patients"; ?></a></li>
									<li><a href="<?php echo site_url();?>admin/products">Herbs</a></li>
									<li><a href="<?php echo site_url();?>admin/retainer/index/0">Retainer System</a></li>		
																		
									<?php if($data == 1) { ?>
										<nav id="primary_nav_wrap">
											<ul>														  
											<li><a href="#">Settings</a>
												<ul>													
													<li><a href="<?php echo site_url();?>admin/admin_settings/edit/1/0">Email Settings</a></li>
													<li><a href="<?php echo site_url();?>admin/bill_settings/edit/1/0">Bill Settings</a></li>
													<li><a href="<?php echo site_url();?>admin/form_settings/edit/1/0">Form Settings</a></li>
													<li><a href="<?php echo site_url();?>admin/retainer_settings/edit/1/0">Retainer Settings</a></li>
													<li><a href="<?php echo site_url();?>shipping_billing/shippingSettings">Shipping Settings</a></li>
												</ul>
											</li>													  
											</ul>
										</nav>
									<?php } ?>
									<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>">Change Password</a></li>
									<li><a id="logout" onclick="logout_user()" class="log">Logout</a></li>

								</ul>
							</li>
						<?php } else { ?>
						<li class="dropdown log">
							<a href="#" class="dropdown-toggle menu-tog" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li> 
								<?php if($data == 3) { ?>		
									<!--<li><a href="<?php echo site_url();?>/patient_profile_prac/">Patient Profile</a></li>-->
								<?php } ?>
								<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>">Change Password</a></li>
								<li><a id="logout" onclick="logout_user()" class="log">Logout</a></li>
							</ul>
						</li>
					<?php } } ?>
				</ul>
                <ul class="nav navbar-nav nav_navbr navbar-right log_mobile">
					<?php 
						$data = $this->session->userdata('user_type');
						$user_name = $this->session->userdata('ADMIN_NAME');
						$user_name = strtoupper($user_name);
					if(!$data){ ?>
						<li><a href="<?php echo site_url() ?>register">REGISTER</a></li>
						<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a class="log" data-toggle="modal" data-backdrop="static" data-keyboard="false" onClick="disableNavbar();" data-target="#myModal">LOGIN</a></li>
					<?php } else { ?>
						<?php if($data == 1 || $data ==2){ ?>
							<li class="dropdown log"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li>
									<li><a href="<?php echo site_url();?>admin/open_order/index/0">Open Orders</a></li>
									<li><a href="<?php echo site_url();?>admin/users">Users</a></li>
									<li><a href="<?php echo site_url();?>admin/patients/"><?php if(@$_SESSION['user_type'] == 1 || @$_SESSION['user_type'] == 2) echo "Patient Profiles"; else echo "My Patients"; ?></a></li>
									<li><a href="<?php echo site_url();?>admin/products">Herbs</a></li>
									<li><a href="<?php echo site_url();?>admin/retainer/index/0">Retainer System</a></li>
									
									<?php if($data == 1) { ?>
										<li><a href="<?php echo site_url();?>admin/admin_settings/edit/1/0">Email Settings</a></li>
										<li><a href="<?php echo site_url();?>admin/bill_settings/edit/1/0">Bill Settings</a></li> 
										<li><a href="<?php echo site_url();?>admin/form_settings/edit/1/0">Form Settings</a></li>
										<li><a href="<?php echo site_url();?>admin/retainer_settings/edit/1/0">Retainer Settings</a></li>
										<li><a href="<?php echo site_url();?>shipping_billing/shippingSettings">Shipping Settings</a></li>
									<?php } ?>
									<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>">Change Password</a></li>
									<li><a id="logout" onclick="logout_user()" class="log">Logout</a></li>

								</ul>
							</li>
						<?php } else { ?>
							<li class="dropdown log">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li>
									<?php if($data == 3) { ?>
									<?php } ?>
									<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>">Change Password</a></li>
									<li><a id="logout" onclick="logout_user()" class="log">Logout</a></li>
								</ul>
							</li>
					<?php	} } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<script src="<?php echo  base_url(); ?>js/jquery.js"></script>
<script>
$(document).ready(function() {		
	$(".menuMob").click(function() {
		$("#bs-example-navbar-collapse-1").removeClass("in");
	});
});

function disableNavbar() {
	$('.navbar').css('pointer-events', 'none');
}

/*$('.nav a').on('click', function(){
    $('.btn-navbar').click(); //bootstrap 2.x
    $('.navbar-toggle').click() //bootstrap 3.x by Richard
});*/
</script>