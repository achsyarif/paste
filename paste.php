<?php
$file = 'data.txt';

// Jika request POST, simpan data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'] ?? '';
    // Simpan ke file, gunakan mode 'w' untuk overwrite
    if (file_put_contents($file, $text) !== false) {
        echo 'OK';
    } else {
        http_response_code(500);
        echo 'Gagal menyimpan data.';
    }
    exit;
}

// Jika request GET, ambil data
if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo '';
}
?>
