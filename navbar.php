<nav id="navbar">
    <ul>
        <li><a href="index.php" <?php if ($page =='index') {
                                    echo 'class="active"';
                                    } ?>>Home</a></li>
        <li><a href="hirek.php" <?php if ($page =='hirek') {
                                    echo ' class="active"';
                                    } ?>>Hírek</a></li>
        <li><a href="orokbefogadas.php" <?php if ($page =='orokbefogadas') {
                                    echo 'class="active"';
                                    } ?>>Örökbefogadás</a></li>
        <li><a href="elerhetoseg.php" <?php if ($page =='elerhetoseg') {
                                    echo 'class="active"';
                                    } ?>>Elérhetőség</a></li>
        <li><a href="ajanlo.php" <?php if ($page =='ajanlo') {
                                    echo 'class="active"';
                                    } ?>>Ajánló</a></li>
        <li class=login><a href="login.php" <?php if ($page =='login') {
                                    echo 'class="active"';
                                    } ?>>Belépés</a></li>
    </ul>
</nav>