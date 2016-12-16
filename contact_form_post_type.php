<?php
function contact_form_submission() {
    $labels = array(
        'name'               => _x( 'Form Submissions', 'post type general name' ),
        'singular_name'      => _x( 'Contact Form Submission', 'post type singular name' ),
        'menu_name'          => 'Contact Form Submissions'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our users contact form submissions',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor'),
        'has_archive'   => true,
    );
    register_post_type( 'fe_contact_form_item', $args ); }
    add_action( 'init', 'contact_form_submission' );