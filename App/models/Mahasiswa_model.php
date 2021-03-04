<?php

class Mahasiswa_model
{
    //mencoba menggunakan database
    private $dbh;  // database handler
    private $stmt;

    public function __construct()
    {
        // data resource
        $dsn = "mysql:host=localhost;dbname=phpmvc";

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //// menggunakan manual
    // private $mhs = [
    //     [
    //         "nama" => "Tanjiro Kamado",
    //         "nim" => "0110215050",
    //         "email" => "tanjiro@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Nezuko Kamado",
    //         "nim" => "0110215051",
    //         "email" => "nezuko@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "Zenitsu Agatsuma",
    //         "nim" => "0110215052",
    //         "email" => "zenitsu@gmail.com",
    //         "jurusan" => "Teknik Kimia"
    //     ]
    // ];


}
