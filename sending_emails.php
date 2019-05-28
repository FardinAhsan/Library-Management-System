<html>

<head>
    <title>Sending HTML email using PHP</title>
</head>

<body>

<?php
$to = "tanveer.al.noor@gmail.com";
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>Hati.</h1>";

$header = "From:Tareq Aziz\r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}
?>

</body>
</html>