<?php
include 'queries/db_connect.php';

$errors = [];

if (isset($_POST["mentes"])) {
    if (!isset($_POST["passwd"]) || trim($_POST["passwd"]) === "") {
        $errors[] = '<strong>A jelszó megadása</strong> <strong style="color:red;">kötelező!</strong>';
    }
}
if (isset($_POST['$passwd']) && isset($_POST['$passwd-rep'])) {
    if ($_POST['$passwd'] == $_POST['$passwd-rep']) {
        $password = $_POST['passwd'];
    }
}
$password = hash('sha256', $password);
$sql = "UPDATE users
        SET passwd = {$_POST['passwd']}
        WHERE uname = {$_SESSION['uname']}";
if(mysqli_query($conn, $sql)) {
    $siker = TRUE;
    header('Location: profil.php');
} else {
    $siker = FALSE;
}
mysqli_close($conn);
?>