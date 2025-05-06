<?php
    echo"Login Page! Login Successful. <br>";
    $userName = $_POST['name'];
    $stuId = $_POST['stu_id'];
    $password = $_POST['password'];
    echo "Name: " .$userName ."<br>";
    echo "Student ID: " .$stuId ."<br>";
    echo "Password: " .$password;

?>