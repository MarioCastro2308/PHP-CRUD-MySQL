<?php
include("db.php");

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO tasks (title,description) 
    values ('$title', '$description')";

    $result = mysqli_query($conection, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Task saved succesfully';
    $_SESSION["message_color"] = "success";

    header("Location: index.php");
}
