<?php 

if(isset$_POST['name']) && $_POST['MealOption'] != ''){
   
   
   
    //submit the form
$userName = $_POST['name'];
$userlastname = $_POST['lastname'];
$useremail = $_POST['email'];
$MealOption = $_POST['MealOption'];
$usermessage = $_POST['message'];


$to = "mark@laurenmarkwedding.com";
$body = "";

$body .= "From:".userName. "\r\n";
$body .= "Lastname:".userlastname. "\r\n";
$body .= "email:".useremail. "\r\n";
$body .= "Meal:".MealOption. "\r\n";


mail($to, $useremail,$body);
}








?>