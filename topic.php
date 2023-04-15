<?php
global $conn;
session_start();
    $title = 'Fórum';
    $page = 'topic';
    include 'queries/db_connect.php';
    $errors = [];
    $desc = $_POST['description'] ?? '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['jovahagy'])) {
            if ($desc) {
                if (strlen($desc) <= 500 && strlen($desc) >= 0) {
                    $sql = "INSERT INTO replies (creator, content, parent_id) VALUES ( '{$_SESSION['uname']}', '$desc', '{$_GET['id']}')";
                    $result = mysqli_query($conn, $sql);
                    $siker = TRUE;
                    $conn->close();
                } else {
                    $errors[] = 'A hosszúság nem megfelelő!';
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
                    <?php
                        include 'queries/db_connect.php';
                        if ($_GET['id']) {
                            $sql = "SELECT * FROM topics WHERE id = $_GET[id]";
                            $res = $conn->query($sql);       
                            $row = $res->fetch_assoc();
                            if ($row > 0) {
                                echo '<h2>'.$row['name'].'</h2>';
                                echo '<section style="width:775px;text-align:justify">';
                                    echo '<p>'.$row['content'].'</p>';
                                    echo '<p style="text-align:right;">~'.$row['creator'].'</p>';
                                echo '</section>';
                            } else {
                                echo '<section>';
                                    echo '<h2>Nincs ilyen téma!</h2>';
                                echo '<section>';
                            }
                        }
                        if ($_GET['id']) {
                            $sql = "SELECT * FROM replies WHERE parent_id = $_GET[id]";
                            $res = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while($row = $res->fetch_assoc()) {
                                    echo '<section style="width:775px;text-align:justify">';
                                        echo '<p>'.$row['content'].'</p>';
                                        echo '<p style="text-align:right;">~'.$row['creator'].'</p>';
                                    echo '</section>';
                                }
                            } else {
                                echo '<h3>Nem érkezett még hosszászólás!</h3>';
                            }
                            $conn->close();
                        }
                    ?>
                <section style="width:775px">
                    <div class="topics">
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php 
                            //ez nagyon sketchy, de működik
                            echo $_GET['id']; 
                            ?>">
                            <div class="desc">
                                <label for="description">Leírás</label>
                                <textarea name="description" cols="30" rows="10" placeholder="Leírás (max 500 karakter)"></textarea>
                            </div>
                            <button type="submit" name="jovahagy">Jóváhagyás</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>