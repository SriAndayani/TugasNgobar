<?php

class MenghitungBangunRuang{
    public function luasPersegiPanjang($panjang, $lebar){
        $luas = $panjang * $lebar;
        return $luas;
    }

    public function kelilingPersegiPanjang($panjang, $lebat){
        $keliling = 2 * ($panjang + $lebat);
        return $keliling;
    }

    public function luasPersegi($sisi){
        $lp = $sisi * $sisi;
        return $lp;
    }

    public function kelilingPersegi($sisi){
        $kp = 4 * $sisi;
        return $kp;
    }

    public function luasSegitiga($alas, $tinggi){
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    public function luasLingkaran($r){
        $luas = 3.14 * pow($r, 2);
        return $luas;
    
    }
    public function kelilingLingkaran($r){
        $keliling = 2 * 3.14 * $r;
        return $keliling;
    }
}

$bangunRuang = new MenghitungBangunRuang();
$luasPersegiPanjang = $bangunRuang->luasPersegiPanjang(4, 2);
echo "Luas Persegi Panjang adalah $luasPersegiPanjang <br>";

$kelilingPersegiPanjang = $bangunRuang->kelilingPersegiPanjang(4, 2);
echo "Keliling Persegi Panjang adalah $kelilingPersegiPanjang <br>";

$luasPersegi = $bangunRuang->luasPersegi(4);
echo "Luas Persegi adalah $luasPersegi <br>";

$kelilingPersegi = $bangunRuang->kelilingPersegi(4);
echo "Keliling Persegi adalah $luasPersegi <br>";

$luasSegitiga = $bangunRuang->luasSegitiga(4, 8);
echo "Luas Segitiga adalah $luasSegitiga <br>";

$luasLingkaran = $bangunRuang->luasLingkaran(4);
echo "Luas Lingkaran adalah $luasLingkaran <br>";

$kelilingLingkaran = $bangunRuang->kelilingLingkaran(4);
echo "Keliling Lingkaran adalah $kelilingLingkaran <br>";
?>