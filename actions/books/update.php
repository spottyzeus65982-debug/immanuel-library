<?php
// update book data, id plus field wajib ada
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['update_book'])) { echo 'Akses tidak valid'; return; }
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$title = filter_input(INPUT_POST, 'title');
$isbn = filter_input(INPUT_POST, 'isbn');
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$stock = filter_input(INPUT_POST, 'stock', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, 'description');
$author_ids = filter_input(INPUT_POST, 'author_ids', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if (!$id || !$title || !$isbn || !$year || !$stock || !$category_id || !$description) { echo 'Data buku tidak lengkap'; return; }
$data = ['id' => $id, 'title' => $title, 'isbn' => $isbn, 'year' => $year, 'stock' => $stock, 'category_id' => $category_id, 'description' => $description, 'author_ids' => $author_ids ? $author_ids : []];
echo 'Perubahan buku berhasil diterima:<br>';
echo '<pre>';
print_r($data);
echo '</pre>';
echo '<br><a href="../../pages/books/index.php">Kembali</a>';
