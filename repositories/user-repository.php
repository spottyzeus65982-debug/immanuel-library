<?php
// user repo kecil, data profil ikut biar kompak
class UserRepo {
  public static function all(): array {
    return [
      ["id" => 1, "name" => "Admin Utama", "email" => "admin@ski.sch.id", "role" => "admin", "phone" => "0812-0000-0001", "address" => "Jl. Merdeka No. 1, Pontianak", "bio" => "Admin perpustakaan."],
      ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member", "phone" => "0812-3456-7890", "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat", "bio" => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri."],
      ["id" => 3, "name" => "Siti Aminah", "email" => "siti.aminah@siswa.ski.sch.id", "role" => "member", "phone" => "0812-0000-0003", "address" => "Jl. Merdeka No. 3, Pontianak", "bio" => "Anggota aktif."],
      ["id" => 4, "name" => "Richard Marcell", "email" => "richard.m@ski.sch.id", "role" => "admin", "phone" => "0812-0000-0004", "address" => "Jl. Merdeka No. 4, Pontianak", "bio" => "Admin kedua."],
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
