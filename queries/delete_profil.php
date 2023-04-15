<?php 
include 'queries/db_connect.php';
$error2 = [];
if (isset($_POST['torol'])) {
    $presql = "SELECT * FROM users WHERE uname = '{$_SESSION["uname"]}'";
    $presult = $conn->query($presql);       
    $prerow = $presult->fetch_assoc();
    
    $uname = ($_SESSION['uname']);
    $pw = ($_POST['delete']);
    $hashed = hash('sha256', $pw);
    
    if ($hashed === $prerow['passwd']) {
        $sql = "DELETE FROM users WHERE uname = '$uname'";
        $result = mysqli_query($conn, $sql);
        $siker = TRUE;
        header("Location: logout.php");
        exit();
    }
    else {
        $siker = FALSE;
        $error2 = "<p style='color:red'>Hibás jelszó!</p>";
    }
}
?>