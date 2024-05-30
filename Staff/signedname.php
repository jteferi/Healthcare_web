<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include_once './dbh.inc.php';

if (isset($_COOKIE['userName'])) {
    $username = $_COOKIE['userName'];
    
    // Make use of the $userid variable as needed
    echo $username;

} else {
    // The cookie is not set or has expired
    echo "Sign Up";
}

?>
    
</body>
</html>