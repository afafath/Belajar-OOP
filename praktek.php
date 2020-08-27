<?php
class produk{
  public $namaBarang = "laptop", 
          $merk = "lenovo", 
            $harga = 7000000;


    public function cetakproduk(){

    	return "produk adalahh ....";
    }

    public function cetakproduk2(){

    	return "$this->namabarang, $this->merek, $this->harga";
    }
}
$produk1 = new produk();
$produk2 = new produk();
$produk2->namabarang = "mouse";
$produk2->merk ="logitec";
$produk2->harga = "100000";

var_dump($produk1);
echo " <br>";
var_dump($produk2);
echo "<br>";
echo $produk1-> cetakproduk();
echo "<br>";
echo $produk2-> cetakproduk();