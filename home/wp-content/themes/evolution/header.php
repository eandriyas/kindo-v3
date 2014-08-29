<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="kompetisi dengan cara berbeda">
<meta name="keywords" content="kompetisi desain, kompetisi menulis, kompetisi menyanyi, kompetisi blog, kompetisi seo, kompetisi desain kaos, lomba desain, lomba menulis, lomba menyanyi, lomba blog, lomba seo, lomba desain kaos">
<meta name="author" content="T4T" >

<!-- Opengraph
================================================== -->
<link href='https://plus.google.com/106340930600958577441/posts' rel='publisher'/> 
<link href='https://plus.google.com/106340930600958577441/about' rel='author'/> 
<link href='https://plus.google.com/106340930600958577441' rel='me'/>
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
		<script type="text/javascript">DD_belatedPNG.fix('img#logo, span.overlay, a.zoom-icon, a.more-icon, #menu, #menu-right, #menu-content, ul#top-menu ul, #menu-bar, .footer-widget ul li, span.post-overlay, #content-area, .avatar-overlay, .comment-arrow, .testimonials-item-bottom, #quote, #bottom-shadow, #quote .container');</script>
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	
	

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--navbar start-->
<!--style-->
<style>
	.clear {
		height : 5px;
	}
	/*-----------------------*/

	#header {
		display: block;
		height: auto;
		width : 100%;
	}

	.topmenu {
      height: 83px;
	   width : 100%;
	   display: block;
    /*border-bottom: 6px #000 solid;*/
	}
   

  .topmenu ul {
    margin-right : 30px;
    margin-top : 30px;
    float : right;
	}

	.topmenu ul li {
		float : left;
		padding-left: 5px;
		color: #000;
		list-style: none;
    	font-weight : bold;
	}

	.topmenu li.space {
		margin-right : 10px;
		margin-left : 10px;
	}


	.topmenu li a:hover {
		border-bottom: 6px red solid;
	}

	.topmenu li a.topmenu-link {
		text-decoration: none #000;
		font: 13px arial;
		color: #000;
	}
	.topmenu li a:active {
		border-bottom: 6px #000 solid;
	}
	/*-----------------------*/

	.header-red {
      display : block;
		height : 130px;
		width : 100%;
		background : #ed1c24;
	}

.miniheader {
		padding : 5px;
		height : 25px;
		width : 100%;
		background-color : #ed1c24;	
	}
	
	.minilogo {
		float : left;	
		margin-left: 20px;
	}

	.minilogo img {
		float : left;
		margin-right: 5px;
	}

	.minilogo form {
		float : left;	
	}

	.minilogo form input[type="text"] {
		border : 1px #fff solid;
		border-radius: 2px;
		width : 200px;
		margin-top:2px;
	}

	.minimenu {
		float : right;
		margin-right: 20px;
	}
	
	.minilogo a {
		color : #ffffff;
		font-weight : bold;
		font-family : arial;
		font-size : 16px;
		text-decoration : none;	
	}

	.minimenu ul {
	    float : right;
	    margin-top: 2px;
	    margin-right: 20px;
	}

	.minimenu ul li {
		float : left;
		color : #ffffff;
		padding-left: 5px;
		list-style: none;
    	font-weight : bold;
	}

	.minimenu li.space {
		margin-right : 10px;
		margin-left : 10px;
	}
	.minimenu li a.topmenu-link {
		text-decoration: none #000;
		font: 13px arial;
		color : #ffffff;
	}
	.minimenu li a.topmenu-link {
		text-decoration: none #000;
		font: 13px arial;
		color : #ffffff;
	}
</style>

<!--miniheader-->

<div style='height:40px'>
  <div class='miniheader' style='position:fixed;z-index: 100;'>
	<div class='minilogo'>
		<a href='http://www.kompetisiindonesia.com'><img src="http://www.kompetisiindonesia.com/icon-tran.png"/></a>	
		 <form class="navbar-search" style="margin-top:0px" method="get" id="searchform" action="http://Kompetisiindonesia.com/home/">
  	<input type="text" class="search-query" placeholder="Cari kompetisi.." name="s" id="searchinput"/></form>	
	</div>
	<div class='minimenu'>
		<ul>
            <li><a class='topmenu-link' href='http:///www.kompetisiindonesia.com'>Home</a></li>
			<li class='space'>|</li>
      		<li><a class='topmenu-link' href="http://www.kompetisiindonesia.com/home/">Gabung Kompetisi</a></li> 
       		<li class='space'>|</li> 
			<li><a class='topmenu-link' href='http://www.Kompetisiindonesia.com/pasang'>Pasang Kompetisi</a></li>			
            		<li class='space'>|</li>
			<li><a class='topmenu-link' href='http://kompetisiindonesia.com/home/voting-kompetisi-favorit-2013/'>Voting Tahunan</a></li>			
      		<li class='space'>|</li>
      		<li><a class='topmenu-link' href="http://www.kompetisiindonesia.com/home/about">About</a></li>
      		<li class='space'>|</li>       		    
      		<li><a class='topmenu-link' href="https://docs.google.com/forms/d/1ktAvb6X46A1rv8r9NdsajNm-EWZkPyhnSyTRktxciRU/viewform" target="_blank" data-toggle="modal">Error Report</a></li>
		</ul>
	</div>
 </div>
 </div>


	
</div>
<!----navbar start-->

	<div id="page-wrap">
		<header id="main">
			
			<div id="navigation">	
				<div class="container clearfix">
					<nav id="top-menu">
						<?php
							$menuClass = 'nav';
							if ( get_option('evolution_disable_toptier') == 'on' ) $menuClass .= ' et_disable_top_tier';
							$primaryNav = '';
							if (function_exists('wp_nav_menu')) {
								$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
							}
							if ($primaryNav == '') { ?>
								<ul class="<?php echo $menuClass; ?>">
									<?php if (get_option('evolution_home_link') == 'on') { ?>
										<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php echo home_url(); ?>"><?php esc_html_e('Home','Evolution') ?></a></li>
									<?php }; ?>

									<?php show_page_menu($menuClass,false,false); ?>
									<?php show_categories_menu($menuClass,false); ?>
								</ul>
							<?php }
							else echo($primaryNav);
						?>	
					</nav>
					<a href="#" id="mobile_nav" class="closed"><?php esc_html_e( 'Navigation', 'Evolution' ); ?><span></span></a>
					
					
					<div id="bottom-menu-shadow"></div>
				</div> <!-- end .container -->
			</div> <!-- end #navigation -->	
		</header> <!-- end #main -->		
		
		<div id="main-area">
			<div class="container">
			
			<!--google plus follow-->
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
			
			
			
