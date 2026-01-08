<?php
require_once '../app/config/database.php';

class Mahasiswa {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function getAll() {
        return mysqli_query($this->conn, "SELECT * FROM mahasiswa");
    }

    public function getById($id) {
        return mysqli_query(
            $this->conn,
            "SELECT * FROM mahasiswa WHERE id_mahasiswa = $id"
        );
    }

    public function insert($nim, $nama, $jurusan, $alamat) {
        $query = "INSERT INTO mahasiswa VALUES (
            null,
            '$nim',
            '$nama',
            '$jurusan',
            '$alamat'
        )";
        return mysqli_query($this->conn, $query);
    }

    public function update($id, $nim, $nama, $jurusan, $alamat) {
        $query = "UPDATE mahasiswa SET
                    nim='$nim',
                    nama='$nama',
                    jurusan='$jurusan',
                    alamat='$alamat'
                  WHERE id_mahasiswa=$id";
        return mysqli_query($this->conn, $query);
    }

    public function delete($id) {
        return mysqli_query(
            $this->conn,
            "DELETE FROM mahasiswa WHERE id_mahasiswa=$id"
        );
    }
}
