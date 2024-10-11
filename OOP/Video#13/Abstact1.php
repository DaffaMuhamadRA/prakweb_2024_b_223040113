<?php 
//Abstract digunakan ketika ingin composive over inheritance, menerapkan polimorphism, sentralisasi logic, lalu mempermudah pengerjaan tim (ada interface nya).

abstract class Buah{
    private $warna;
    abstract public function makan();

    public function setWarna($warna){
        $this->warna = $warna;
    }
}
?>