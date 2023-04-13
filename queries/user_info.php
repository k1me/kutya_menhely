<?php
include 'queries/db_connect.php';
$sql1 = "SELECT * FROM user_info WHERE uname = '{$_SESSION["uname"]}'";
$res1 = $conn->query($sql1);       
$row1 = $res1->fetch_assoc();

if ($row1['pfp'] !== NULL && $row1['pfp'] !== "") {
    echo '<img src="img/avatar/'.$row1['pfp'].'" alt="profil-avatar" class="avatar"/>';
} else {
    echo '<img src="img/login_avatar.png" alt="profil-avatar" class="avatar"/>';
} 
echo '<div class="user-info">';
    echo "<h3>Felhasználónév:</h3>";
    echo "<p>{$row1['uname']}</p>";
    echo "<h3>Vezetéknév:</h3>";
    echo "<p>{$row1['last_name']}</p>";
    echo "<h3>Keresztnév:</h3>";
    echo "<p>{$row1['first_name']}</p>";
    echo "<h3>Email:</h3>";
    echo "<p>{$row1['email']}</p>";
    echo "<h3>Születési dátum</h3>";
    echo "<p>{$row1['date_of_birth']}</p>";
$sql2 = "SELECT * FROM adoption WHERE uname = '{$_SESSION["uname"]}'";
$res2 = $conn->query($sql2);
    echo "<h3>Örökbefogadott kutyák:</h3>";
    if ($res2->num_rows > 0) {
        while ($row2 = $res2->fetch_assoc()) {
                echo "<p>{$row2['dname']}</p>";
        }
    } else {
        echo "<p>Nincs örökbefogadott kutyád :(</p>";
    }
    $conn->close();
echo "</div>";
?>