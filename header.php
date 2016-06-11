<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/app.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7133514/6353752/css/fonts.css" />
</head>
<body <?php body_class( flask_page_name() ); ?>>
	<header class="position--fixed z-index--99 margin--centered height--auto">
		<a href="http://localhost:3000/portfolio/may2016/#home/" class="text-body--bold text--uppercase color--white">
			<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 37.79">
				<path class="logo" style="fill:#ffffff;" d="M47.5,12.58H44.85a7.57,7.57,0,0,0,.6-3A6.74,6.74,0,0,0,43.73,5,7.57,7.57,0,0,0,38,2.83H2.5V7.51h7.94V25.35H2.5V30H31.35v0.62c0,4.27-.79,5.29-4.36,5.29H11.06v4.67H27c3.15,0,5.58-.9,7-2.31,1.87-1.89,2-3.4,2-7.65V30h2a7.56,7.56,0,0,0,6.08-2.53A8.57,8.57,0,0,0,45.84,22a11,11,0,0,0-1.08-4.78H47.5V12.58ZM15.11,17.26H31.35v8.09H15.11V17.26ZM36,25.35V17.26h2c2.23,0,3.36.69,3.36,3.8,0,3.59-1.13,4.29-3.36,4.29H36ZM15.11,12.58V7.51H37.58c2.26,0,3.78.2,3.78,2.33,0,2.52-1.52,2.75-3.78,2.75H15.11Z" transform="translate(-2.5 -2.83)"/>
			</svg>
		</a>
	</header>
	<?php if(is_singular('projects')){ ?>
		<div class="sub-nav row text-body--bold text-xsu-body--medium text--uppercase z-index--1 color--white">
			<div class="left col col-small--12 col-medium--6 padding-lgu-left--medium">
				<?php next_post_link('<strong class="text--underline">%link</strong>'); ?>
			</div>
			<div class="right col col-small--12 col-medium--6 padding-lgu-right--medium">
				<?php previous_post_link('<strong class="text--underline">%link</strong>'); ?>
			</div>
		</div>
	<?php } else{}?>
	<section class="wrapper">