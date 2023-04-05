<?php
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
        <form method="POST">
            <h2 id="login_h">belépés</h2>
            <img src="img/login_avatar.png" alt="login-avatar" class="avatar">
            <input type="text" name="uname" placeholder="Felhasználónév">
            <input type="password" name="passwd" placeholder="Jelszó" required>
            <button type="submit">Belépés</button>
            <a href="register.php">Regisztráció</a>
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>