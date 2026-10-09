<!-- edit penulis, form keisi -->
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/edit.css">
</head>

<body>
  <?php
  require_once __DIR__.'/../../repositories/author-repository.php';
  $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  if (!$id) $id = 1;
  $author = AuthorRepo::one($id);
  ?>
  <div class="app-shell">
    <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php $pageTitle = 'Edit Penulis'; $pageSubtitle = 'Perbarui data penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <form method="POST" action="../../actions/authors/update.php">
          <input type="hidden" name="id" value="<?= htmlspecialchars($author['id']) ?>">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" value="<?= htmlspecialchars($author['name']) ?>">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= htmlspecialchars($author['bio']) ?></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="update_author" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
