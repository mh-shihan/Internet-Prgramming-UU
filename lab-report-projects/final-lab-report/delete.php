<?php include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM student_info WHERE id=$id");
echo "Record deleted successfully<br>";
header("Location: index.php");
exit;
?>