<?php 
	error_reporting(0);
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->		
		<style>		
			#primary_nav_wrap ul { list-style:none;position:relative;float:left;margin:0;padding:0 }
			#primary_nav_wrap ul a { text-decoration:none;min-width: 160px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap; }
			#primary_nav_wrap ul li { position:relative;float:left;margin:0;padding:0 }
			#primary_nav_wrap ul li.current-menu-item { background:#ddd }
			#primary_nav_wrap ul li:hover { background:#f6f6f6 }
			#primary_nav_wrap ul ul { display:none;min-width: 160px;position:absolute;top:-16%;right:150px;background:#fff;padding:0;border: 1px solid rgba(0,0,0,.15);border-radius: 4px;-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);box-shadow: 0 6px 12px rgba(0,0,0,.175);	}
			#primary_nav_wrap ul ul li { float:none;width:160px	}
			#primary_nav_wrap ul ul a { text-decoration:none;line-height:80%;padding:10px 15px }
			#primary_nav_wrap ul ul ul { top:0;left:100% }
			#primary_nav_wrap ul li:hover > ul { display:block }
		</style>
		<title>Fat Turtle</title>
		<link rel="shortcut icon" href="<?php echo  base_url(); ?>favicon.ico.png" type="image/x-icon">
		<link rel="icon" href="<?php echo  base_url(); ?>favicon.ico.png" type="image/x-icon">	
		<link rel='stylesheet' href='<?php echo  base_url(); ?>css/bootstrap.min.css' /><!-- Bootstrap -->
		<link rel='stylesheet' href='<?php echo  base_url(); ?>css/bootstrap-theme.min.css' />		
		<link href="<?php echo  base_url(); ?>css/style.css?<?=rand();?>" rel="stylesheet">
		<link href="<?php echo  base_url(); ?>css/owl.carousel.css" rel="stylesheet">		  	  
		<link href="<?php echo  base_url(); ?>css/selectize.bootstrap3.css" rel="stylesheet">		  	  		  	  
		<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>css/jquery-ui.css">
		<link href='<?php echo base_url(); ?>css/fonts.googleapis.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url(); ?>css/jquery-te-1.4.0.css' rel='stylesheet' type='text/css'>
		<script src="<?php echo  base_url(); ?>js/creditcard.js" type="text/javascript"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="<?php echo base_url(); ?>css/input_style.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">	
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/hint.css">
		<style>
			input[type="radio"].toggle { display: none; }
			input[type="radio"].toggle:checked + label { 
				background-image: -moz-linear-gradient(bottom,#969696,#727272);
				background-image: -webkit-gradient(linear,0 0,0 100%,from(#969696),#727272);
				background-image: -webkit-linear-gradient(bottom,#969696,#727272);
				background-image: -o-linear-gradient(bottom,#969696,#727272);
				background-image: linear-gradient(to top,#969696,#727272);
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000',endColorstr='#000',GradientType=0);
				filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
				-webkit-box-shadow: inset 0 1px 6px rgba(41, 41, 41, 0.2),0 1px 2px rgba(0,0,0,0.05);
				-moz-box-shadow: inset 0 1px 6px 0 rgba(41, 41, 41, 0.2),0 1px 2px rgba(0,0,0,0.05);
				box-shadow: inset 0 1px 6px rgba(41, 41, 41, 0.2),0 1px 2px rgba(0, 0, 0, 0.05);
				cursor: default;color: #E6E6E6;border-color: transparent;text-shadow: 0 1px 1px rgba(40, 40, 40, 0.75);
			}
			input[type="radio"].toggle + label { width: 3em; }
			input[type="radio"].toggle:checked + label.btn:hover { background-color: inherit;background-position: 0 0;-webkit-transition: none;-moz-trainsition: none;transition: none; }
			input[type="radio"].toggle-left + label { border-right: 0;-webkit-border-top-right-radius: 0;-webkit-border-bottom-right-radius: 0;-moz-border-top-right-radius: 0;-moz-border-bottom-right-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 0; }
			input[type="radio"].toggle-right + label { -webkit-border-top-left-radius: 0;-webkit-border-bottom-left-radius: 0;-moz-border-top-left-radius: 0;-moz-border-bottom-left-radius: 0;border-top-left-radius: 0;border-bottom-left-radius: 0; }
		
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
			var tabId = sessionStorage.ID ? sessionStorage.ID : sessionStorage.ID = Math.random(); 
			// tabId2 = localStorage.ID ? localStorage.ID : localStorage.ID = tabId;
			
			// if(tabId != tabId2) {
				// window.location = '<?=site_url(); ?>';
			// }
		</script>
	</head>
	<body ondragstart="return false;" ondrop="return false;">		
        <div id="nav-anchor"></div><!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top top_menu" role="navigation">
				<div class="container-fluid">		
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php 
							$controller_name =  $this->router->fetch_class(); 
							$method_name =  $this->router->fetch_method(); 
								
							if($controller_name == "build_formula" || $controller_name == "product_order" || $controller_name == "shipping_billing") {
						?>
							<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>images/fat-turtle-logo-wh.png" class="log_size" onclick="return checkProgress("<?php echo site_url();?>")"></a>
						<?php } else { ?>
							<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>images/fat-turtle-logo-wh.png" class="log_size"></a>
						<?php } ?>
					</div>
					
					<?php  
						$controller_name =  $this->router->fetch_class(); 
						$method_name =  $this->router->fetch_method(); 
							
						if($controller_name == "build_formula" || $controller_name == "product_order" || $controller_name == "shipping_billing") {
					?>							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav nav_navbr nav-toper log_desktop">                                      
								    <li><a href="<?php echo  base_url(); ?>#myCarousel" onclick="return checkProgress('<?php echo  base_url(); ?>')">HOME</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-what" onclick="return checkProgress('<?php echo  base_url(); ?>#section-what')">   WHAT WE DO</a></li>
									     <li><a href="<?php echo  base_url(); ?>#section-service" onclick="return checkProgress('<?php echo  base_url(); ?>#section-service')">HOW IT WORKS</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-safety" onclick="return checkProgress('<?php echo  base_url(); ?>#section-safety')">SAFETY</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-products" onclick="return checkProgress('<?php echo  base_url(); ?>#section-products')">PRODUCTS</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-contact" onclick="return checkProgress('<?php echo  base_url(); ?>#section-contact')">CONTACT</a></li>					
									
									<li><a class="displayNone" href="#section-about"></a></li>
									<li><a class="displayNone" href="#section-purity"></a></li>
									<li><a class="displayNone" href="#section-faq"></a></li>
									<li><a class="displayNone" href="#section-contact-form"></a></li>
									<li><a class="displayNone" href="#section-vizio"></a></li>
									<li><a class="displayNone" href="#section-form"></a></li>
									<li><a class="displayNone" href="#section-in-touch"></a></li>					
								</ul>
								
								<ul class="nav navbar-nav nav_navbr nav-toper log_mobile" id="collapseSection">                                       
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>" onclick="return checkProgress('<?php echo  base_url(); ?>')">HOME</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-what" onclick="return checkProgress('<?php echo  base_url(); ?>#section-what')">WHAT WE DO</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-service" onclick="return checkProgress('<?php echo  base_url(); ?>#section-service')">HOW IT WORKS</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-safety" onclick="return checkProgress('<?php echo  base_url(); ?>#section-safety')">SAFETY</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-products" onclick="return checkProgress('<?php echo  base_url(); ?>#section-products')">PRODUCTS</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-contact" onclick="return checkProgress('<?php echo  base_url(); ?>#section-contact')">CONTACT</a>
									</li>
									
									<li><a class="displayNone" href="#section-about"></a></li>
									<li><a class="displayNone" href="#section-purity"></a></li>
									<li><a class="displayNone" href="#section-faq"></a></li>
									<li><a class="displayNone" href="#section-contact-form"></a></li>
									<li><a class="displayNone" href="#section-vizio"></a></li>
									<li><a class="displayNone" href="#section-form"></a></li>
									<li><a class="displayNone" href="#section-in-touch"></a></li>					
								</ul>	
								
								<ul class="nav navbar-nav nav_navbr navbar-right log_desktop">			
									<?php 
										$data = $this->session->userdata('user_type');
										$user_name = $this->session->userdata('ADMIN_NAME');
										$user_id = $this->session->userdata('user_id');
										$user_name = strtoupper($user_name);
										if(!$data){ ?>				
											<li><a class="log" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" onClick="disableNavbar();">LOGIN</a></li>			
										<?php }else{ ?>
										<?php if($data == 1 || $data == 2){ ?> <!-- comment this -->
											<li class="dropdown log"> <a href="#" class="dropdown-toggle menu-tog menu-lst" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>		            
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>home/landing_home" onclick="return checkProgress('<?php echo site_url();?>home/landing_home')">Landing</a></li>
													<li><a href="<?php echo site_url();?>admin/open_order/index/0" onclick="return checkProgress('<?php echo site_url();?>admin/open_order/index/0')">Open Orders</a></li>
													<li><a href="<?php echo site_url();?>admin/users" onclick="return checkProgress('<?php echo site_url();?>admin/users')">Users</a></li>		
													<li><a href="<?php echo site_url();?>admin/patients" onclick="return checkProgress('<?php echo site_url();?>admin/patients')"><?php if(@$_SESSION['user_type'] == 1 || @$_SESSION['user_type'] == 2) echo "Patient Profiles"; else echo "My Patients"; ?></a></li>
													<li><a href="<?php echo site_url();?>admin/products" onclick="return checkProgress('<?php echo site_url();?>admin/products')">Herbs</a></li>
													<li><a href="<?php echo site_url();?>admin/retainer/index/0" onclick="return checkProgress('<?php echo site_url();?>admin/retainer/index/0')">Retainer System</a></li>	
																																						
													<!--<li><a href="<?php echo site_url();?>/admin/admin_settings/edit/1/0" onclick="return checkProgress()">Email Settings</a></li>
													<li><a href="<?php echo site_url();?>/admin/bill_settings/edit/1/0" onclick="return checkProgress()">Bill Settings</a></li>
													<li><a href="<?php echo site_url();?>/admin/form_settings/edit/1/0" onclick="return checkProgress()">Form Settings</a></li>
													<li><a href="<?php echo site_url();?>/admin/retainer_settings/edit/1/0" onclick="return checkProgress()">Retainer Settings</a></li>-->
													
													<?php if($data == 1) { ?>
														<nav id="primary_nav_wrap">
															<ul>														  
																<li><a href="#">Settings</a>
																	<ul>																	
																		<li><a href="<?php echo site_url();?>admin/admin_settings/edit/1/0" onclick="return checkProgress('<?php echo site_url();?>admin/admin_settings/edit/1/0')">Email Settings</a></li>
																		<li><a href="<?php echo site_url();?>admin/bill_settings/edit/1/0 "onclick="return checkProgress('<?php echo site_url();?>admin/bill_settings/edit/1/0')">Bill Settings</a></li>
																		<li><a href="<?php echo site_url();?>admin/form_settings/edit/1/0" onclick="return checkProgress('<?php echo site_url();?>admin/form_settings/edit/1/0')">Form Settings</a></li>
																		<li><a href="<?php echo site_url();?>admin/retainer_settings/edit/1/0" onclick="return checkProgress('<?php echo site_url();?>admin/retainer_settings/edit/1/0')">Retainer Settings</a></li>
																		<li><a href="<?php echo site_url();?>shipping_billing/shippingSettings" onclick="return checkProgress('<?php echo site_url();?>shipping_billing/shippingSettings')">Shipping Settings</a></li>
																	</ul>
																</li>													  
															</ul>
														</nav>
													<?php } ?>
													<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>" onclick="return checkProgress('<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>')">Change Password</a></li>								   
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>
												</ul>
											</li>
										<?php }else{ ?>
										<li class="dropdown log">
										<a href="#" class="dropdown-toggle menu-tog" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>          
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>home/landing_home" onclick="return checkProgress('<?php echo site_url();?>home/landing_home')">Landing</a></li>
													<?php if($data == 3) { ?>
															<!--<li><a href="<?php echo site_url();?>/patient_profile_prac/" onclick="return checkProgress()">Patient Profile</a></li>-->
													<?php } ?>
													
													<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>" onclick="return checkProgress('<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>')">Change Password</a></li>
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>			  
												</ul>
										</li>				
									<?php	} } ?>
								</ul>
							
								<ul class="nav navbar-nav nav_navbr navbar-right log_mobile">        
									<?php 
										$data = $this->session->userdata('user_type');
										$user_name = $this->session->userdata('ADMIN_NAME');
										$user_name = strtoupper($user_name);
										if(!$data) { ?>				
											<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a class="log" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" onClick="disableNavbar();">LOGIN</a></li>				
										<?php } else { ?>
										<?php if($data == 1 || $data ==2) { ?>
											<li class="dropdown log"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>home/landing_home" onclick="return checkProgress('<?php echo site_url();?>home/landing_home')">Landing</a></li>
													<li><a href="<?php echo site_url();?>admin/open_order/index/0" onclick="return checkProgress('<?php echo site_url();?>admin/open_order/index/0')">Open Orders</a></li>
													<li><a href="<?php echo site_url();?>admin/users" onclick="return checkProgress('<?php echo site_url();?>admin/users')">Users</a></li>     
													<li><a href="<?php echo site_url();?>admin/patients" onclick="return checkProgress('<?php echo site_url();?>admin/patients')"><?php if(@$_SESSION['user_type'] == 1 || @$_SESSION['user_type'] == 2) echo "Patient Profiles"; else echo "My Patients"; ?></a></li>
													<li><a href="<?php echo site_url();?>admin/products" onclick="return checkProgress('<?php echo site_url();?>admin/products')">Herbs</a></li>
													<li><a href="<?php echo site_url();?>admin/retainer/index/0" onclick="return checkProgress('<?php echo site_url();?>admin/retainer/index/0')">Retainer System</a></li>	
													
													<?php if($data == 1) { ?>													
														<li><a href="<?php echo site_url();?>admin/admin_settings/edit/1/0" onclick="return checkProgress('<?php echo site_url();?>admin/admin_settings/edit/1/0')">Email Settings</a></li>
														<li><a href="<?php echo site_url();?>admin/bill_settings/edit/1/0" onclick="return checkProgress('<?php echo site_url();?>admin/bill_settings/edit/1/0')">Bill Settings</a></li>
														<li><a href="<?php echo site_url();?>admin/form_settings/edit/1/0" onclick="return checkProgress('<?php echo site_url();?>admin/form_settings/edit/1/0')">Form Settings</a></li>
														<li><a href="<?php echo site_url();?>admin/retainer_settings/edit/1/0" onclick="return checkProgress('<?php echo site_url();?>admin/retainer_settings/edit/1/0')">Retainer Settings</a></li>
														<li><a href="<?php echo site_url();?>shipping_billing/shippingSettings" onclick="return checkProgress('<?php echo site_url();?>shipping_billing/shippingSettings')">Shipping Settings</a></li>
													<?php } ?>
													<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>" onclick="return checkProgress('<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>')">Change Password</a></li>
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>
												</ul>
											</li>
										<?php } else { ?>
										<li class="dropdown log">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>          
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>/home/landing_home" onclick="return checkProgress('<?php echo site_url();?>home/landing_home')">Landing</a></li>
													<?php if($data == 3) { ?>
															<!--<li><a href="<?php echo site_url();?>/patient_profile_prac/" onclick="return checkProgress()">Patient Profile</a></li>-->
													<?php } ?>
													<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>" onclick="return checkProgress('<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>')">Change Password</a></li>
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>
												</ul>
										</li>				
									<?php	} } ?>
								</ul>                
							</div> 
					<?php
						} else {
					?>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav nav_navbr nav-toper log_desktop">                                      
									<li><a href="<?php echo  base_url(); ?>#myCarousel">HOME</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-what">WHAT WE DO</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-service">HOW IT WORKS</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-safety">SAFETY</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-products">PRODUCTS</a></li>
									<li><a href="<?php echo  base_url(); ?>#section-contact">CONTACT</a></li>					
									
									<li><a class="displayNone" href="#section-about"></a></li>
									<li><a class="displayNone" href="#section-purity"></a></li>
									<li><a class="displayNone" href="#section-faq"></a></li>
									<li><a class="displayNone" href="#section-contact-form"></a></li>
									<li><a class="displayNone" href="#section-vizio"></a></li>
									<li><a class="displayNone" href="#section-form"></a></li>
									<li><a class="displayNone" href="#section-in-touch"></a></li>					
								</ul>
								
								<ul class="nav navbar-nav nav_navbr nav-toper log_mobile">                                       
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>">HOME</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-what">WHAT WE DO</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-service">HOW IT WORKS</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-safety">SAFETY</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-products">PRODUCTS</a>
									</li>
									<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<a href="<?php echo  base_url(); ?>#section-contact">CONTACT</a>
									</li>
									
									<li><a class="displayNone" href="#section-about"></a></li>
									<li><a class="displayNone" href="#section-purity"></a></li>
									<li><a class="displayNone" href="#section-faq"></a></li>
									<li><a class="displayNone" href="#section-contact-form"></a></li>
									<li><a class="displayNone" href="#section-vizio"></a></li>
									<li><a class="displayNone" href="#section-form"></a></li>
									<li><a class="displayNone" href="#section-in-touch"></a></li>					
								</ul>	
								
								<ul class="nav navbar-nav nav_navbr navbar-right log_desktop">			
									<?php 
										$data = $this->session->userdata('user_type');
										$user_name = $this->session->userdata('ADMIN_NAME');
										$user_id = $this->session->userdata('user_id');
										$user_name = strtoupper($user_name);
										if(!$data){ ?>				
											<li><a class="log" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" onClick="disableNavbar();">LOGIN</a></li>			
										<?php }else{ ?>
										<?php if($data == 1 || $data == 2){ ?>
											<li class="dropdown log"> <a href="#" class="dropdown-toggle menu-tog menu-lst" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>		            
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li>
													<li><a href="<?php echo site_url();?>admin/open_order/index/0">Open Orders</a></li>
													<li><a href="<?php echo site_url();?>admin/users">Users</a></li>
													<li><a href="<?php echo site_url();?>admin/patients"><?php if(@$_SESSION['user_type'] == 1 || @$_SESSION['user_type'] == 2) echo "Patient Profiles"; else echo "My Patients"; ?></a></li>
													<li><a href="<?php echo site_url();?>admin/products">Herbs</a></li>	
													<li><a href="<?php echo site_url();?>admin/retainer/index/0">Retainer System</a></li>	
													
													<!--<li><a href="<?php echo site_url();?>/admin/admin_settings/edit/1/0">Email Settings</a></li>
													<li><a href="<?php echo site_url();?>/admin/bill_settings/edit/1/0">Bill Settings</a></li>
													<li><a href="<?php echo site_url();?>/admin/form_settings/edit/1/0">Form Settings</a></li>
													<li><a href="<?php echo site_url();?>/admin/retainer_settings/edit/1/0">Retainer Settings</a></li>-->																										
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
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>
												</ul>
											</li>
										<?php }else{ ?>
										<li class="dropdown log">
										<a href="#" class="dropdown-toggle menu-tog" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>          
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li>  
													<?php if($data == 3) { ?>
															<!--<li><a href="<?php echo site_url();?>/patient_profile_prac/">Patient Profile</a></li>-->
													<?php } ?>
													<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>">Change Password</a></li>
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>			  
												</ul>
										</li>				
									<?php	} } ?>
								</ul>
							
								<ul class="nav navbar-nav nav_navbr navbar-right log_mobile">        
									<?php 
										$data = $this->session->userdata('user_type');
										$user_name = $this->session->userdata('ADMIN_NAME');
										$user_name = strtoupper($user_name);
										if(!$data){ ?>				
											<li data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><a class="log" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" onClick="disableNavbar();">LOGIN</a></li>				
										<?php } else { ?>
										<?php if($data == 1 || $data == 2){ ?>
											<li class="dropdown log"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li>
													<li><a href="<?php echo site_url();?>admin/open_order/index/0">Open Orders</a></li>
													<li><a href="<?php echo site_url();?>admin/users">Users</a></li>
													<li><a href="<?php echo site_url();?>admin/patients">Patient Profiles</a></li>
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
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>
												</ul>
											</li>
										<?php } else { ?>
										<li class="dropdown log">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<?php echo $user_name; ?><span class="glyphicon glyphicon-menu-down" style="padding-left: 5px;"></span></a>          
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url();?>home/landing_home">Landing</a></li>
													<?php if($data == 3) { ?>
															<!--<li><a href="<?php echo site_url();?>/patient_profile_prac/">Patient Profile</a></li>-->
													<?php } ?>
													<li><a href="<?php echo site_url();?>register/do_forgot_pass?user_id=<?php echo $user_id; ?>">Change Password</a></li>
													<li><a id="logout" onclick="return checkProgressLogOut()" class="log">Logout</a></li>
												</ul>
										</li>				
									<?php	} } ?>
								</ul>                
							</div>
					<?php
						}
					?>
				</div>        
			</nav>