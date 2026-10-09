<?php
// save profil sendiri, kontak dicek
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['update_profile'])) { echo 'Akses tidak valid'; return; }
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone');
$address = filter_input(INPUT_POST, 'address');
$bio = filter_input(INPUT_POST, 'bio');
if (!$name || !$email || !$phone || !$address || !$bio) { echo 'Data profil tidak lengkap'; return; }
echo 'Perubahan profil berhasil diterima:<br>';
echo '<pre>';
print_r(['name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address, 'bio' => $bio]);
echo '</pre>';
echo '<br><a href="../../pages/profile/edit.php">Kembali</a>';
