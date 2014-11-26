<?php
date_default_timezone_set('Asia/Calcutta');
$current_url = current_url();
$page_name = uri_string();
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? $title : "Codebibber"  ?></title>
	<meta name="description" content="<?php echo isset($meta_description) ? $meta_description : ""  ?>" />
	<meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : ""  ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/media-query.css">
	<meta name="viewport" content="width=device-width">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- for internet explorer 8 -->
	<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<!-- // end for internet explorer 8 -->

	
	<!-- add css for slider -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/flexslider.css">
	<!-- // end css for slider -->

	<!-- add basic jquery -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
	<!-- // end add basic jquery -->
	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>


	<!-- use favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>images/favicon-icon.ico"/>
	<!-- // end use favicon -->
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-48091371-1', 'codebibber.com');
	  ga('send', 'pageview');

	</script>

</head>
<body onload="initialize()">
<div class="container-fluid">

	<div class="top-header">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-centered">

				<!-- top header social icons section -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-8 col-md-offset-8">
						<ul class="social-icon">
							<li>
								<a href="https://www.facebook.com/code.bibber" target="_blank" class="facebook">
									<i></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/codebibber" target="_blank" class="twitter">
									<i></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/CodeBibber" target="_blank" class="youtube">
									<i></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/104906034444512211767/about" target="_blank" class="googleplus">
									<i></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/in/codebibber" target="_blank" class="linkedin">
									<i></i>
								</a>
							</li>
							<li>
								<a href="http://www.pinterest.com/codebibber/" target="_blank" class="pinterest">
									<i></i>
								</a>
							</li>

							<!-- <li>
								<a href="#search" class="search-icon">
									<i></i>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
				<!-- // end top header social icons section -->

				<!-- logo section -->
				<div class="logo">
					<a href="<?php echo base_url(); ?>">
						<img src="<?php echo base_url(); ?>images/logo.png" alt="Logo Image" >
						<div class="logo-name">CODE <span>BIBBER</span></div>
					</a>
				</div>
				<!-- // end logo section -->

			</div>
		</div>
	</div>

	<div class="mobile-menu-outer">
		<div class="row mobile-menu">
			<div class="col-lg-12 col-md-12">
				
				<div class="logo">
					<a href="<?php echo base_url(); ?>">
						<img src="<?php echo base_url(); ?>images/logo-white.png" alt="Logo Image" >
						<div class="logo-name">CODE <span>BIBBER</span></div>
					</a>
				</div>
				<div class="menu-icon">
					<a href="#">
						<img src="<?php echo base_url(); ?>images/menu-nav.png" alt="">
					</a>
				</div>
				<ul class="mobile-menu-nav">
					<li>
						<a href="<?php echo base_url(); ?>services" >
							SERVICES
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>folio" >
							FOLIO
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>company" >
							COMPANY
						</a>
					</li>
				
					<!-- <li>
						<a href="<?php echo base_url(); ?>news">
							News
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>blog">
							Blog
						</a>
					</li> -->
					
					<li>
						<a href="<?php echo base_url(); ?>contact">
							Contact Us
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>quote">
							Get a Quote
						</a>
					</li>
				</ul>
			</div>
		</div><!-- // end mobile-menu -->
	</div><!-- // end mobile-menu-outer -->


	<!-- menu section -->
	<div class="row main-menu">
		<div class="col-lg-10 col-md-10 col-sm-11 col-centered">
			<ul class="ft-lt">
				<li>
					<a href="<?php echo base_url(); ?>services" <?php echo ($page_name == 'services' || $page_name == 'services/web-development-service' || $page_name == 'services/user-interface-design-service'|| $page_name == 'services/mobile-development-service' || $page_name == 'services/enterprise-mobility-service' || $page_name == 'services/digital-marketing-agency') ? 'class="active"' : '' ?>>
						SERVICES
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>folio" <?php echo $page_name == 'folio' ? 'class="active"' : '' ?>>
						FOLIO
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>company" <?php echo $page_name == 'company' ? 'class="active"' : '' ?>>
						COMPANY
					</a>
				</li>
			</ul>
			<ul class="ft-rt">
				<!-- <li>
					<a href="<?php echo base_url(); ?>news"  <?php echo $page_name == 'news' ? 'class="active"' : '' ?>>
						News
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>blog"  <?php echo $page_name == 'blog' ? 'class="active"' : '' ?>>
						Blog
					</a>
				</li> -->
				<li>
					<a href="<?php echo base_url(); ?>quote" <?php echo $page_name == 'quote' ? 'class="active"' : '' ?>>
						Get a Quote
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>contact" <?php echo $page_name == 'contact' ? 'class="active"' : '' ?>>
						Contact Us
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- // end menu section -->

	<div class="row second-menu">
		<div class="col-lg-10 col-centered">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<div class="logo">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/logo-white.png" alt=""></a>
				</div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<ul class="first">
					<li>
						<a href="<?php echo base_url(); ?>services" <?php echo ($page_name == 'services' || $page_name == 'services/web-development-service' || $page_name == 'services/user-interface-design-service'|| $page_name == 'services/mobile-development-service' || $page_name == 'services/enterprise-mobility-service' || $page_name == 'services/digital-marketing-agency')  ? 'class="active"' : '' ?>>
							SERVICES
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>folio" <?php echo $page_name == 'folio' ? 'class="active"' : '' ?>>
							FOLIO
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>company" <?php echo $page_name == 'company' ? 'class="active"' : '' ?>>
							COMPANY
						</a>
					</li>
				
					<!-- <li>
						<a href="<?php echo base_url(); ?>news" <?php echo $page_name == 'news' ? 'class="active"' : '' ?>>
							News
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>blog" <?php echo $page_name == 'blog' ? 'class="active"' : '' ?>>
							Blog
						</a>
					</li> -->
					
					<li>
						<a href="<?php echo base_url(); ?>contact" <?php echo $page_name == 'contact' ? 'class="active"' : '' ?>>
							Contact Us
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>quote" <?php echo $page_name == 'quote' ? 'class="active"' : '' ?>>
							Get a Quote
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	

		
	
