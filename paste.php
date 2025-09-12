<?php
$file = 'data.txt';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents($file, $_POST['text'] ?? '');
    echo 'OK';
} else {
    echo file_exists($file) ? file_get_contents($file) : '';
}
?>