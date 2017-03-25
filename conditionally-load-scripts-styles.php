<?php

/**
 * Dequeue Simple Calendar scripts & styles on posts & pages where not in use.
 */
function simcal_dequeue_scripts_styles() {

	// In this example, scripts & styles are dequeued on all posts and pages except the page with a specific slug.
	// Replace with conditional logic you require.
	// Available WP conditional tags: https://codex.wordpress.org/Conditional_Tags
	if ( ! is_page( 'page-slug' ) ) {

		// Dequeue plugin scripts
		wp_dequeue_script( 'simcal-default-calendar' );
		wp_dequeue_script( 'simcal-qtip' );
		wp_dequeue_script( 'simplecalendar-imagesloaded' );
		wp_dequeue_script( 'simcal-moment-timezone' );

		// FullCalendar only
		wp_dequeue_script( 'simcal-fullcal' );
		wp_dequeue_script( 'simcal-fullcal-locale' );
		wp_dequeue_script( 'simcal-fullcal-moment' );
		wp_dequeue_script( 'simcal-fullcal-gcal' );
		wp_dequeue_script( 'simcal-fullcal-grid' );

		// Dequeue plugin styles
		wp_dequeue_style( 'simcal-qtip' );
		wp_dequeue_style( 'simcal-default-calendar-grid' );
		wp_dequeue_style( 'simcal-default-calendar-list' );

		// FullCalendar only
		wp_dequeue_style( 'fullcalendar' );
		wp_dequeue_style( 'simcal-fullcal-grid' );
		wp_dequeue_style( 'simcal-qtip' );
	}
}

add_action( 'wp_print_scripts', 'simcal_dequeue_scripts_styles', 100 );
add_action( 'wp_print_styles', 'simcal_dequeue_scripts_styles', 100 );
