<?php 
/*
Template Name: Sitemap Page
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
		
		<div id="sitemap" class="responsive">
			<div class="sitemap-col">
				<h2><?php esc_html_e('Pages','Evolution'); ?></h2>
				<ul id="sitemap-pages"><?php wp_list_pages('title_li='); ?></ul>
			</div> <!-- end .sitemap-col -->
			
			<div class="sitemap-col">
				<h2><?php esc_html_e('Categories','Evolution'); ?></h2>
				<ul id="sitemap-categories"><?php wp_list_categories('title_li='); ?></ul>
			</div> <!-- end .sitemap-col -->
			
			<div class="sitemap-col<?php if (!$fullwidth) echo ' last'; ?>">
				<h2><?php esc_html_e('Tags','Evolution'); ?></h2>
				<ul id="sitemap-tags">
					<?php $tags = get_tags();
					if ($tags) {
						foreach ($tags as $tag) {
							echo '<li><a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a></li> ';
						}
					} ?>
				</ul>
			</div> <!-- end .sitemap-col -->
			
			<?php if (!$fullwidth) { ?>
				<div class="clear"></div>
			<?php } ?>
			
			<div class="sitemap-col<?php if ($fullwidth) echo ' last'; ?>">
				<h2><?php esc_html_e('Authors','Evolution'); ?></h2>
				<ul id="sitemap-authors" ><?php wp_list_authors('show_fullname=1&optioncount=1&exclude_admin=0'); ?></ul>
			</div> <!-- end .sitemap-col -->
		</div> <!-- end #sitemap -->
		
		<div class="clear"></div>
	</div> <!-- end #main_content -->
	<?php if ( !$fullwidth ) get_sidebar(); ?>
</div> <!-- end #content_area -->
	
<?php get_footer(); ?>