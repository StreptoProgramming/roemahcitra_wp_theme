<?php

function exclude_category( $query ) {
$idObj = get_category_by_slug('testimoni'); 
$id = $idObj->term_id;
if ( $query->is_home() && $query->is_main_query() ) {
$query->set( 'cat', '-'.$id );
}
}
add_action( 'pre_get_posts', 'exclude_category' );
?>