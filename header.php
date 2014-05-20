<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="generator" content="Anchor CMS">
		
		<title><?php echo page_title('TURN BACK'); ?> | <?php echo site_name(); ?></title>
		<meta name="description" content="<?php echo site_description(); ?>">
		
		<link href="<?php echo theme_url('css/style.css'); ?>"  rel="stylesheet" media="screen" type="text/css" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">
		
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>

	<body>
        <header class="primary-header" style="background-color:<?php echo site_meta('header_color', '#37d1b1'); ?>">
            <div class="title">
                <?php echo site_meta('header_code', '<a href="/thinks" class="logo"> public <img src="/img/logo.png"> science</a>'); ?>
            </div>
		</header>

