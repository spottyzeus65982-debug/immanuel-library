<?php
// drop user by id GET
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) { echo 'ID pengguna tidak ditemukan.'; return; }
echo 'Pengguna dengan id ' . htmlspecialchars($id) . ' berhasil dihapus.';
echo '<br><a href="../../pages/users/index.php">Kembali</a>';
