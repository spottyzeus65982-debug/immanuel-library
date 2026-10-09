<?php
// revisi category, id ikut validasi
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['update_category'])) { echo 'Akses tidak valid'; return; }
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
if (!$id || !$name || !$description) { echo 'Data kategori tidak lengkap'; return; }
echo 'Perubahan kategori berhasil diterima:<br>';
echo '<pre>';
print_r(['id' => $id, 'name' => $name, 'description' => $description]);
echo '</pre>';
echo '<br><a href="../../pages/categories/index.php">Kembali</a>';
