<?php
// hapus category via id GET
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) { echo 'ID kategori tidak ditemukan.'; return; }
echo 'Kategori dengan id ' . htmlspecialchars($id) . ' berhasil dihapus.';
echo '<br><a href="../../pages/categories/index.php">Kembali</a>';
