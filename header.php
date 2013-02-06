<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_page('Home') ) { ?><?php bloginfo('description'); echo ' | '; ?><?php } ?><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); echo ' | Seattle, WA'; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="description" content="">
<meta name="author" content="Premium Design Works">
<meta name="language" content="EN">
<meta name="copyright" content="">
<meta name="classification" CONTENT="">
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<!-- BEGIN STYLES -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

<!--[if IE 8]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/exploder8.css" type="text/css" media="all"  />
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/exploder7.css" type="text/css" media="all"  />
<![endif]-->
<!-- END STYLES -->


<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--<link rel="shortcut icon" href="http://www.premiumdw.com/wp-content/themes/premiumdw/flame.ico" />-->
<?php wp_head(); ?> 
</head>
<body>

<!-- START UTILITY -->
<div id="utility-navigation">
    <ul id="utility-navigation-items">
    <?php wp_list_pages('post_title&depth=1&title_li=&meta_key=navigation&meta_value=utility'); ?>
    </ul>
</div>
<!-- END UTILITY -->


<!-- START HEADER -->
<div id="header">
    <h1 id="logo-riw"><a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-riw.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
    <p id="logo-carf"><a href="http://www.carf.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-carf.png" alt="CARF: Commission on Accreditation of Rehabilitation Facilities" /></a></p>
</div>
<!-- END HEADER -->

<!-- START NAVIAGATION -->
<div id="main-navigation">
    <ul id="main-navigation-items">
    <?php wp_list_pages('post_title&depth=1&title_li=&meta_key=navigation&meta_value=main'); ?>
    </ul>
</div>
<!-- END NAVIAGATION -->

<!-- START MIDDLE -->
<div id="middle">
