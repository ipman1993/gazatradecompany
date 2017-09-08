<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>G-SHOPPER</title>
    
    <style type="text/css">
    
    	.single-widget ul
		{
		    padding: 0 !important;
		}
		.single-widget ul li 
		{
		    margin-top:2px !important;
		    margin-left: 0 !important;
		    padding: 5px 0 !important;
		}
		.more-details
		{
			color: #fff !important;
		}
		.more-details i
		{
			padding-right:5px;
		}
		.more-details:hover
		{
		color: #fff !important;
		border-bottom: 1px #fff solid;
	    }
	    .more-details-1
		{
			color: #888 !important;
			transition: 0.3s;
		}
		.more-details-1 i
		{
			padding-right:5px;
		}
		.more-details-1:hover
		{
		color: #0083C9 !important;
	    }
		#tablets .panel-body ul,#mobiles .panel-body ul,#labtops .panel-body ul
		{
           padding-left: 5px !important;
		}
		#tablets .panel-body ul li,#mobiles .panel-body ul li,#labtops .panel-body ul li
		{
			padding-bottom: 10px;
		}
    </style>

    <?php wp_head(); ?>
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/home/fav-icon2.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-4">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5 col-sm-offset-2">
						<?php
                           wp_nav_menu( array(
						      'menu' => 'header-bottom',
						      'menu_class' => 'nav navbar-nav collapse navbar-collapse',
						      'container_class' => 'mainmenu pull-left',

						  	));
						?>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo  pull-left">
							<a href="http://localhost/Wordpress/"><img src="<?php echo get_template_directory_uri();?>/assets/images/home/logo4.png" class=" img-responsive" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6">
					    <?php
                           wp_nav_menu( array(
						      'menu' => 'header-middle',
						      'menu_class' => 'nav navbar-nav',
						      'container_class' => 'shop-menu pull-right',

						  	));
						?>
					</div>
					<div class="col-sm-4">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->

	<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->