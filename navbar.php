<nav id="navbar">
    <ul>
        <li><a href="index.php" class="<?php if ($page =='index') {
                                    echo 'active';
                                    } ?>">Home</a></li>
        <li><a href="hirek.php" class="<?php if ($page =='hirek') {
                                    echo 'active';
                                    } ?>">Hírek</a></li>
        <li><a href="orokbefogadas.php" class="<?php if ($page =='orokbefogadas') {
                                    echo 'active';
                                    } ?>">Örökbefogadás</a></li>
        <li><a href="elerhetoseg.php" class="<?php if ($page =='elerhetoseg') {
                                    echo 'active';
                                    } ?>">Elérhetőség</a></li>
        <li><a href="ajanlo.php" class="<?php if ($page =='ajanlo') {
                                    echo 'active';
                                    } ?>">Ajánló</a></li>
        <li><a href="login.php" class="<?php if ($page =='login') {
                                    echo 'active';
                                    } ?>">Belépés</a></li>
    </ul>
</nav>