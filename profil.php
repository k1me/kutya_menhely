<?php
global $errors;
session_start();
$title = 'Saját profil';
$page = 'profil';
include 'queries/pw_change.php';
include 'queries/pfp_change.php';
include 'queries/delete_profil.php';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <div class="body-container">
        <?php    
            include 'queries/db_connect.php';
            $sql = "SELECT * FROM user_info WHERE uname = '{$_SESSION["uname"]}'";
            $res = $conn->query($sql);       
            $row = $res->fetch_assoc();
            echo '<h1>Üdvözöllek '. $row['first_name'] . '!</h1>'
        ?>
        <div class="profil-container">
            <div class="profil">
                <div class="info-container">
                    <?php include 'queries/user_info.php'; ?>
                </div>
                <div class="form-container">
                    <div style="max-width:325px;">
                        <form action="profil.php" method="post">
                            <h3>Itt tudod megváltoztatni a jelszavadat:</h3>
                            <div class="pw-vrfy">
                            <label for="psw">Jelszó:</label>
                            <input type="password" id="pws" name="passwd" style="width:250px" placeholder="Jelszó">
                            <label for="psw-repeat">Jelszó újra:</label>
                            <input type="password" id="pws-repeat" name="passwd-rep" style="width:250px" placeholder="Jelszó újra">
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
                                    <button type="submit" name="torol">Törlés</button>
                                </div>
                            </div>
                        </form>
                        <form action="profil.php" method="POST">
                            <h3>Itt tudod törölni a fiókodat:</h3>
                            <div id="delete-profil">
                                <label style="text-align:justify"for="delete">Ha biztosan <strong>törölni</strong> szeretnéd a profilodat, akkor meg kell adnod a <strong>jelszavadat!</strong></label>
                                <?php
                                    if (isset($siker) && $siker === FALSE) {
                                        echo $error2;
                                    }
                                ?>
                                <input type="password" name="delete" placeholder="Jelszó" style="width:250px">
                                <button type="submit"name="torol">Törlés</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>