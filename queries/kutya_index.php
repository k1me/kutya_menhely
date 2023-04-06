<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutyamenhely";
//ékezetes karakterek kicserélése a file nevében, mert azt nem szereti
//mivel az adatbázisból kérdezzük le, így ott ékezetes nevek vannak és majrézik rá a validator 
//strtr() függvény a stringekben kicseréli a karaktereket strtr(string, mit, mire) VAGY strtr(string, array(mit=>mire))
$cserebere = array('Á'=>'a', 'É'=>'e', 'Í'=>'i', 'Ó'=>'o', 'Ö'=>'o', 'Ő'=>'o', 'Ú'=>'u','Ü'=>'u', 'Ű'=>'u',
                   'á'=>'a','é'=>'e', 'í'=>'i','ó'=>'o','ö'=>'o','ú'=>'u','ü'=>'u','ű'=>'u','ő'=>'o',);

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
            echo '<img src="img/'.strtolower(strtr($row["nev"],$cserebere)).'.jpg" alt='.$row["nev"].' height="80" width="120" class="kutya-img">';
        echo '</div>';
        echo '<div class="img-info">';
            echo '<div class="kutya-nev">';
                echo "<p>".$row["nev"]."</p>";
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