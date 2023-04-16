<?php
global $conn;

include 'queries/db_connect.php';

$errors = [];

$sql1 = "SELECT * FROM topics ORDER BY date DESC";
$res1 = $conn->query($sql1);
$sql2 =  "SELECT * FROM user_info WHERE uname = '{$_SESSION["uname"]}'";
$res2 = $conn->query($sql2);
$row2 = $res2->fetch_assoc();
if ($res1->num_rows > 0) {
    while ($row1 = $res1->fetch_assoc()) {
        echo '<section style="display:flex; flex-direction:row;">';
            echo '<div class="topic">';
                $id = $row1['id'];
                echo '<h3><a href="topic.php?id='.$id.'">'.$row1['name'].'</a></h3>';
                echo '<p>' .$row1['date'] .'</p>';
                echo '<p style="float:right">' .$row1['creator'] .'</p>';
                if ($row2['privileged'] == 1) {
                    echo '<form action="queries/delete_topic.php" method="POST">';
                        echo '<input type="hidden" name="id" value="'.$id.'">';
                        echo '<button type="submit" name="delete">Törlés</button>';
                    echo '</form>';
                }
            echo '</div>';
        echo '</section>';
    }
} else {
    echo '<h4>Legyél te az első, létrehoz egy fórumot!</h4>';
}
$conn->close();
?>