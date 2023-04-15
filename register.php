<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutyamenhely";
$errors = [];

if (isset($_POST["regist"])) {
    if(!isset($_POST["first-name"]) || trim($_POST["first-name"]) === "") {
        $errors[] = '<strong>A keresztnév megadása</strong> <strong style="color:red;">kötelező!</strong>';
    }

    if(!isset($_POST["last-name"]) || trim($_POST["last-name"]) === "") {
        $errors[] = '<strong>A vezetéknév megadása</strong><strong style="color:red;">kötelező!</strong>';
    }

    if(!isset($_POST["uname"]) || trim($_POST["uname"]) === "") {
        $errors[] = '<strong>A felhasználónév megadása</strong> <strong style="color:red;">kötelező!</strong>';
    }

    if(!isset($_POST["email"]) || trim($_POST["email"]) === "") {
        $errors[] = '<strong>Az e-mail cím megadása</strong> <strong style="color:red;">kötelező!</strong>';
    }

    if(!isset($_POST["passwd"]) || trim($_POST["passwd"]) === "") {
        $errors[] = '<strong>A jelszó megadása</strong> <strong style="color:red;">kötelező!</strong>';
    }

    if(!isset($_POST["passwd-check"]) || trim($_POST["passwd-check"]) === "") {
        $errors[] = '<strong>A jelszó ismételt megadása</strong> <strong style="color:red;">kötelező!</strong>';
    }

    if(!isset($_POST["date-of-birth"]) || trim($_POST["date-of-birth"]) === "") {
        $errors[] = '<strong>A születési dátum megadása</strong> <strong style="color:red;">kötelező!</strong>';
    }

    if (count($errors) === 0) {
        $first_name = $_POST["first-name"];
        $last_name = $_POST["last-name"];
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $passwd = $_POST["passwd"];
        $passwd_check = $_POST["passwd-check"];
        $date_of_birth = date('Y-m-d', strtotime($_POST["date-of-birth"]));

        if ($passwd !== $passwd_check) {
            $errors[] = "A két jelszó nem egyezik!";
        } else {
            $hashed = hash('sha256', $passwd);
        }

        if (count($errors) === 0) {
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Sikertelen csatlakozás: " . $conn->connect_error);
            }
            $sql = "INSERT INTO users(uname, passwd) 
            VALUES ('$uname', '$hashed')";
            if ($conn->query($sql) === TRUE) {
                $utolso_adat = $conn->insert_id;
                
                $sql = "INSERT INTO user_info(uname, first_name, last_name, email, date_of_birth) 
                VALUES ('$uname', '$first_name', '$last_name', '$email', '$date_of_birth');";
                if ($conn->query($sql) === TRUE) {
                    echo "Az adatok sikeresen hozzáadva!";
                } else {
                    $erros[] = "Hiba az adatok hozzáadásakor: " . $conn->error;
                }
            }
            $siker = TRUE;
            header("Location: login.php");
            $conn->close();
        } else {
            $siker = FALSE;
        }
    }
}   
$title = 'Regisztráció';
$page = 'register';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <h1 id="login_h">Regisztráció</h1>
    <div class="form-wrapper">
        <form action="register.php" method="POST">
            <img src="img/login_avatar.png" alt="login-avatar" class="avatar">
            <input type="text" name="first-name" placeholder="Keresztnév">
            <input type="text" name="last-name" placeholder="Vezetéknév">
            <input type="text" name="uname" placeholder="Felhasználónév">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="passwd" placeholder="Jelszó">
            <input type="password" name="passwd-check" placeholder="Jelszó ismét">
            <label>Születési dátum: <input type="date" name="date-of-birth" min="1920-01-01"></label>
            <button type="submit" name="regist">Regisztráció</button>
            <button type="reset">Adatok törlése</button>
            <?php
            if (isset($siker) && $siker === TRUE) {
                echo "<p>Sikeres regisztráció!</p>";
            } else {
                foreach ($errors as $error) {
                    echo "<p>" . $error . "</p>";
                }
            }?>
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>