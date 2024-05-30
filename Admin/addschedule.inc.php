<?php

include_once './Connection/dbh.inc.php';

    // If file upload form is submitted 
$statusMsg = 'failed'; 
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $staff_name = $_POST['staffname'];
    
    echo $appointment_date;
    echo $appointment_time;
    echo $staff_name;
     
    if(empty($appointment_date) || empty($appointment_time) || empty($staff_name))
    {



    }
    else{
            $sql = "INSERT INTO Schedule (Date, Time, Staffname) VALUES ('$appointment_date', '$appointment_time', '$staff_name');";
            
            mysqli_query($conn, $sql);
            header("Location: insert.php");

        }
          


?>