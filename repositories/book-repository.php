<?php
// book data repo, key EN biar rapi
class BookRepo {
  public static function all(): array {
    return [
      ["id" => 1, "title" => "Laskar Pelangi", "category" => "Fiksi", "year" => 2005, "stock" => 12, "authors" => ["Andrea Hirata"], "isbn" => "978-979-1227-78-0", "description" => "Novel perjuangan anak Belitung mengejar mimpi.", "category_id" => 1, "author_ids" => [1]],
      ["id" => 2, "title" => "Bumi", "category" => "Fiksi", "year" => 2014, "stock" => 8, "authors" => ["Tere Liye"], "isbn" => "978-602-0323-12-4", "description" => "Petualangan Raib dengan kekuatan misterius.", "category_id" => 1, "author_ids" => [2]],
      ["id" => 3, "title" => "Harry Potter dan Batu Bertuah", "category" => "Fiksi", "year" => 1997, "stock" => 5, "authors" => ["J.K. Rowling"], "isbn" => "978-0747532699", "description" => "Awal kisah Harry di sekolah sihir Hogwarts.", "category_id" => 1, "author_ids" => [3]],
      ["id" => 4, "title" => "Bumi Manusia", "category" => "Sejarah", "year" => 1980, "stock" => 6, "authors" => ["Pramoedya Ananta Toer"], "isbn" => "978-979-97312-3-6", "description" => "Kisah Minke di era kolonial Hindia Belanda.", "category_id" => 3, "author_ids" => [4]],
      ["id" => 5, "title" => "Antologi Rasa Nusantara", "category" => "Fiksi", "year" => 2021, "stock" => 4, "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"], "isbn" => "978-602-1234-56-7", "description" => "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.", "category_id" => 1, "author_ids" => [4, 5]],
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
