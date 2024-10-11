<?php 

// class ContohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         return "halo ". self::$angka++ ." kali";
//     }


// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

//Static Keyword :terikat dengan kelas, nilai objek tetap meski di instansi berkali kali


Class Contoh{
    public static $angka = 1;

    public function halo(){
        return "halo " . self::$angka++ ."Kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


//Function akan melanjutkan hitungan walaupun beda objek

?>