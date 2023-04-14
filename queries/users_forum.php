<?php
include "queries/db_connect.php";  
$sql1 = "SELECT * FROM user_info WHERE uname = '{$_SESSION["uname"]}'";
$res1 = $conn->query($sql1);       
$row1 = $res1->fetch_assoc();

$sql2 = "SELECT uname FROM users";
$res2 = $conn->query($sql2);
//itt azért kell a fetch_assoc(), hogy az első elemet [admin] ne legyen kiiratva a felhasználók közé
//igen tudom, jön egy ablak névvel rendelkező felhasználó és akkor borul az egész
$row2 = $res2->fetch_assoc();
if ($res2 -> num_rows > 0) {
    while ($row = $res2->fetch_assoc()) {
            echo '<div class="user">';
                echo '<div class="user-img">';
                    if ($row1['pfp'] !== NULL && $row1['pfp'] !== "") {
                        echo '<img src="img/avatar/'.$row1['pfp'].'" alt="profil-avatar"  height="50" width="50" class="avatar"/>';
                    } else {
                        echo '<img src="img/login_avatar.png" alt="profil-avatar"  height="50" width="50" class="avatar"/>';
                    }     
                echo '</div>';
                echo '<div class="user-name">';
                    echo "<p>".$row["uname"]."</p>";
                echo '</div>';
            echo '</div>';
    }
} else {
    echo "Nincs még felhasználó!";
}
$conn->close();
?>