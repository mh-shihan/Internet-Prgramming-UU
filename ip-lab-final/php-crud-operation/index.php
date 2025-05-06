<?php include 'db.php'; 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['stu_id'])){
    $name = $_POST['name'];
    $stu_id = $_POST['stu_id'];
    // echo''.$name.'<br>'.$stu_id.'';

    $sql = "INSERT INTO student (name, stu_id ) VALUES ('$name', '$stu_id')";
    if ($connection->query($sql) === TRUE) {
        echo "<h2>New record created successfully</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
    
?>


<h2>All Users</h2>
<a href="create.php">+ Add User</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Student id</th><th>Actions</th>
    </tr>

    <?php
    $sql = "SELECT * FROM student";
    $result = $connection->query($sql);
    while ($row = $result->fetch_assoc()):

    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['stu_id'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Update</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
