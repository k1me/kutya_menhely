<?php
    session_start();
    include 'queries/db_connect.php';
    if (isset($_GET['nev'])) {
        $dname = $_GET['nev'];
        $sql_ellenorzes = "SELECT COUNT(*) AS db FROM adoption WHERE dname = '{$dname}'";
        $res = $conn->query($sql_ellenorzes);
        $row_ellenorzes = $res->fetch_assoc();
        if ($row_ellenorzes['db'] > 0) {
          echo "<script>alert('Ezt a kutyát már örökbefogadták! :)')</script>";
        } else {
            $sql1= "UPDATE kutyak 
                    SET is_adopted = 1 
                    WHERE dname = '{$dname}';";
            $sql2 = "INSERT INTO adoption (uname, dname) 
                    VALUES ('{$_SESSION['uname']}', '{$dname}')";
          if($conn->query($sql1) && $conn->query($sql2)) {
            header("Location: orokbefogadas.php");
          } else {
            echo "<script>alert('Sikertelen örökbefogadás!')</script>";
          }
        }
      }
    $title = 'Örökbefogadható kutyák';
    $page = 'orokbefogadas';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <div class="body-container">
        <div>
            <h1>Örökbefogadható kutyák</h1>
        </div>
        <div class="card-holder">
            <?php include 'queries/kutya_befogadas.php'; ?>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>