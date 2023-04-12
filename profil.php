<?php
session_start();
$title = 'Saját profil';
$page = 'profil';
include 'queries/pw_change.php';
include 'queries/pfp_change.php';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <div class="body-container">
        <h1>Üdvözöllek <?php echo $_SESSION['uname']; ?>!</h1>
        <div class="profil-container">
            <div class="profil">
                <div class="info-container">
                    <?php include 'queries/user_info.php'; ?>
                </div>
                <div class="form-container">
                    <form action="profil.php" method="post">
                        <h3>Itt tudod megváltoztatni a jelszavadat:</h3>
                        <div class="pw-vrfy">
                            <label for="psw">Jelszó:</label>
                            <input type="password" id="pws" name="passwd" placeholder="Jelszó">
                            <label for="psw-repeat">Jelszó újra:</label>
                            <input type="password" id="pws-repeat" name="passwd-rep" placeholder="Jelszó újra">
                            <button type="submit" name="jelszo">Mentés</button>
                            <?php
                            if (isset($siker) && $siker === TRUE) {
                                echo "<p>Sikeres jelszó változtatás</p>";
                            } else {
                                foreach ($errors as $error) {
                                    echo "<p>" . $error . "</p>";
                                }
                            }?>
                        </div>
                    </form>
                    <form action="profil.php" method="post" enctype="multipart/form-data">
                        <h3>Itt tudod megváltoztatni a profilképed:</h3>
                        <div id="pfp-picker">
                            <label for="pfp">Kiválsztás:</label>
                            <input type="file" name="pfp" id="pfp">
                            <div>
                                <button  type="submit" name="feltolt">Mentés</button>
                                <button type="submit" name="torol">Törlés</a></button>';
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>