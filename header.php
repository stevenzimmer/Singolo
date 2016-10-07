<?php
/**
 * The header file for theme contains head section, opening body tag, and navigation items.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>


<!-- Head section 
    ================================================== -->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name') ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="/homework/wp-content/themes/singolo/images/dest/favicon.ico">
	<?php wp_head(); ?>
</head> <!-- End head section  -->

<!-- Body 
    ================================================== -->

<body>

<!-- Navigation 
    ================================================== -->

<nav class="navbar navbar-default">
    <div class="container-fluid">
    
        <!-- Brand and toggle grouped for mobile display 
        ================================================== -->
    
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php bloginfo('name') ?><span>*</span></a>
                </div>

                <!-- Menu items 
                ================================================== -->

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="active">HOME<span>·</span></a></li>
                        <li><a href="#services" class="scroll">SERVICES<span>·</span></a></li>
                        <li><a href="#">PORTFOLIO<span>·</span></a></li>
                        <li><a href="#about">ABOUT<span>·</span></a></li>
                        <li><a href="#quote">CONTACT</a></li>
                    </ul>
                </div>
            </div><!-- End menu items -->
        </div>
    </div>
</nav> <!-- End Navigation -->

<div class="bg-bottom purple"></div> <!-- Nav bottom  -->

