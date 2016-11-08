<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a href="<?php echo home_url(); ?>" rel="nofollow" id="header-logo">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 120.5 36.3" style="enable-background:new 0 0 120.5 36.3;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
	.st1{fill:url(#SVGID_1_);}
	.st2{fill:url(#SVGID_2_);}
	.st3{fill:url(#SVGID_3_);}
	.st4{fill:url(#SVGID_4_);}
	.st5{fill:url(#SVGID_5_);}
	.st6{fill:url(#SVGID_6_);}
	.st7{fill:url(#SVGID_7_);}
	.st8{fill:url(#SVGID_8_);}
	.st9{fill:url(#SVGID_9_);}
</style>
<title>rainfocus_logo_white</title>
<g>
	<path class="st0" d="M8.7,23.1l-0.4,1.7c-0.1,0.5-0.7,0.9-1.2,0.8c-0.4-0.1-0.8-0.1-1.2-0.1c-1.8,0-3.1,1.2-3.1,3.4V36H0V23.1h2.8
		v1.5c0.9-1.2,2.3-1.9,3.7-1.8C7.2,22.7,8,22.8,8.7,23.1z"/>
	<path class="st0" d="M20.5,35.9v-1.5c-1,1.2-2.5,1.9-4,1.9c-3.6,0-6.4-2.8-6.4-6.7s2.8-6.7,6.4-6.7c1.6-0.1,3.1,0.6,4,1.9v-1.6h2.8
		V36L20.5,35.9L20.5,35.9z M12.9,29.5c0,2.3,1.5,4.1,3.9,4.1c2.3,0,3.9-1.8,3.9-4.1s-1.6-4.1-3.9-4.1C14.4,25.4,12.9,27.2,12.9,29.5
		z"/>
	<path class="st0" d="M27.7,35.9V23.1h2.8v12.8H27.7z"/>
	<path class="st0" d="M46.9,27.8v8.1h-2.8v-7.2c0-2.2-1.1-3.4-3-3.4c-1.8-0.1-3.2,1.3-3.3,3c0,0.1,0,0.2,0,0.4v7.1H35V23.1h2.8v1.6
		c0.9-1.3,2.4-2,3.9-1.9C44.7,22.7,46.9,24.8,46.9,27.8z"/>
	<path class="st0" d="M56.7,25.6v10.3h-2.8V25.6h-2c-0.6,0-1-0.5-1-1l0,0v-1.5h3v-3c0-2.6,1.3-4.6,4.3-4.6c1.3,0,2.5,0.3,3.6,1
		l-0.6,2.4c-0.9-0.4-1.8-0.7-2.8-0.7c-1.1,0-1.7,0.7-1.7,2v3h4.4v2.6L56.7,25.6z"/>
	<path class="st0" d="M76.7,29.2c0.1,3.8-2.9,7-6.8,7.1c-3.8,0.1-7-2.9-7.1-6.8c-0.1-3.8,2.9-7,6.8-7.1h0.1c3.7-0.1,6.8,2.7,6.9,6.4
		C76.7,29,76.7,29.1,76.7,29.2z M65.8,29.2c0,2.2,1.8,4,4,4s4-1.8,4-4s-1.8-4-4-4C67.6,25.2,65.8,27,65.8,29.2z"/>
	<path class="st0" d="M90.8,24.8L89,26.7c-0.8-0.8-1.9-1.3-3.1-1.3c-2.2,0-3.8,1.7-3.8,4.1s1.6,4.1,3.8,4.1c1.2,0,2.3-0.5,3.2-1.3
		l1.7,1.9c-1.2,1.4-3,2.1-4.8,2c-4.1,0-6.7-2.9-6.7-6.7s2.7-6.7,6.7-6.7C87.8,22.7,89.6,23.4,90.8,24.8z"/>
	<path class="st0" d="M99.8,36.2c-3,0-6-1.7-6-5.8V23h2.8v7.1c0,2.5,1.4,3.4,3.1,3.4s3.1-0.9,3.1-3.4V23h2.8v7.4
		C105.7,34.6,102.8,36.2,99.8,36.2z"/>
	<path class="st0" d="M114.8,25.2c-1.5,0-2.4,0.6-2.4,1.5s0.9,1.2,2.1,1.3l1.3,0.2c2.8,0.4,4.5,1.6,4.5,3.8c0,2.4-2.1,4.2-5.8,4.2
		c-2,0-3.9-0.5-5.5-1.7l1.3-2.1c1.2,0.9,2.7,1.4,4.2,1.3c1.9,0,2.9-0.6,2.9-1.6c0-0.7-0.7-1.2-2.2-1.4l-1.3-0.2
		c-2.9-0.4-4.4-1.7-4.4-3.8c0-2.5,2-4.1,5.3-4.1c1.8,0,3.6,0.4,5.2,1.3l-1.2,2.2C117.5,25.6,116.2,25.2,114.8,25.2z"/>
	<path class="st0" d="M8.7,23.1l-0.4,1.7c-0.1,0.5-0.7,0.9-1.2,0.8c-0.4-0.1-0.8-0.1-1.2-0.1c-1.8,0-3.1,1.2-3.1,3.4V36H0V23.1h2.8
		v1.5c0.9-1.2,2.3-1.9,3.7-1.8C7.2,22.7,8,22.8,8.7,23.1z"/>
	<path class="st0" d="M20.5,35.9v-1.5c-1,1.2-2.5,1.9-4,1.9c-3.6,0-6.4-2.8-6.4-6.7s2.8-6.7,6.4-6.7c1.6-0.1,3.1,0.6,4,1.9v-1.6h2.8
		V36L20.5,35.9L20.5,35.9z M12.9,29.5c0,2.3,1.5,4.1,3.9,4.1c2.3,0,3.9-1.8,3.9-4.1s-1.6-4.1-3.9-4.1C14.4,25.4,12.9,27.2,12.9,29.5
		z"/>
	<path class="st0" d="M27.7,35.9V23.1h2.8v12.8H27.7z"/>
	<path class="st0" d="M46.9,27.8v8.1h-2.8v-7.2c0-2.2-1.1-3.4-3-3.4c-1.8-0.1-3.2,1.3-3.3,3c0,0.1,0,0.2,0,0.4v7.1H35V23.1h2.8v1.6
		c0.9-1.3,2.4-2,3.9-1.9C44.7,22.7,46.9,24.8,46.9,27.8z"/>
	<path class="st0" d="M56.7,25.6v10.3h-2.8V25.6h-2c-0.6,0-1-0.5-1-1l0,0v-1.5h3v-3c0-2.6,1.3-4.6,4.3-4.6c1.3,0,2.5,0.3,3.6,1
		l-0.6,2.4c-0.9-0.4-1.8-0.7-2.8-0.7c-1.1,0-1.7,0.7-1.7,2v3h4.4v2.6L56.7,25.6z"/>
	<path class="st0" d="M76.7,29.2c0.1,3.8-2.9,7-6.8,7.1c-3.8,0.1-7-2.9-7.1-6.8c-0.1-3.8,2.9-7,6.8-7.1h0.1c3.7-0.1,6.8,2.7,6.9,6.4
		C76.7,29,76.7,29.1,76.7,29.2z M65.8,29.2c0,2.2,1.8,4,4,4s4-1.8,4-4s-1.8-4-4-4C67.6,25.2,65.8,27,65.8,29.2z"/>
	<path class="st0" d="M90.8,24.8L89,26.7c-0.8-0.8-1.9-1.3-3.1-1.3c-2.2,0-3.8,1.7-3.8,4.1s1.6,4.1,3.8,4.1c1.2,0,2.3-0.5,3.2-1.3
		l1.7,1.9c-1.2,1.4-3,2.1-4.8,2c-4.1,0-6.7-2.9-6.7-6.7s2.7-6.7,6.7-6.7C87.8,22.7,89.6,23.4,90.8,24.8z"/>
	<path class="st0" d="M99.8,36.2c-3,0-6-1.7-6-5.8V23h2.8v7.1c0,2.5,1.4,3.4,3.1,3.4s3.1-0.9,3.1-3.4V23h2.8v7.4
		C105.7,34.6,102.8,36.2,99.8,36.2z"/>
	<path class="st0" d="M114.8,25.2c-1.5,0-2.4,0.6-2.4,1.5s0.9,1.2,2.1,1.3l1.3,0.2c2.8,0.4,4.5,1.6,4.5,3.8c0,2.4-2.1,4.2-5.8,4.2
		c-2,0-3.9-0.5-5.5-1.7l1.3-2.1c1.2,0.9,2.7,1.4,4.2,1.3c1.9,0,2.9-0.6,2.9-1.6c0-0.7-0.7-1.2-2.2-1.4l-1.3-0.2
		c-2.9-0.4-4.4-1.7-4.4-3.8c0-2.5,2-4.1,5.3-4.1c1.8,0,3.6,0.4,5.2,1.3l-1.2,2.2C117.5,25.6,116.2,25.2,114.8,25.2z"/>
	<path class="st0" d="M8.7,23.1l-0.4,1.7c-0.1,0.5-0.7,0.9-1.2,0.8c-0.4-0.1-0.8-0.1-1.2-0.1c-1.8,0-3.1,1.2-3.1,3.4V36H0V23.1h2.8
		v1.5c0.9-1.2,2.3-1.9,3.7-1.8C7.2,22.7,8,22.8,8.7,23.1z"/>
	<path class="st0" d="M20.5,35.9v-1.5c-1,1.2-2.5,1.9-4,1.9c-3.6,0-6.4-2.8-6.4-6.7s2.8-6.7,6.4-6.7c1.6-0.1,3.1,0.6,4,1.9v-1.6h2.8
		V36L20.5,35.9L20.5,35.9z M12.9,29.5c0,2.3,1.5,4.1,3.9,4.1c2.3,0,3.9-1.8,3.9-4.1s-1.6-4.1-3.9-4.1C14.4,25.4,12.9,27.2,12.9,29.5
		z"/>
	<path class="st0" d="M27.7,35.9V23.1h2.8v12.8H27.7z"/>
	<path class="st0" d="M46.9,27.8v8.1h-2.8v-7.2c0-2.2-1.1-3.4-3-3.4c-1.8-0.1-3.2,1.3-3.3,3c0,0.1,0,0.2,0,0.4v7.1H35V23.1h2.8v1.6
		c0.9-1.3,2.4-2,3.9-1.9C44.7,22.7,46.9,24.8,46.9,27.8z"/>
	<path class="st0" d="M56.7,25.6v10.3h-2.8V25.6h-2c-0.6,0-1-0.5-1-1l0,0v-1.5h3v-3c0-2.6,1.3-4.6,4.3-4.6c1.3,0,2.5,0.3,3.6,1
		l-0.6,2.4c-0.9-0.4-1.8-0.7-2.8-0.7c-1.1,0-1.7,0.7-1.7,2v3h4.4v2.6L56.7,25.6z"/>
	<path class="st0" d="M76.7,29.2c0.1,3.8-2.9,7-6.8,7.1c-3.8,0.1-7-2.9-7.1-6.8c-0.1-3.8,2.9-7,6.8-7.1h0.1c3.7-0.1,6.8,2.7,6.9,6.4
		C76.7,29,76.7,29.1,76.7,29.2z M65.8,29.2c0,2.2,1.8,4,4,4s4-1.8,4-4s-1.8-4-4-4C67.6,25.2,65.8,27,65.8,29.2z"/>
	<path class="st0" d="M90.8,24.8L89,26.7c-0.8-0.8-1.9-1.3-3.1-1.3c-2.2,0-3.8,1.7-3.8,4.1s1.6,4.1,3.8,4.1c1.2,0,2.3-0.5,3.2-1.3
		l1.7,1.9c-1.2,1.4-3,2.1-4.8,2c-4.1,0-6.7-2.9-6.7-6.7s2.7-6.7,6.7-6.7C87.8,22.7,89.6,23.4,90.8,24.8z"/>
	<path class="st0" d="M99.8,36.2c-3,0-6-1.7-6-5.8V23h2.8v7.1c0,2.5,1.4,3.4,3.1,3.4s3.1-0.9,3.1-3.4V23h2.8v7.4
		C105.7,34.6,102.8,36.2,99.8,36.2z"/>
	<path class="st0" d="M114.8,25.2c-1.5,0-2.4,0.6-2.4,1.5s0.9,1.2,2.1,1.3l1.3,0.2c2.8,0.4,4.5,1.6,4.5,3.8c0,2.4-2.1,4.2-5.8,4.2
		c-2,0-3.9-0.5-5.5-1.7l1.3-2.1c1.2,0.9,2.7,1.4,4.2,1.3c1.9,0,2.9-0.6,2.9-1.6c0-0.7-0.7-1.2-2.2-1.4l-1.3-0.2
		c-2.9-0.4-4.4-1.7-4.4-3.8c0-2.5,2-4.1,5.3-4.1c1.8,0,3.6,0.4,5.2,1.3l-1.2,2.2C117.5,25.6,116.2,25.2,114.8,25.2z"/>
	<path class="st0" d="M34.7,12.6c0.8,0.8,2.1,0.9,3,0.1c0,0,0,0,0.1-0.1c0.8-0.8,0.9-2.1,0.1-2.9c0,0,0,0-0.1-0.1
		c-0.8-0.8-2.1-0.9-3-0.1c0,0,0,0-0.1,0.1C33.9,10.4,33.9,11.8,34.7,12.6z"/>
	<path class="st0" d="M25.8,3.6c0.8,0.8,2.1,0.9,3,0.1c0,0,0,0,0.1-0.1c0.8-0.8,0.9-2.1,0.1-2.9c0,0,0,0-0.1-0.1
		c-0.8-0.8-2.1-0.9-3-0.1c0,0,0,0-0.1,0.1C24.9,1.5,24.9,2.8,25.8,3.6z"/>
	<path class="st0" d="M27.7,19.6c0.8,0.8,2.1,0.9,3,0.1c0,0,0,0,0.1-0.1c0.8-0.8,0.9-2.1,0.1-2.9c0,0,0,0-0.1-0.1
		c-0.8-0.8-2.1-0.9-3-0.1c0,0,0,0-0.1,0.1C26.9,17.4,26.9,18.8,27.7,19.6z"/>
	
		<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="2" y1="782.9692" x2="10.6645" y2="782.9692" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st1" d="M8.7,23.1l-0.4,1.7c-0.1,0.5-0.7,0.9-1.2,0.8c-0.4-0.1-0.8-0.1-1.2-0.1c-1.8,0-3.1,1.2-3.1,3.4V36H0V23.1h2.8
		v1.5c0.9-1.2,2.3-1.9,3.7-1.8C7.2,22.7,8,22.8,8.7,23.1z"/>
	
		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="12.0597" y1="783.1833" x2="25.3258" y2="783.1833" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st2" d="M20.5,35.9v-1.5c-1,1.2-2.5,1.9-4,1.9c-3.6,0-6.4-2.8-6.4-6.7s2.8-6.7,6.4-6.7c1.6-0.1,3.1,0.6,4,1.9v-1.6h2.8
		V36L20.5,35.9L20.5,35.9z M12.9,29.5c0,2.3,1.5,4.1,3.9,4.1c2.3,0,3.9-1.8,3.9-4.1s-1.6-4.1-3.9-4.1C14.4,25.4,12.9,27.2,12.9,29.5
		z"/>
	
		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="29.7253" y1="783.088" x2="32.5462" y2="783.088" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st3" d="M27.7,35.9V23.1h2.8v12.8H27.7z"/>
	
		<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="36.9458" y1="782.9333" x2="48.8963" y2="782.9333" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st4" d="M46.9,27.8v8.1h-2.8v-7.2c0-2.2-1.1-3.4-3-3.4c-1.8-0.1-3.2,1.3-3.3,3c0,0.1,0,0.2,0,0.4v7.1H35V23.1h2.8v1.6
		c0.9-1.3,2.4-2,3.9-1.9C44.7,22.7,46.9,24.8,46.9,27.8z"/>
	
		<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="52.9226" y1="779.288" x2="63.8022" y2="779.288" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st5" d="M56.7,25.6v10.3h-2.8V25.6h-2c-0.6,0-1-0.5-1-1l0,0v-1.5h3v-3c0-2.6,1.3-4.6,4.3-4.6c1.3,0,2.5,0.3,3.6,1
		l-0.6,2.4c-0.9-0.4-1.8-0.7-2.8-0.7c-1.1,0-1.7,0.7-1.7,2v3h4.4v2.6L56.7,25.6z"/>
	
		<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="64.8748" y1="782.9355" x2="78.7039" y2="782.9355" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st6" d="M76.7,29.2c0.1,3.8-2.9,7-6.8,7.1c-3.8,0.1-7-2.9-7.1-6.8c-0.1-3.8,2.9-7,6.8-7.1h0.1c3.7-0.1,6.8,2.7,6.9,6.4
		C76.7,29,76.7,29.1,76.7,29.2z M65.8,29.2c0,2.2,1.8,4,4,4s4-1.8,4-4s-1.8-4-4-4C67.6,25.2,65.8,27,65.8,29.2z"/>
	
		<linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="81.2476" y1="783.088" x2="92.8126" y2="783.088" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st7" d="M90.8,24.8L89,26.7c-0.8-0.8-1.9-1.3-3.1-1.3c-2.2,0-3.8,1.7-3.8,4.1s1.6,4.1,3.8,4.1c1.2,0,2.3-0.5,3.2-1.3
		l1.7,1.9c-1.2,1.4-3,2.1-4.8,2c-4.1,0-6.7-2.9-6.7-6.7s2.7-6.7,6.7-6.7C87.8,22.7,89.6,23.4,90.8,24.8z"/>
	
		<linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="95.817" y1="783.188" x2="107.7247" y2="783.188" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st8" d="M99.8,36.2c-3,0-6-1.7-6-5.8V23h2.8v7.1c0,2.5,1.4,3.4,3.1,3.4s3.1-0.9,3.1-3.4V23h2.8v7.4
		C105.7,34.6,102.8,36.2,99.8,36.2z"/>
	
		<linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="110.8943" y1="782.988" x2="122.2512" y2="782.988" gradientTransform="matrix(1 0 0 1 -2 -753.588)">
		<stop  offset="3.000000e-02" style="stop-color:#7D3791"/>
		<stop  offset="0.71" style="stop-color:#E13A5D"/>
		<stop  offset="1" style="stop-color:#EB7800"/>
	</linearGradient>
	<path class="st9" d="M114.8,25.2c-1.5,0-2.4,0.6-2.4,1.5s0.9,1.2,2.1,1.3l1.3,0.2c2.8,0.4,4.5,1.6,4.5,3.8c0,2.4-2.1,4.2-5.8,4.2
		c-2,0-3.9-0.5-5.5-1.7l1.3-2.1c1.2,0.9,2.7,1.4,4.2,1.3c1.9,0,2.9-0.6,2.9-1.6c0-0.7-0.7-1.2-2.2-1.4l-1.3-0.2
		c-2.9-0.4-4.4-1.7-4.4-3.8c0-2.5,2-4.1,5.3-4.1c1.8,0,3.6,0.4,5.2,1.3l-1.2,2.2C117.5,25.6,116.2,25.2,114.8,25.2z"/>
	<path class="st0" d="M8.7,23.1l-0.4,1.7c-0.1,0.5-0.7,0.9-1.2,0.8c-0.4-0.1-0.8-0.1-1.2-0.1c-1.8,0-3.1,1.2-3.1,3.4V36H0V23.1h2.8
		v1.5c0.9-1.2,2.3-1.9,3.7-1.8C7.2,22.7,8,22.8,8.7,23.1z"/>
	<path class="st0" d="M20.5,35.9v-1.5c-1,1.2-2.5,1.9-4,1.9c-3.6,0-6.4-2.8-6.4-6.7s2.8-6.7,6.4-6.7c1.6-0.1,3.1,0.6,4,1.9v-1.6h2.8
		V36L20.5,35.9L20.5,35.9z M12.9,29.5c0,2.3,1.5,4.1,3.9,4.1c2.3,0,3.9-1.8,3.9-4.1s-1.6-4.1-3.9-4.1C14.4,25.4,12.9,27.2,12.9,29.5
		z"/>
	<path class="st0" d="M27.7,35.9V23.1h2.8v12.8H27.7z"/>
	<path class="st0" d="M46.9,27.8v8.1h-2.8v-7.2c0-2.2-1.1-3.4-3-3.4c-1.8-0.1-3.2,1.3-3.3,3c0,0.1,0,0.2,0,0.4v7.1H35V23.1h2.8v1.6
		c0.9-1.3,2.4-2,3.9-1.9C44.7,22.7,46.9,24.8,46.9,27.8z"/>
	<path class="st0" d="M56.7,25.6v10.3h-2.8V25.6h-2c-0.6,0-1-0.5-1-1l0,0v-1.5h3v-3c0-2.6,1.3-4.6,4.3-4.6c1.3,0,2.5,0.3,3.6,1
		l-0.6,2.4c-0.9-0.4-1.8-0.7-2.8-0.7c-1.1,0-1.7,0.7-1.7,2v3h4.4v2.6L56.7,25.6z"/>
	<path class="st0" d="M76.7,29.2c0.1,3.8-2.9,7-6.8,7.1c-3.8,0.1-7-2.9-7.1-6.8c-0.1-3.8,2.9-7,6.8-7.1h0.1c3.7-0.1,6.8,2.7,6.9,6.4
		C76.7,29,76.7,29.1,76.7,29.2z M65.8,29.2c0,2.2,1.8,4,4,4s4-1.8,4-4s-1.8-4-4-4C67.6,25.2,65.8,27,65.8,29.2z"/>
	<path class="st0" d="M90.8,24.8L89,26.7c-0.8-0.8-1.9-1.3-3.1-1.3c-2.2,0-3.8,1.7-3.8,4.1s1.6,4.1,3.8,4.1c1.2,0,2.3-0.5,3.2-1.3
		l1.7,1.9c-1.2,1.4-3,2.1-4.8,2c-4.1,0-6.7-2.9-6.7-6.7s2.7-6.7,6.7-6.7C87.8,22.7,89.6,23.4,90.8,24.8z"/>
	<path class="st0" d="M99.8,36.2c-3,0-6-1.7-6-5.8V23h2.8v7.1c0,2.5,1.4,3.4,3.1,3.4s3.1-0.9,3.1-3.4V23h2.8v7.4
		C105.7,34.6,102.8,36.2,99.8,36.2z"/>
	<path class="st0" d="M114.8,25.2c-1.5,0-2.4,0.6-2.4,1.5s0.9,1.2,2.1,1.3l1.3,0.2c2.8,0.4,4.5,1.6,4.5,3.8c0,2.4-2.1,4.2-5.8,4.2
		c-2,0-3.9-0.5-5.5-1.7l1.3-2.1c1.2,0.9,2.7,1.4,4.2,1.3c1.9,0,2.9-0.6,2.9-1.6c0-0.7-0.7-1.2-2.2-1.4l-1.3-0.2
		c-2.9-0.4-4.4-1.7-4.4-3.8c0-2.5,2-4.1,5.3-4.1c1.8,0,3.6,0.4,5.2,1.3l-1.2,2.2C117.5,25.6,116.2,25.2,114.8,25.2z"/>
	<path class="st0" d="M34.7,12.6c0.8,0.8,2.1,0.9,3,0.1c0,0,0,0,0.1-0.1c0.8-0.8,0.9-2.1,0.1-2.9c0,0,0,0-0.1-0.1
		c-0.8-0.8-2.1-0.9-3-0.1c0,0,0,0-0.1,0.1C33.9,10.4,33.9,11.8,34.7,12.6z"/>
	<path class="st0" d="M25.8,3.6c0.8,0.8,2.1,0.9,3,0.1c0,0,0,0,0.1-0.1c0.8-0.8,0.9-2.1,0.1-2.9c0,0,0,0-0.1-0.1
		c-0.8-0.8-2.1-0.9-3-0.1c0,0,0,0-0.1,0.1C24.9,1.5,24.9,2.8,25.8,3.6z"/>
	<path class="st0" d="M27.7,19.6c0.8,0.8,2.1,0.9,3,0.1c0,0,0,0,0.1-0.1c0.8-0.8,0.9-2.1,0.1-2.9c0,0,0,0-0.1-0.1
		c-0.8-0.8-2.1-0.9-3-0.1c0,0,0,0-0.1,0.1C26.9,17.4,26.9,18.8,27.7,19.6z"/>
</g>
</svg>

					</a><!-- END SVG -->

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
