<?php
    include 'queries/db_connect.php';
    
    $errors = [];
    
    if (isset($_POST['feltolt'])) {
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
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

    $sql = "SELECT * FROM user_info WHERE uname = '{$_SESSION["uname"]}'";
    $res = $conn->query($sql);       
    $row = $res->fetch_assoc();

    if (isset($_POST['torol'])) {
        $sql = "UPDATE user_info
                SET pfp = NULL
                WHERE uname = '{$_SESSION['uname']}'";

        if (mysqli_query($conn, $sql)) {
            if (file_exists("img/avatar/" . $row['pfp'])) {
                if ($row['pfp'] !== NULL && $row['pfp'] !== "") {
                    unlink("img/avatar/" . $row['pfp']);
                }
            }
        } else {
            $errors[] = '<strong>A kép törlése nem sikerült!</strong>';
        }
    }
    mysqli_close($conn);
?>