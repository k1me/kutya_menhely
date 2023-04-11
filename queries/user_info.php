<?php
include 'queries/db_connect.php';
$sql = "SELECT * FROM user_info WHERE uname = '{$_SESSION["uname"]}'";
$res = $conn->query($sql);       
$row = $res->fetch_assoc();                 
if ($row['pfp'] !== NULL && $row['pfp'] !== "") {
    echo '<img src="img/avatar/'.$row['pfp'].'" alt="profil-avatar" class="avatar"/>';
} else {
    echo '<img src="img/login_avatar.png" alt="profil-avatar" class="avatar"/>';
} 
echo '<div class="user-info">';
    echo "<h3>Felhasználónév:</h3>";
    echo "<p>{$row['uname']}</p>";
    echo "<h3>Vezetéknév:</h3>";
    echo "<p>{$row['last_name']}</p>";
    echo "<h3>Keresztnév:</h3>";
    echo "<p>{$row['first_name']}</p>";
    echo "<h3>Email:</h3>";
    echo "<p>{$row['email']}</p>";
    echo "<h3>Születési dátum</h3>";
    echo "<p>{$row['date_of_birth']}</p>";
    $conn->close();
echo "</div>";
?>