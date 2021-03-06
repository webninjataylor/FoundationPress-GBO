<?php
/*
Template Name: GBO - Plain
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php gbo_breadcrumbs(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
			<button id="backToTop" title="Back to Top"><i class="fas fa-arrow-up"></i></button>
		</main>
	</div>
</div>
<?php get_footer();
