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



				<!-- Breadcrumbs -->
        <h2 id="breadcrumbs" class="docs-heading" data-magellan-target="breadcrumbs"><a href="#breadcrumbs"></a>Breadcrumbs</h2>
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li class="disabled">Gene Splicing</li>
                <li><span class="show-for-sr">Current: </span> Cloning</li>
            </ul>
        </nav>
        <hr>


				<!-- Tabs -->
        <h2 id="tabs" class="docs-heading" data-magellan-target="tabs"><a href="#tabs"></a>Tabs</h2>

        <ul class="tabs" data-responsive-accordion-tabs="accordion medium-tabs" id="example-tabs">
            <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
            <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
            <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
            <li class="tabs-title"><a href="#panel4">Tab 4</a></li>
            <li class="tabs-title"><a href="#panel5">Tab 5</a></li>
            <li class="tabs-title"><a href="#panel6">Tab 6</a></li>
        </ul>

        <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="tabs-panel is-active" id="panel1">
                <p>One</p>
                <p>Check me out! I'm a super cool Tab panel with text content! On medium-down screen sizes, this component will transform into an accordion.</p>
            </div>
            <div class="tabs-panel" id="panel2">
                <p>Two</p>
                <img class="thumbnail" src="http://placeimg.com/200/200/arch">
            </div>
            <div class="tabs-panel" id="panel3">
                <p>Three</p>
                <p>Check me out! I'm a super cool Tab panel with text content!</p>
            </div>
            <div class="tabs-panel" id="panel4">
                <p>Four</p>
                <img class="thumbnail" src="http://placeimg.com/200/200/arch">
            </div>
            <div class="tabs-panel" id="panel5">
                <p>Five</p>
                <p>Check me out! I'm a super cool Tab panel with text content!</p>
            </div>
            <div class="tabs-panel" id="panel6">
                <p>Six</p>
                <img class="thumbnail" src="http://placeimg.com/200/200/arch">
            </div>
        </div>
        <hr>



				<?php gbo_breadcrumbs(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
