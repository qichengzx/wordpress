<?php
/*
* The template for displaying all pages
*/
?>
<?php get_header(); ?>
<nav id="breadcrumb">
	<?php seobreadcrumbs();?>
</nav>
<section id="page-search" class="clearfix">
	<div class="warp">
		<div id="content">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( '搜索结果: %s', '' ), get_search_query() ); ?></h1>
			</header>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'loop', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'loop', 'none' ); ?>
		<?php endif; ?>
		</div><!-- #content -->
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
