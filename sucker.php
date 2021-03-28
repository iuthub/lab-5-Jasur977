<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
       ?> <h1>Thanks suckers</h1>
        <p>Your information is has been recorded</p>
       <?php echo "Name: ", $name ;
    }
}
?>
<br>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $group = $_REQUEST['group'];
    if (empty($group)) {
        echo "Section is empty";
    } else {
        echo "Section:", $group;
    }
}
?>
<br>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $visa = $_REQUEST['numbers'];
    if (empty($visa)) {
        echo "Visa card is empty";
    } else {
        echo "Visa Number:", $visa ;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $card = $_REQUEST['cards'];
    if (empty($card)) {
        echo "Choose your card";
    } else {
        echo "Visa type:", $card;
    }
}
?>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $name ;
fwrite($myfile, $txt);
$txt= $group;
fwrite($myfile, $txt);
$txt = $visa;
fwrite($myfile, $txt);
$txt = $card;
fwrite($myfile, $txt);

?>


</body>
</html>