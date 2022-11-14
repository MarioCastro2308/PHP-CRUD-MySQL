<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tasks WHERE id_task = $id";
    $result = mysqli_query($conection, $query);
    if (!$result) {
        die("Eliminacion Fallida");
    }

    $_SESSION['message'] = 'Task removed succesfully';
    $_SESSION["message_color"] = "success";
    header("Location: index.php");
}
