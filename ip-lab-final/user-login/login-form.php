
<form action="login.php" method="POST">
    <label for="name">User Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="stu_id">Student ID</label>
    <input type="number" name="stu_id" id="stu_id">
    <br>
    <label for="password">Passowrd</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Login">
</form>
<?php


    echo"Hello World! This is the login form page.";
?>