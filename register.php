<?php
    $title = 'Regisztráció';
    $page = 'register';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <div class="form-wrapper">
        <form method="POST">
            <h2 id="login_h">regisztráció</h2>
            <img src="img/login_avatar.png" alt="login-avatar" class="avatar">
                <input type="text" name="full-name" placeholder="Teljes név">
                <input type="text" name="uname" placeholder="Felhasználónév">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="passwd" placeholder="Jelszó" required>
                <input type="password" name="passwd-check" placeholder="Jelszó ismét" required>
                <label>Születési dátum: <input type="date" name="date-of-birth" min="1920-01-01"></label>
            <button type="submit">Regisztráció</button>
            <button type="reset" >Adatok törlése</button>
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>