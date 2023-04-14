<?php
include 'queries/db_connect.php';

$errors = [];

$sql = "SELECT * FROM topics ORDER BY date DESC";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo '<section style="display:flex; flex-direction:row;">';
            echo '<div class="topic">';
                $id = $row['id'];
                echo '<h3><a href="topic.php?id='.$id.'">'.$row['name'].'</a></h3>';
                echo '<p>' .$row['date'] .'</p>';
                echo '<p style="float:right">' .$row['creator'] .'</p>';
            echo '</div>';
        echo '</section>';
    }
} else {
    echo '<h4>Legyél te az első, létrehoz egy fórumot!</h4>';
}
$conn->close();
?>