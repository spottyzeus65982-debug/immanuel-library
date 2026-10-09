<?php
// register user baru plus role
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['add_user'])) { echo 'Akses tidak valid'; return; }
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$role = filter_input(INPUT_POST, 'role');
if (!$name || !$email || !$password || !$role) { echo 'Data pengguna tidak lengkap'; return; }
echo 'Pengguna baru berhasil diterima:<br>';
echo '<pre>';
print_r(['name' => $name, 'email' => $email, 'password' => $password, 'role' => $role]);
echo '</pre>';
echo '<br><a href="../../pages/users/index.php">Kembali</a>';
