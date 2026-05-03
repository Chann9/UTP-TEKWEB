<?php

class Database {
    public $db;
    private $host = "localhost";
    private $username = "root";   
    private $password = ""; 
    private $database = "soundcheck";

    public function __construct() {
        $this->db = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->db->connect_error) {
            die("Koneksi gagal: " . $this->db->connect_error);
        }
    }

    // CREATE
    public function insertProduk($nama, $kategori, $harga, $gambar) {
    $stmt = $this->db->prepare("INSERT INTO produk (nama, kategori, harga, gambar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $kategori, $harga, $gambar);
    return $stmt->execute();
}

    // READ
    public function getAllProduk() {
        return $this->db->query("SELECT * FROM produk ORDER BY id DESC");
    }

    // DELETE
    public function deleteProduk($id) {
        $stmt = $this->db->prepare("DELETE FROM produk WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}