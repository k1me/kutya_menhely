<?php
    session_start();
    $title = 'Elérhetőség';
    $page = 'elerhetoseg';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php 
    include 'header.html'; 
    include 'navbar.php'; 
    ?>
    <div class="body-container">
        <h1>Elérhetőségeink</h1>
        <div class="infok-container">
            <div class="infok-wrapper">
                <div class="szoveg">
                    <p>Telefonszám: 06702936173</p>
                    <p>Email: ujkezdet@gmail.com</p>
                    <p>Telephely: Szeged, Szőlősor 4</p>
                    <p>Bankszámla: UniCredit Bank 10918001-00000019-48600008</p>
                </div>
                <div class="img-wrapper">
                    <img src="img/adoszazalek.jpg" alt="kiskutya">
                </div>
                <div class="audio-wrapper">
                    <audio controls autoplay>
                        <source src="multi/ugat.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>