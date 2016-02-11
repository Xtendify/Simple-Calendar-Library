<?php

/**
 * Remove post edit link from Simple Calendar calendars.
 */
function simcal_remove_edit_post_link( $link, $id ) {

    // Check if the ID is a post type of calendar and if so return an empty string
    if( get_post_type( $id ) == 'calendar' ) {
        return '';
    }

    // Return the normal link for all other uses
    return $link;
}
add_filter( 'edit_post_link', 'simcal_remove_edit_post_link', 10, 2 );