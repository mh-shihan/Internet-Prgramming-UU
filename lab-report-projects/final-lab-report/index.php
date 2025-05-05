<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <title>Final Lab Report</title>
</head>
<body>
    <!--  Chechin Insertion -->
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['stu_id'], $_POST['batch'], $_POST['section'])){
        $name = $_POST['name'];
        $stu_id = $_POST['stu_id'];
        $batch = $_POST['batch'];
        $section = $_POST['section'];
    
        $sql = "INSERT INTO student_info (name, stu_id, batch, section) VALUES ('$name', '$stu_id', '$batch', '$section')";
        if ($conn->query($sql) === TRUE) {
            echo "<h2>New record created successfully</h2>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
  
    ?>
    <!-- Data  Save using form Start--> 
<h2 class="text-center text-3xl font-medium">All Student</h2>
<p class="text-center"><a class="text-center text-blue-600 underline font-semibold" href="create.php">+ Add User</a></p>
</div>
<div class="overflow-x-auto w-1/2 mx-auto">
    <table class="table w-full">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Stu_ID</th>
                <th>Batch</th>
                <th>Section</th>
                <th>Actions</th>
            </tr>
        </thead>
    <tbody>

    <?php
    $result = $conn->query("SELECT * FROM student_info");
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['stu_id'] ?></td>
        <td><?= $row['batch'] ?></td>
        <td><?= $row['section'] ?></td>
        <td>
            <a class="text-green-500 font-semibold p-2 " href="update.php?id=<?= $row['id'] ?>">Edit</a> |
            <a class="text-red-500 font-semibold p-2" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</div>
</body>
</html>

