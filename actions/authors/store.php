<?php
// tambah author baru, name bio wajib isi
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['add_author'])) { echo 'Akses tidak valid'; return; }
$name = filter_input(INPUT_POST, 'name');
$bio = filter_input(INPUT_POST, 'bio');
if (!$name || !$bio) { echo 'Data penulis tidak lengkap'; return; }
echo 'Penulis baru berhasil diterima:<br>';
echo '<pre>';
print_r(['name' => $name, 'bio' => $bio]);
echo '</pre>';
echo '<br><a href="../../pages/authors/index.php">Kembali</a>';
