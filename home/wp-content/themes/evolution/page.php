<?php get_header(); ?>

<div id="content_area" class="clearfix">
	<div id="main_content">
		<?php get_template_part('includes/breadcrumbs','index'); ?>
		<?php get_template_part('loop','page'); ?>
		<?php if ( 'on' == get_option('evolution_show_pagescomments') ) comments_template('', true); ?>
	</div> <!-- end #main_content -->
	<?php get_sidebar(); ?>
</div> <!-- end #content_area -->
	
<?php get_footer(); ?>