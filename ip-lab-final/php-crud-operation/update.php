<?php
include 'db.php';

$id = $_GET['id'];
$result = $connection->query("SELECT * FROM student WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $stu_id = $_POST['stu_id'];
    $connection->query("UPDATE student SET name='$name', stu_id='$stu_id' WHERE id=$id");
    echo "Updated successfully. <a href='index.php'>Back</a>";
    exit;
}
?>

<h2>Edit User</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>" required><br><br>
    Student ID: <input type="number" name="stu_id" value="<?= $row['stu_id'] ?>" required><br><br>
    <input type="submit" name="update" value="Update">
</form>
