<?php
class kendaraan {
    public $nama;
    public $merek;

    public function __construct($nama){
        $this->nama = $nama;
    }
    public function masuk() { echo “masuk_dari_Jakarta.”;}
}

class klasifikasi extends kendaraan{
    public $golongan;

    public function __construct($nama, $merek, $golongan){
        parent::__construct($nama);
        parent::__construct($merek);
        $this->golongan = $golongan;
    }

    public function keluar() { echo “keluar_area_Padalarang.”; }
}

$sedan = new kendaraan(“Corolla_Sedan”, “Toyota”, “golongan_I”);

$sedan->masuk();
$sedan->keluar();

$truk = new kendaraan(“Canter_FE_71”, “Mitsubishi”, “golongan_II”);

$truk->masuk();
$truk->keluar();