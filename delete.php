<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = $_POST['filename'];
    if (file_exists("images/$filename")) {
        unlink("images/$filename");
    }
    header('Location: index.php');
}
?>;
