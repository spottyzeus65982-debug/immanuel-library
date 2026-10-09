<?php
// remove author pakai id link
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) { echo 'ID penulis tidak ditemukan.'; return; }
echo 'Penulis dengan id ' . htmlspecialchars($id) . ' berhasil dihapus.';
echo '<br><a href="../../pages/authors/index.php">Kembali</a>';
