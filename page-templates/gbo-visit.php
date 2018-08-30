<?php
/*
Template Name: GBO - Visit
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php gbo_breadcrumbs(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
			<button id="backToTop" title="Back to Top"><i class="fas fa-arrow-up"></i></button>
		</main>
		<?php foundationpress_rh_nav_visit(); ?>
	</div>
</div>
<?php get_footer();
