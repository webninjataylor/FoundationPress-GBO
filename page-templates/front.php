<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="download large button sites-button hide-for-small-only" href="https://github.com/olefredrik/foundationpress">Download FoundationPress</a>
		</div>

		<div class="watch">
			<span id="stargazers"><a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a></span>
			<span id="twitter"><a href="https://twitter.com/olefredrik">@olefredrik</a></span>
		</div>
	</div>

</header>

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



<!-- GBO: Random Hero Image -->
<?php $catquery = new WP_Query( 'category_name=home-page-hero&posts_per_page=1&orderby=rand' ); ?>
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
		<div class="front-hero"><?php the_content(); ?></div> <!-- Can use the_title() and the_permalink() too -->
	<?php endwhile; ?>
<?php wp_reset_postdata(); ?>



<!-- GBO: News Cards ... TODO: Something here is breaking the sticky header -->
<div class="main-container">
  <div class="main-grid">
		<div class="cards-container">
			<?php $catquery = new WP_Query( 'category_name=home-page-card&posts_per_page=6' ); ?>
				<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
					<div class="card"><?php the_content(); ?></div> <!-- Can use the_title() and the_permalink() too -->
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>




<?php get_footer();
