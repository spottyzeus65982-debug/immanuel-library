<?php
// ngapus kategori, id-nya dilirik dari url
if (isset($_GET['id'])) {
  echo "Kategori dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID kategori tidak ditemukan.";
}
