<?php 
/*
Template Name: Search Page
*/
?>
<?php 
	$et_ptemplate_settings = array();
	$et_ptemplate_settings = maybe_unserialize( get_post_meta($post->ID,'et_ptemplate_settings',true) );
	
	$fullwidth = isset( $et_ptemplate_settings['et_fullwidthpage'] ) ? (bool) $et_ptemplate_settings['et_fullwidthpage'] : false;
?>

<?php get_header(); ?>

<div id="content_area" class="clearfix<?php if ( $fullwidth ) echo ' fullwidth'; ?>">
	<div id="main_content">
		<?php get_template_part('includes/breadcrumbs','index'); ?>
		<?php get_template_part('loop','page'); ?>
					
		<div id="et-search" class="responsive">
			<div id="et-search-inner" class="clearfix">
				<p id="et-search-title"><span><?php esc_html_e('search this website','Evolution'); ?></span></p>
				<form action="<?php echo home_url(); ?>" method="get" id="et_search_form">
					<div id="et-search-left">
						<p id="et-search-word"><input type="text" id="et-searchinput" name="s" value="<?php esc_attr_e('search this site...','Evolution'); ?>" /></p>
														
						<p id="et_choose_posts"><label><input type="checkbox" id="et-inc-posts" name="et-inc-posts" /> <?php esc_html_e('Posts','Evolution'); ?></label></p>
						<p id="et_choose_pages"><label><input type="checkbox" id="et-inc-pages" name="et-inc-pages" /> <?php esc_html_e('Pages','Evolution'); ?></label></p>
						<p id="et_choose_date">
							<select id="et-month-choice" name="et-month-choice">
								<option value="no-choice"><?php esc_html_e('Select a month','Evolution'); ?></option>
								<?php 
									global $wpdb, $wp_locale;
									
									$selected = '';
									$query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC";
									
									$arcresults = $wpdb->get_results($query);
																										
									foreach ( (array) $arcresults as $arcresult ) {
										if ( isset($_POST['et-month-choice']) && ( $_POST['et-month-choice'] == ($arcresult->year . $arcresult->month) ) ) {
											$selected = ' selected="selected"';
										}
										echo "<option value='{$arcresult->year}{$arcresult->month}'{$selected}>{$wp_locale->get_month($arcresult->month)}" . ", {$arcresult->year}</option>";
										if ( $selected <> '' ) $selected = '';
									}
								?>
							</select>
						</p>
					
						<p id="et_choose_cat"><?php wp_dropdown_categories('show_option_all=Choose a Category&show_count=1&hierarchical=1&id=et-cat&name=et-cat'); ?></p>
					</div> <!-- #et-search-left -->
					
					<div id="et-search-right">
						<input type="hidden" name="et_searchform_submit" value="et_search_proccess" />
						<input class="et_search_submit" type="submit" value="<?php esc_attr_e('Submit','Evolution'); ?>" id="et_search_submit" />
					</div> <!-- #et-search-right -->
				</form>
			</div> <!-- end #et-search-inner -->
		</div> <!-- end #et-search -->
		
		<div class="clear"></div>
	</div> <!-- end #main_content -->
	<?php if ( !$fullwidth ) get_sidebar(); ?>
</div> <!-- end #content_area -->
	
<?php get_footer(); ?>