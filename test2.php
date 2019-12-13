<?php

use PHPMailer\PHPMailer\PHPMailer;

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";
require "../core/registreC.php";
$cin=$_GET["id"];
$registre=new RegistreC();
$list=$registre->recupererregistre($cin);

foreach($list as $row)
{$adress=$row["mail"];
$name=$row["nom"];
}




//create an instance of the PHPMailer
$mail = new PHPMailer;
//set a host
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 3;
//enable smtp
$mail->isSMTP();
//set authetication to true
$mail->SMTPAuth = true;

//set login details for Gmail account
$mail->Username = "mohanedbnmansour@gmail.com";
$mail->Password = "98898685968996mo@@@";

//set type protection
$mail->SMTPSecure = "ssl"; //or we can use TLS

//set a port
$mail->Port = 465; // or 587 if TLS
//set who is sending an email
$mail->setFrom($_GET["email"], "administrator");

//set where we are sending email(reciepent)
$mail->addAddress($adress);

//set html t
$mail->isHTML(true);
//set a subject
$mail->Subject = "avis";
//set body
$mail->Body = "hello ".$name." votre avis a ete bien pris";

//add attachment
//$mail->addAttachment("../annap/img/anna.jpg" , "annap");

if ($mail->send()) {
  

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$sql = "INSERT INTO notif (idc, etat)
VALUES ($id, '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../views/inbox.php');
} else {
    echo "something wrong happened " . $mail->ErrorInfo;;
}
