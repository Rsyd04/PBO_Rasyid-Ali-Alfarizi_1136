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
        public function __construct($kode, $nama, $harga, $stok){
            $this->kode = $kode;
            $this->nama = $nama;
            $this->harga = $harga;
            $this->stok = $stok;
        }
        public function __destruct(){
            echo"<br/>";
            echo "TerimaKasih";
        }
}
//object
$produk = new Produk('P0001', 'laptop',10000000,5);


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

