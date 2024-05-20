<?php
class kucing {
    public $warna;
    public $corak;
    public $warna_mata;

    public function __construct($warna, $corak, $warna_mata){
        $this->warna = $warna;
   	    $this->corak = $corak;
        $this->warna_mata = $warna_mata;
    }
    public function meow() { echo “Meow”; }

    public function makan() { echo “Kucing_sedang_makan.”; }
    
    public function tidur() { echo “Kucing_sedang_tidur.”; }
}

$oyen = new Kucing();
$oyen->warna = “oren”;
$oyen->corak = “belang”;
$oyen->warna_mata = “kuning”;

$oyen->meow();
$oyen->makan();
$oyen->tidur();

$bleki = new Kucing();
$bleki->warna = “hitam”;
$bleki->corak = “polos”;
$bleki->warna_mata = “kuning”;

$bleki->meow();
$bleki->makan();
$bleki->tidur();