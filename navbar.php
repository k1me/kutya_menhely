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
        <li><a href=" <?php 
        if (!isset($_SESSION['uname'])){
            echo 'login.php"';
        } else {
            echo 'forum.php"';
        }
        if ($page =='forum' || $page == 'topic') {
                                    echo '" class="active"';
                                    } ?>>Fórum</a></li>
        <?php if (isset($_SESSION['uname'])) {
            echo '<li class="login"><a href="logout.php">Kijelentkezés</a></li>';
            echo '<li class="login"><a href="profil.php "';
            if ($page == 'profil') {
                echo 'class="active"';
            }
            echo '>Profil</a></li>';
        } else {
            echo '<li class="login"><a href="login.php "';
            if ($page == 'login' || $page == 'register') {
                echo 'class="active"';
            }
            echo '>Belépés</a></li>';
        } 
        ?>
    </ul>
</nav>