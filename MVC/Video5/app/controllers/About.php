<?php 

class About{
    public function index($nama= 'dap',$pekerjaan ='nganggur'){
        echo"Halo, nama saya $nama, saya adalahh seorang yang sedang $pekerjaan";
    }
    public function page(){
        echo'About/page';
    }
}