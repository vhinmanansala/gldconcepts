<?php 

add_action( 'init', function() {
    register_extended_post_type( 'project' );
    register_extended_taxonomy( 'project_type', 'project' );
});