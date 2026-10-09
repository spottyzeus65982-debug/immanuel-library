<?php
// update user + role check
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['update_user'])) { echo 'Akses tidak valid'; return; }
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$role = filter_input(INPUT_POST, 'role');
if (!$id || !$name || !$email || !$role) { echo 'Data pengguna tidak lengkap'; return; }
echo 'Perubahan pengguna berhasil diterima:<br>';
echo '<pre>';
print_r(['id' => $id, 'name' => $name, 'email' => $email, 'role' => $role]);
echo '</pre>';
echo '<br><a href="../../pages/users/index.php">Kembali</a>';
