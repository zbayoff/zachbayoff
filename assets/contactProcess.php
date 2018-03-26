<?php 

$errors = [];

// check if server request was post
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // validate name field
    if (empty($_POST['name'])) {
        $errors[] = ["status" => "error", "field" => "name", "msg" => "Please enter your name."];
    } else {
        $name = $_POST['name'];
    }
    
    // validate email field
    if (empty($_POST['email'])) {
        $errors[] = ["status" => "error", "field" => "email", "msg" => "Please enter your email address."];
    } else {
        $email = $_POST['email'];
    }
    
    // validate message field
    if (empty($_POST['message'])) {
        $errors[] = ["status" => "error", "field" => "message", "msg" => "Please provide me with a brief message."];
    } else {
        $message = $_POST['message'];
    }
    
    if (empty($errors)) {
        
        $errors[] = ["status" => "ok"];
        
        //mail function
        $to = "zrbayoffdev@gmail.com";
        $subject = "zachbayoff.com Message";
        $headers = "From: " . $name . " " . "<".$email.">";
        
        mail($to, $subject, $message, $headers);
        
        echo json_encode($errors);
        
    } else {
        echo json_encode($errors);
    } 
    
}


?>
