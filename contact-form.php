<?php

//response generation function

$response = "";

//function to generate response
function generate_response($type, $message){
    global $response;

    if($type == "success")

        $response = "<div class='success'>{$message}</div>";
    else
        $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has bee    n sent.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];


$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
        //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            generate_response("error", $email_invalid);
        else //email is valid
        {
            //validate presence of name and message
            if(empty($name) || empty($message)){
                generate_response("error", $missing_content);
            }
            else //ready to go!
            {
                $sent = mail($to, $subject, $message, $headers);
                if($sent) generate_response("success", $message_sent); //message sent!
                else generate_response("error", $message_unsent); //message wasn't sent
            }
        }
    }
}
else if ($_POST['submitted']) generate_response("error", $missing_content);

?>