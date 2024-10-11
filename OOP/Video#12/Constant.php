<?php 
//define tidak bisa masuk ke dalam kelas, jadi harus di luar kelas, sebagai constanta global
// define('NAMA','Dan');
// echo NAMA;


// echo"<br>";

// //const bisa masuk dalam sebuah kelas, sehingga bisa digunakan dalam Oop
// const UMUR = 21;
// echo UMUR;



// class Coba{
//     const NAMA = "Dan";
// }

// echo Coba::NAMA;

//Magic Constant -> __LINE__, __FILE__,__DIR__,__FUNCTION__,__CLASS__,__TRAIT__,__METHOD__,__NAMESPACE__

// echo __LINE__;
// echo __FILE__;

// function coba(){
//     return __FUNCTION__;
// }

// echo Coba();


class coba {
    public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;
?>
