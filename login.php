<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutyamenhely";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uname = $_POST['uname'];
    $passwd = $_POST['passwd'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Sikertelen csatlakozás: " . $conn->connect_error);
    }
    $hashed = hash('sha256', $passwd);

    $sql = "SELECT * FROM users WHERE uname = '$uname'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        if($hashed === $row['passwd']) {
            $siker = TRUE;
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['passwd'] = $row['passwd'];
            $conn->close();
            header('Location: index.php');
            exit();
        } else {
            $errors[] = 'Hibás felhasználónév vagy jelszó!';
            $siker = FALSE;
        }
    } else {
        $errors[] = 'Hibás felhasználónév vagy jelszó!';
        $siker = FALSE;
    }
    $conn->close();
}
$title = 'Belépés';
$page = 'login';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <div class="form-wrapper">
        <form action="login.php" method="POST" >
            <h2 id="login_h">belépés</h2>
            <img src="img/login_avatar.png" alt="login-avatar" class="avatar">
            <?php 
            if (isset($siker) && $siker === TRUE) {
                echo "<p>Sikeres regisztráció!</p>";
            } else {
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
            }
            ?>
            <input type="text" name="uname" placeholder="Felhasználónév">
            <input type="password" name="passwd" placeholder="Jelszó" required>
            <button type="submit">Belépés</button>
            <a href="register.php">Regisztráció</a>
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>