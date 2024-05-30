<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <h1>Admin</h1>
    <a href="./displaySchedule.html">Display Schedules </a>

    <div class="links">
        <a href="./displaySchedule.html">Display Schedules </a>
      
    </div>


    <form action="./addschedule.inc.php" method="POST" enctype="multipart/form-data">
        <label for="performance"><p style="font-size: 30px;">Set schedule for staff</p></label>
        <select name="staffname" id = "staffname" >
        <?php
            include("./displaystaff.php");
        ?>
        </select> <br>
        <label for="appointment_date">Choose a date:</label>
        <input type="date" id="appointment_date" name="appointment_date" required>
        <br><br>
        <label for="appointment-time">Choose a time:</label>
        <input type="time" id="appointment_time" name="appointment_time" required>
        <br><br>
        <button type="submit" name="submit" id="submit" class="submit">Add Schedule</button>
    </form>


    
</body>
</html>