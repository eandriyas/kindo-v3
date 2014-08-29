<?php
	$et_slider_settings_class = '';	
	$et_slider_auto = 'on' == get_option('evolution_slider_auto') ? 'et_slider_auto' : '';
	
	$et_slider_auto_speed = false !== get_option('evolution_slider_autospeed') ? get_option('evolution_slider_autospeed') : '7000';
	$et_slider_auto_speed = ' et_slider_autospeed_' . $et_slider_auto_speed;
	
	$et_slider_pause = 'on' == get_option('evolution_slider_pause') ? ' et_slider_pause' : '';
	$et_slider_slide = 'slide' == get_option('evolution_slider_animation') ? ' et_slider_slide' : '';
	
	$et_slider_settings_class = $et_slider_auto . $et_slider_auto_speed . $et_slider_pause . $et_slider_slide;
?>
<div class="flex-container">
	<div id="featured" class="flexslider <?php echo $et_slider_settings_class; ?>">
		<ul class="slides">
			<?php
			$arr = array();
			$i=0;
			
			$featured_cat = get_option('evolution_feat_cat'); 
			$featured_num = (int) get_option('evolution_featured_num'); 
		
			if (get_option('evolution_use_pages') == 'false') query_posts("showposts=$featured_num&cat=".get_cat_ID($featured_cat));
			else {
				global $pages_number;
				
				if (get_option('evolution_feat_pages') <> '') $featured_num = count(get_option('evolution_feat_pages'));
				else $featured_num = $pages_number;
				
				query_posts(array
								('post_type' => 'page',
								'orderby' => 'menu_order',
								'order' => 'ASC',
								'post__in' => (array) get_option('evolution_feat_pages'),
								'showposts' => (int) $featured_num
							));
			} ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
			global $post; ?>
				<li>
					<?php
						$width = apply_filters( 'et_featured_slider_width', 960 );
						$height = apply_filters( 'et_featured_slider_height', 368 );
						
						$titletext = get_the_title();
						$thumbnail = get_thumbnail($width,$height,'featured-image',$titletext,$titletext,false,'Featured');
						$thumb = $thumbnail["thumb"]; 
					?>
					<a href="<?php the_permalink(); ?>"><?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, 'featured-image'); ?><span class="overlay"></span></a>
					<p class="flex-caption"><?php truncate_post(330); ?></p>
				</li>
			<?php $i++; endwhile; endif; wp_reset_query(); ?>
		</ul> <!-- end .slides -->
		
		<?php if ( 1 < $featured_num ) { ?>
			<div id="controllers-wrapper">
				<div id="controllers-wrapper-left">
					<div id="controllers-wrapper-right">
						<ul id="controllers" class="clearfix">	
							<?php for ($i = 0; $i < $featured_num; $i++) { ?>
								<li><a href="#"><?php echo $i; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div> <!-- end #controllers-wrapper -->
		<?php } ?>
		
	</div> <!-- end #featured -->
</div> <!-- end .flex-container -->
<div id="featured_shadow"></div>