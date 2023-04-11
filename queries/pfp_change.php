<?php
    include 'queries/db_connect.php';

    $errors = [];
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    
    if (isset($_POST['feltolt'])) {
        $target = 'img/avatar/';
        $file = $_FILES['pfp']['name'];
        $t_file = $target . basename($file);
        $sql = "UPDATE user_info
                SET pfp = '$file'
                WHERE uname = '{$_SESSION['uname']}'";

        if (mysqli_query($conn, $sql)) {
            move_uploaded_file($_FILES['pfp']['tmp_name'], "$t_file");
        } else {
            $errors[] = '<strong>A kép feltöltése nem sikerült!</strong>';
        }
    }
    mysqli_close($conn);
?>