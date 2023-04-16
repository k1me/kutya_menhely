<?php 
include 'db_connect.php';
$error = [];
if (isset($_POST['delete'])) {
    if (isset($_POST['id'])) {
        $id = ($_POST['id']);
        $sql = "DELETE FROM topics WHERE id = '$id'";
        if ($res = $conn->query($sql)) {
            $siker = TRUE;
            header("Location: ../forum.php");
            exit();
        } else {
            $siker = FALSE;
            $error = "<p style='color:red'>Hibás jelszó!</p>";
        }
    }
}
?>