<?php
// edit author lama, pastikan id ada
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['update_author'])) { echo 'Akses tidak valid'; return; }
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$bio = filter_input(INPUT_POST, 'bio');
if (!$id || !$name || !$bio) { echo 'Data penulis tidak lengkap'; return; }
echo 'Perubahan penulis berhasil diterima:<br>';
echo '<pre>';
print_r(['id' => $id, 'name' => $name, 'bio' => $bio]);
echo '</pre>';
echo '<br><a href="../../pages/authors/index.php">Kembali</a>';
