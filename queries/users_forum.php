<?php
include "queries/db_connect.php";  
$sql = "SELECT * FROM user_info ORDER BY last_name";
$res = $conn->query($sql);       
$row = $res->fetch_assoc();
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        if ($row['uname'] !== 'admin') {
            echo '<div class="user">';
            echo '<div class="user-img">';
                    if ($row['pfp'] !== NULL && $row['pfp'] !== "") {
                        echo '<img src="img/avatar/'.$row['pfp'].'" alt="profil-avatar"  height="50" width="50" class="avatar"/>';
                    } else {
                        echo '<img src="img/login_avatar.png" alt="profil-avatar"  height="50" width="50" class="avatar"/>';
                    }     
                echo '</div>';
                echo '<div class="user-info">';
                    echo "<p>".$row["uname"]."</p>";
                    echo "<p>Teljes név: ".$row["last_name"]." ".$row["first_name"]."</p>";
                    echo "<p> Születési dátum: " .$row["date_of_birth"]."</p>";
                echo '</div>';
            echo '</div>';
            }
        }
} else {
    echo "Nincs még felhasználó!";
}
$conn->close();
?>