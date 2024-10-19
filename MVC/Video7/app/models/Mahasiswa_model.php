<?php 

class Mahasiswa_model {
    //data base handler
    private $dbh,$stmt;

    public function __construct() {
        //data source name
        $dsn ='mysql:hostt=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn,'root','');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    // private $mhs = [

    //     [
    //         "nama"=>"Daffa Muhamad Rizki Ansori",
    //         "nrp"=> "223040113",
    //         "email"=>"daffamuhamadra@gmail.com",
    //         "jurusan"=>"Teknik Informatika"
    //     ],
    //     [
    //         "nama"=>"Fawas Nawaf Sabil",
    //         "nrp"=> "223040114",
    //         "email"=>"FawasSpakbor@gmail.com",
    //         "jurusan"=>"Teknik Informatika"
    //     ]

    // ];

    public function getAllMahasiswa() {
       $this->stmt = $this-> dbh->prepare('SELECT * FROM mahasiswa');
       $this->stmt->execute();  
       return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


