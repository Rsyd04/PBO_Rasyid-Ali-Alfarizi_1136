<?php

class Produk
{

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    // constant
    public const PAJAK = 0.11;

    public function pajak(){
        return self::PAJAK * 100;
        
        }
        public function total(){
            return $this->harga + ($this->harga * self::PAJAK);
            
    }

}
//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 1000000;
$produk->stok = 5;


//hitung pajak

// $pajak = produk::PAJAK * 100;
// $jumlahpajak = $produk->harga * Produk::PAJAK;

//total

// $total = $produk->harga + $jumlahpajak;

//hasil

echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: Rp." . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "Total pajak: Rp. " . $produk->total() ;

