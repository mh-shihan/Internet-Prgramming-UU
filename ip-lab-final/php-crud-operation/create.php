<?php include 'db.php'; ?>

<h2>Add New Student</h2>
<form method="POST" action="index.php">
    Name: <input type="text" name="name" required><br><br>
    ID: <input type="number" name="stu_id" required><br><br>
    <input type="submit" name="sub" value="Submit">
</form>

<a href="index.php">View Student Info</a>
<br>
<?php


// if(isset($_POST['sub'])){
//     $name = $_POST['name'];
//     $stu_id = $_POST['stu_id'];
//     // echo''.$name.'<br>'.$stu_id.'';

//     $sql = "INSERT INTO student (name, stu_id ) VALUES ('$name', '$stu_id')";
//     if ($connection->query($sql) === TRUE) {
//         echo "<h2>New record created successfully</h2>";
//     } else {
//         echo "Error: " . $sql . "<br>" . $connection->error;
//     }

// }


// 






// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
//     echo "User added successfully. <a href='index.php'>View Users</a>";
// }
?>
