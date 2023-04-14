<?php
    session_start();
    $title = 'Fórum';
    $page = 'forum';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; 
    include 'navbar.php'?>    
    <div class="body-container"></div>
    <aside>
        <?php include 'queries/users_forum.php'; ?>
    </aside>
</body>