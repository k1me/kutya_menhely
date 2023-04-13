<?php
include "db_connect.php";
//ékezetes karakterek kicserélése a file nevében, mert azt nem szereti
//mivel az adatbázisból kérdezzük le, így ott ékezetes nevek vannak és majrézik rá a validator 
//strtr() függvény a stringekben kicseréli a karaktereket strtr(string, mit, mire) VAGY strtr(string, array(mit=>mire))
$cserebere = array('Á'=>'a', 'É'=>'e', 'Í'=>'i', 'Ó'=>'o', 'Ö'=>'o', 'Ő'=>'o', 'Ú'=>'u','Ü'=>'u', 'Ű'=>'u',
                   'á'=>'a','é'=>'e', 'í'=>'i','ó'=>'o','ö'=>'o','ú'=>'u','ü'=>'u','ű'=>'u','ő'=>'o',);

$sql = "SELECT dname, faj, nem, kor, is_adopted FROM kutyak";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="flip-card">';
      echo '<div class="flip-card-inner">';
        echo '<div class="flip-card-front">';
          echo '<img src="img/'.strtolower(strtr($row["dname"],$cserebere)).'.jpg" alt="'.$row["dname"].'" style="height:100%;">';
        echo '</div>';
        echo '<div class="flip-card-back">';
          echo "<h1>".$row["dname"]."</h1>";
          echo "<p>".$row["faj"]."</p>";
          echo "<p>".(($row["nem"]== 1) ? "Hím" : "Nőstény")." | ".$row["kor"]." éves</p>";
          if (!isset($_SESSION['uname'])) {
            echo '<button><a href="login.php">Örökbefogadás</a></button>';
          } else if ($row['is_adopted'] == 1){
            echo '<button disabled style="background-color:#bbb">Örökbefogadva</button>';
          } else {
            echo '<button><a href=" orokbefogadas.php?nev='.$row["dname"].'">Örökbefogadás</a></button>';
          }
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }
} else {
  echo "Jelenleg nincs örökbefogadható kutya:)";
}
$conn->close();
?>