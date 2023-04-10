<?php
    session_start();
    $title = 'Saját profil';
    $page = 'profil';
    include 'queries/db_connect.php';

    $errors = [];

    if (isset($_POST["mentes"])) {
        if (!isset($_POST["passwd"]) || trim($_POST["passwd"]) === "") {
            $errors[] = '<strong>A jelszó megadása</strong><strong style="color:red;">kötelező!</strong>';
        } else if (isset($_POST['passwd']) && isset($_POST['passwd-rep'])) {
            if ($_POST['passwd'] == $_POST['passwd-rep']) {
                $password = $_POST['passwd'];
                $hashed = hash('sha256', $password);
                $sql = "UPDATE users
                        SET passwd = '$hashed'
                        WHERE uname = '{$_SESSION['uname']}'";
                if(mysqli_query($conn, $sql)) {
                    $siker = TRUE;
                    header('Location: logout.php');
                } else {
                    $siker = FALSE;
                }
            } else {
                $errors[] = '<strong>Nem egyeznek a jelszavak!<strong>';
            }
        }
    }
    mysqli_close($conn);
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
                            <button type="submit" name="mentes">Mentés</button>
                            <?php
                            if (isset($siker) && $siker === TRUE) {
                                echo "<p>Sikeres regisztráció!</p>";
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
                            <button  type="submit">Mentés</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>