<?php 
include 'queries/db_connect.php';
$error2 = "<p style='color:red;'><strong>Hibás jelszó!</strong></p>";
if (isset($_POST['torol'])) {
    $presql = "SELECT * FROM users WHERE uname = '{$_SESSION["uname"]}'";
    $presult = $conn->query($presql);       
    $prerow = $presult->fetch_assoc();
    
    $uname = ($_SESSION['uname']);
    $pw = ($_POST['delete']);
    $hashed = hash('sha256', $pw);
    
    if ($hashed === $prerow['passwd']) {
        $sql = "DELETE FROM users WHERE uname = '$uname'";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        header("Location: logout.php");
        exit();
    }
}
?>