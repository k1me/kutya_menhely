<?php
global $conn;
session_start();
    $title = 'Fórum';
    $page = 'forum';

    $errors = [];
    $t_name = $_POST['topic'] ?? '';
    $desc = $_POST['description'] ?? '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['jovahagy'])) {
            if ($t_name && $desc) {
                if (strlen($desc) <= 500 && strlen($t_name) <= 50 && strlen($t_name) >= 0 && strlen($desc) >= 0) {
                    include 'queries/db_connect.php';
                    $sql = "INSERT INTO topics (creator, name, content) VALUES ( '$_SESSION[uname]', '$t_name', '$desc')";
                    $result = mysqli_query($conn, $sql);
                    $siker = TRUE;
                    $conn->close();
                } else {
                    $errors[] = 'A hosszúsúsűg nem megfelelő!';
                }
            } else {
                $siker = FALSE;
                $errors[] = 'Minden mező kitöltése kötelező!';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; 
    include 'navbar.php'?>
    <div class="body-container">
        <div class="flex-container">
            <div class="section-container">
                <h2>Új téma</h2>
                <section>
                    <div class="topics">
                        <form action="forum.php" method="POST">
                            <div class="topic">
                                <label for="topic">Add meg a fórumod témáját!</label>
                                <input type="text" name="topic" placeholder="Téma megnevezése">
                            </div>
                            <div class="desc">
                                <label for="description">Leírás</label>
                                <textarea name="description" cols="30" rows="10" placeholder="Leírás (max 500 karakter)"></textarea>
                            </div>
                            <button type="submit" name="jovahagy">Jóváhagyás</button>
                        </form>
                    </div>
                </section>
            </div>
            <div class="section-container">
                <h2>Aktuális</h2>
                <?php include 'queries/topics_forum.php'; ?>
            </div>
            <div class="aside-container">
                <h2>Felhasználók</h2>
                <aside>
                    <div class="users">
                        <?php include 'queries/users_forum.php'; ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>