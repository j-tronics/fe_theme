<?php

function contact_form_submission()
{
    $labels = array(
        'name' => _x('Form Submissions', 'post type general name'),
        'singular_name' => _x('Contact Form Submission', 'post type singular name'),
        'menu_name' => 'Contact Form Submissions'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Holds our users contact form submissions',
        'public' => false,
        'exclude_from_serach' => true,
        'show_ui' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    );
    register_post_type('fe_contact_form', $args);
}

add_action('init', 'contact_form_submission');

function send_form_callback()
{
    $nonce = $_POST['contact_form_nonce'];
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $phone_number = $_POST['contact_phone_number'];
    $source_of_introduction = $_POST['source_of_introduction'];
    $event_date = $_POST['event_date'];
    $event_location = $_POST['event_location'];
    $contact_message = $_POST['contact_message'];
    $budget = $_POST['radio_budget_input'];

    try {
        if (!wp_verify_nonce($nonce, 'contact_form_nonce') || empty($name) || empty($email) || empty($contact_message)) {
            throw new Exception('Bad form parameters. Check the markup to make sure you are naming the inputs correctly.');
        }
        if (!is_email($email)) {
            throw new Exception('Email address not formatted correctly.');
        }

        $post_content =
            "Name: " . $name . "\n\n" .
            "Email: " . $email . "\n\n" .
            "Phone Number: " . $phone_number . "\n\n" .
            "Source of Introduction: " . $source_of_introduction . "\n\n" .
            "Event Date: " . $event_date . "\n\n" .
            "Event Location: " . $event_location . "\n\n" .
            "Message: " . $contact_message . "\n\n" .
            "Budget: " . $budget . "\n\n";

        $headers = 'From: FE Website Contact Form Submission <contact@floralevents.com>';
        $send_to = "bill@floralevents.com";
        $subject = "Contact Form: " . $name;
        $message = $post_content;

        $postarr = array(
            'post_author' => "ncrmro",
            'post_title' => "Submitted by: " . $name,
            'post_type' => "fe_contact_form",
            'post_content' => $post_content
        );

        wp_insert_post($postarr, false);


        if (wp_mail($send_to, $subject, $message, $headers)) {
            echo json_encode(array('status' => 'success', 'message' => 'Contact message sent.'));
            exit;
        } else {
            throw new Exception('Failed to send email. Check AJAX handler.');
        }
    } catch (Exception $e) {
        echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        exit;
    }

}

add_action("wp_ajax_contact_send", "send_form_callback");
add_action("wp_ajax_nopriv_contact_send", "send_form_callback");