<?php
// category repo mini, fallback ke pertama bila miss
class CategoryRepo {
  public static function all(): array {
    return [
      ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3],
      ["id" => 2, "name" => "Sains", "description" => "Buku ilmu pengetahuan alam", "total_books" => 0],
      ["id" => 3, "name" => "Sejarah", "description" => "Buku sejarah dan biografi", "total_books" => 1],
      ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi", "total_books" => 0],
    ];
  }
  public static function one(int $id): array {
    $list = self::all();
    $i = 0;
    while ($i < count($list)) {
      if ($list[$i]["id"] === $id) return $list[$i];
      $i++;
    }
    return $list[0];
  }
}
