<?php

//----------------------Company Information---------------------

$comany_name = "Round Tours Sri Lanka";
$website_name = "www.roundtoursrilanka.lk";
$comConNumber = "+94 766367605";
$comEmail = "sachithgalle@gmail.com";
$from = 'sachithgalle@gmail.com';


//----------------------CAPTCHACODE---------------------
session_start();


$response = array();
if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {
    $response['status'] = 'incorrect';
    $response['msg'] = 'Security Code is invalid';
    echo json_encode($response);
    exit();
}

//----------------------Visitor Information---------------------


$full_lname = $_POST['full_name'];
$visitor_email = $_POST['email'];
$arrival_time = $_POST['arrival_time'];
$departure_time = $_POST['departure_time'];
$tour_package = $_POST['tour_package'];
$no_of_adults = $_POST['no_of_adults'];
$no_of_children = $_POST['no_of_children'];
$message = $_POST['message'];
$captchacode = $_POST['captchacode'];


$subject = 'New Website Enquiry - Booking Tour Package';


date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'].'/roundtourssrilanka';


include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $visitor_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$headers2 = "From: " . $from . "\r\n";
$headers2 .= "Reply-To: " . $comEmail . "\r\n";
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// Sending mail

if (
        mail($comEmail, $subject, $company_message, $headers) &&
        mail($visitor_email, $subject, $visitor_message, $headers2)) {

    $response['status'] = 'correct';
    $response['msg'] = "Your message has been sent successfully";
//"Your message has been sent successfully"
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'Incorrect';
    $response['msg'] = "Could not be sent your message";
    echo json_encode($response);
    exit();
} 
