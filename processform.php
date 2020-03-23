<?php


$fname = $_POST['fname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$education = $_POST['edu'];
$use = $_POST['yesuse'];

$message = "The contact form has just been filled. Here are the details: \n";
$message .= "Name: " . $fname . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Gender: " . $gender . "\n";
$message .= "Address: " . $address . "\n";
$message .= "Level of education: " .$education . "\n";
$message .= "Allow usage of information: " . $use . "\n";


$myfile = fopen($fname . ".doc", "w") or die("Unable to open file!");
fwrite($myfile, $message);
fclose($myfile);
echo "Your file has been created, Please check your parent directory"
?>