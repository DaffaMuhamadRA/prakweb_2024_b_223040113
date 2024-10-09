<?php 
//produk :
    //komik
    //game

class produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0,$tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
            if($this->tipe == "komik"){
                $str .= "- {$this->jmlHalaman} Halaman.";
            }else if($this->tipe == "game"){
                $str .= "~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul } | {$produk -> getLabel()}  {$produk -> harga}";
        return $str;
    }
}


$produk1 = new produk("Naruto","Masashi Kishimoto","Shonen Jump",30000, 11,0,"komik");
$produk2 = new produk("Uncharted","Neil Druckmann","Sony Computer",25000, 0,50,"game");


// echo "Komik : ".$produk1->getLabel();
// echo "<br>";
// echo "Game : ".$produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1 -> cetak($produk1);

//Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 JAM.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>
