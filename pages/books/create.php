<!-- tambah buku baru, pilih kategori + penulis -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/create.css">
</head>
<body>
  <?php
  require_once __DIR__.'/../../repositories/category-repository.php';
  require_once __DIR__.'/../../repositories/author-repository.php';
  $categories = CategoryRepo::all();
  $authors = AuthorRepo::all();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Tambah Buku'; $pageSubtitle = 'Lengkapi data buku, kategori, dan penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <form method="POST" action="../../actions/books/store.php">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" placeholder="Contoh: Laskar Pelangi">
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" placeholder="Contoh: 978-979-1227-78-0">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" placeholder="Contoh: 2005">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" placeholder="Contoh: 10">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <?php $i = 0; while ($i < count($categories)): $category = $categories[$i]; $i++; ?>
                    <option value="<?= htmlspecialchars($category['id']) ?>"><?= htmlspecialchars($category['name']) ?></option>
                  <?php endwhile; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3" placeholder="Sinopsis singkat buku"></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php $i = 0; while ($i < count($authors)): $author = $authors[$i]; $i++; ?>
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= htmlspecialchars($author['id']) ?>">
                    <?= htmlspecialchars($author['name']) ?>
                  </label>
                <?php endwhile; ?>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="add_book" class="btn btn-primary">Simpan Buku</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
