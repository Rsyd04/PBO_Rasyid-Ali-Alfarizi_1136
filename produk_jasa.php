<?php

use Pbo\Marketplace\Jasa;
// call file property
require('./jasa.php');

//object
$produk = new Jasa();
$produk -> setKode('P0001') ->setNama('Laptop') ->setHarga(10000000) ->setStok(5);




//hasil

echo "Produk: " . $produk->getNama();
echo "<br/>";
echo "Harga: Rp." . $produk->getHarga();
echo "<br/>";
echo "Stok: " . $produk->getStok();
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "Total pajak: Rp. " . $produk->total() ;
echo "<br/>";

echo "Metode Pembayaran: ". $produk->payment('transfer');