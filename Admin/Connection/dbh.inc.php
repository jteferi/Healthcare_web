<?php
/**
 * dbh.inc.php
 *
 * This script establishes a connection to the MySQL database.
 * It includes the necessary parameters for the connection and
 * handles connection errors.
 *
 * @package    Connection
 * @subpackage DatabaseConnection
 * @author     Your Name
 * @version    1.0
 */

// Database server name
$dbServername = "localhost";

// Database username
$dbUsername = "root";

// Database password
$dbPassword = "";

// Database name
$dbName = "final_project";

// Establishing the connection to the database
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if ($conn->connect_error) {
    // If there is a connection error, terminate the script and display the error message
    die("Connection failed: " . $conn->connect_error);
}
?>
