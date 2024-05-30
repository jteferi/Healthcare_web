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

$sqlall = "SELECT Name FROM staff;";
$resultall = mysqli_query($conn, $sqlall);
$resultCheckall = mysqli_num_rows($resultall);



if($resultCheckall > 0) {
    echo '<h1>hello</h1> <br> <br> <br><br>';
    while($row = mysqli_fetch_assoc($resultall)){
        echo '<option value="'.$row['Name'].'"><p style="font-size: 30px;">'.$row['Name'].'</p></option>';

    }
}

?> 

<style>

    .product-container{
        position: relative;
        top: -45px;
        z-index: -1;
    }

    .product{
        position: relative;
        top: 30px;
        z-index: -1;
    }

    .product a{
        text-decoration: none;
        color: #775952;
        font-weight: 600;
        font-size: 18px;
        
    }

    .product img{
        filter: drop-shadow(3px 3px 4px black);
    }


    .product .product-img-two{
    width: 100%;
    height: 90%;
    border-radius: 20px;
    background-color: #88543B;
    object-fit: contain;   
}
</style>


</body>
</html>