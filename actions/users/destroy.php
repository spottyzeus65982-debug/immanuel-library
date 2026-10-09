<?php
// hehe jimmy: nyoret user, id-nya dicek dari url biar nggak salah
if (isset($_GET['id'])) {
  echo "Pengguna dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID pengguna tidak ditemukan.";
}
