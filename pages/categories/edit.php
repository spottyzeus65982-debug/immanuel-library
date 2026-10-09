<!-- benerin kategori, id hidden -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/edit.css">
</head>
<body>
  <?php
  require_once __DIR__.'/../../repositories/category-repository.php';
  $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  if (!$id) $id = 1;
  $category = CategoryRepo::one($id);
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Edit Kategori'; $pageSubtitle = 'Perbarui data kategori'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <form method="POST" action="../../actions/categories/update.php">
          <input type="hidden" name="id" value="<?= htmlspecialchars($category['id']) ?>">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" value="<?= htmlspecialchars($category['name']) ?>">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= htmlspecialchars($category['description']) ?></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="update_category" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
