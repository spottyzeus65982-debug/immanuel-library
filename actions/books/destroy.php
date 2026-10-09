<?php
// hehe jimmy: beresin request hapus buku, id-nya dicek dari link
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
