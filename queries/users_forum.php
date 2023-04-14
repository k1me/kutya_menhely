<?php
include "queries/db_connect.php";  

$sql = "SELECT uname FROM users";
$result = $conn->query($sql);
//itt azért kell a fetch_assoc(), hogy az első elemet [admin] ne legyen kiiratva a felhasználókn közé
$row = $result->fetch_assoc();
if ($result -> num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>".$row["uname"]."</p>";
    }
} else {
    echo "Nincs még felhasználó!";
}
?>