<?php
// DataBase info
$servername = "127.0.0.1";  //localhost
$username = "root";
$password = "";
$dbname = "internet_programming";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully<br>";
}
// ✅ Create table if not exists
$createTable = "
CREATE TABLE IF NOT EXISTS student_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    stu_id VARCHAR(20) NOT NULL,
    batch VARCHAR(20),
    section VARCHAR(20)
)";

?>