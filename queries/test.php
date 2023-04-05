<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutyamenhely";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nev, faj, nem, kor FROM kutyak";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="flip-card">';
        echo '<div class="flip-card-inner">';
            echo '<div class="flip-card-front">';
                echo '<img src="img/'.$row["nev"].'.jpg" alt="'.$row["nev"].'" style="height:100%;">';
            echo '</div>';
            echo '<div class="flip-card-back">';
                echo "<h1>".$row["nev"]."</h1>";
                echo "<p>".$row["faj"]."</p>";
                echo "<p>".(($row["nem"]== 1) ? "Hím" : "Nőstény")." | ".$row["kor"]." éves</p>";
            echo '</div>';
        echo '</div>';
    echo '</div>';
  }
} else {
  echo "Jelenleg nincs örökbefogadható kutya:)";
}
$conn->close();
?>