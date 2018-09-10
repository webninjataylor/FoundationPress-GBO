<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<!-- GBO: Random Hero Image -->
	<?php $catquery = new WP_Query( 'category_name=big-story&posts_per_page=1&orderby=rand' ); ?>
		<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?> <!-- Can use the_title() and the_permalink() too -->
		<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</header>

<!-- GBO: This is the page content which becomes the "Informational Interlude" -->
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<!-- GBO: News Cards -->
<div class="main-container">
  <div class="main-grid">
		<div class="cards-container">
			<?php $catquery = new WP_Query( 'category_name=front-page-news&posts_per_page=6' ); ?>
				<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
					<div class="card">
						<div class="card-content">
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
						</div>
					</div> <!-- Can use the_title() and the_permalink() too -->
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer();
