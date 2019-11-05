
<?php 



$to = "rysavydenis@gmail.com";
$Subject ="Message from rysavymusic.com";

$name = $_POST['name'];
$email = $_POST['email']; 
$message = $_POST['message'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";

if(!empty($email) && !empty($name) && !empty($message)) {

mail ($to, $Subject, $message, $headers);
echo "Thank you $name, Your Message has been sent to Rysavy !";

} else { echo "Please fill out the Inputfields.";


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link rel="stylesheet" href="stylingContactAndBooking.css">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link rel="icon" href="images/backgroundlogo.gif" type="image/gif">
    <title>Contact and Booking</title>
</head>
<body style="color:white;background-color: black;font-family: sans-serif;margin:50px;">



</body>
  
