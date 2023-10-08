<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create an email message
    $to = "sinizahir@gmail.com"; // Replace with your email address
    $subject = "Inquiry from $name";
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Message:\n$message";

    // Send the email
    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Thank you for your inquiry. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your inquiry.";
    }
} else {
    // Redirect back to the form if accessed directly without POST
    header("Location: index.html");
    exit();
}*/


if(isset($name) || isset($email) || isset($subject) || isset($message) ){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    
    
    $mailheader = "From:" .$name."<".$email.">\r\n";
    
    $recipient = "sinikk92@gmail.com";
    
    mail($recipient, $subject, $message, $mailheader)
    or die("Error");
    
    echo("message send");
    

}


?>
