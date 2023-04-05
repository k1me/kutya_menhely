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
    echo'<div class="img-wrapper">';
        echo '<div>';
            echo '<img src="img/'.$row["nev"].'.jpg" alt="archibald" height="80" width="120" class="kutya-img">';
        echo '</div>';
        echo '<div class="img-info">';
            echo '<div class="kutya-nev">';
                echo "<p>".$row["nev"]."<p>";
            echo '</div>';
            echo '<div class="kutya-fajta">';
                echo "<p>".$row["faj"]."</p>";
            echo '</div>';
            echo '<div class="nem-kor-wrapper">';
                echo '<div class="nem">';
                    echo "<p>".(($row["nem"]=="1") ? "Hím" : "Nőstény")."</p>";
                echo '</div>';
                echo '<div class="kor">';
                    echo "<p>".$row["kor"]." éves</p>";
                echo '</div>';
            echo '</div>';
        echo'</div>';
    echo '</div>';
  }
} else {
  echo "Jelenleg nincs örökbefogadható kutya:)";
}
$conn->close();
?>