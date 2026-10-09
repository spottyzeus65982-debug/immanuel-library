<?php
// delete book by id dari URL
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) { echo 'ID buku tidak ditemukan.'; return; }
echo 'Buku dengan id ' . htmlspecialchars($id) . ' berhasil dihapus.';
echo '<br><a href="../../pages/books/index.php">Kembali</a>';
