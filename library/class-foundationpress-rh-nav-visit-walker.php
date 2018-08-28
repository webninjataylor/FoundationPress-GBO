<?php
/**
 * Customize the output of menus for Foundation right-hand nav for Visit pages
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! class_exists( 'Foundationpress_RH_Nav_Visit_Walker' ) ) :
	class Foundationpress_RH_Nav_Visit_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent  = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
		}
	}
endif;
