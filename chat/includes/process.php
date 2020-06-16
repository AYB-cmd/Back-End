<?php

// Take Data

if (isset($_POST['submit'])) {
    include 'dbh.php';
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    
    if (empty($user) || empty($message) ) {
        header("Location: ../index.php?signup=empty");
    }
    else {
        $sql_TD =" INSERT INTO shouts (user,msg) VALUES ('$user','$message');";

        mysqli_query($conn,$sql_TD);
        header("Location: ../index.php?sent=success");
    }
}
else {
    header("Location: ../index.php?signup=error");
}


