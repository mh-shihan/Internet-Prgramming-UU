<?php
include 'db.php';

$id = $_GET['id'];
$sql= "DELETE FROM student WHERE id=$id";
if($connection->query($sql) ===TRUE){
    echo"Student deleted Successfulley";
}

header("Location: index.php");
?>

