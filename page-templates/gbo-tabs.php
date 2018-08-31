<?php
/*
Template Name: GBO - Tabs
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php gbo_breadcrumbs(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>



				<!-- Tabs -->
        <ul class="tabs" data-responsive-accordion-tabs="accordion medium-tabs" id="example-tabs">
            <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
            <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
            <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
        </ul>

        <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="tabs-panel is-active" id="panel1">
                <p>Content for Tab 1</p>
            </div>
            <div class="tabs-panel" id="panel2">
                <p>Content for Tab 2</p>
            </div>
            <div class="tabs-panel" id="panel3">
                <p>Content for Tab 3</p>
            </div>
        </div>




				<?php comments_template(); ?>
			<?php endwhile; ?>
			<button id="backToTop" title="Back to Top"><i class="fas fa-arrow-up"></i></button>
		</main>
	</div>
</div>
<?php get_footer();
