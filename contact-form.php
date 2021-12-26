<?php

if(isset($_POST['name']) && $_POST['MealOption'] != ''){
    //submit the form
    $userName = $_POST['name'];
    $userlastname = $_POST['lastname'];
    $useremail = $_POST['email'];
    $MealOption = $_POST['MealOption'];
    $usermessage = $_POST['message'];

    $subject = 'Wedding RSVP';
    $to = "mark@laurenmarkwedding.com";
    $body = "From:".$userName. "\r\n" .
        "Lastname:".$userlastname. "\r\n" .
        "email:".$useremail. "\r\n" .
        "Meal:".$MealOption. "\r\n" .
        "Message:".$usermessage. "\r\n";

    mail($to, $subject, $body);
}
