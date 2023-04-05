<?php
    $title = 'Örökbefogadható kutyák';
    $page = 'orokbefogadas';
    require 'head.php';
?>
<!DOCTYPE html>
<html lang="hu">
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