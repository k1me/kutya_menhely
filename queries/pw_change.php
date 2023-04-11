<?php
    include 'queries/db_connect.php';

    $errors = [];

    if (isset($_POST["jelszo"])) {
        if (!isset($_POST["passwd"]) || trim($_POST["passwd"]) === "") {
            $errors[] = '<strong>A jelszó megadása</strong><strong style="color:red;">kötelező!</strong>';
        } else if (isset($_POST['passwd']) && isset($_POST['passwd-rep'])) {
            if ($_POST['passwd'] == $_POST['passwd-rep']) {
                $password = $_POST['passwd'];
                $hashed = hash('sha256', $password);
                $sql = "UPDATE users
                        SET passwd = '$hashed'
                        WHERE uname = '{$_SESSION['uname']}'";
                if(mysqli_query($conn, $sql)) {
                    $siker = TRUE;
                    header('Location: logout.php');
                } else {
                    $siker = FALSE;
                }
            } else {
                $errors[] = '<strong>Nem egyeznek a jelszavak!<strong>';
            }
        }
    }
    mysqli_close($conn);
?>