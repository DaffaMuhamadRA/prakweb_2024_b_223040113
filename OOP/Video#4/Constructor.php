<?php 
//produk :
    //komik
    //game

class produk{
    public  $judul = "judul", 
            $penulis= "penulis",
            $penerbit= "penerbit",
            $harga=0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);

$produk2 = new produk("Uncharted","Neil Druckmann","Sony Computer",25000);

$produk3 = new produk("Dragon Ball");

echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<br>";
var_dump($produk3);
?>
