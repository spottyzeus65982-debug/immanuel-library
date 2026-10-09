<?php
// simpan category baru, name desc dicek
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['add_category'])) { echo 'Akses tidak valid'; return; }
$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
if (!$name || !$description) { echo 'Data kategori tidak lengkap'; return; }
echo 'Kategori baru berhasil diterima:<br>';
echo '<pre>';
print_r(['name' => $name, 'description' => $description]);
echo '</pre>';
echo '<br><a href="../../pages/categories/index.php">Kembali</a>';
