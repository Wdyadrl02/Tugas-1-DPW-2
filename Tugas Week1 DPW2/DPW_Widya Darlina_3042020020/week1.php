<?php

include "animal.php";

class Sapi {
	var $cowi;
	function Tidak_bisa_terbang() {
		// $cowi-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $cowi-> Moooo;

	}
}

$cowi = new Sapi;
$cowi->jumlah_kaki = 4;
echo "Cowi adalah Sapi <br>";
echo "Punya Kaki Sebanyak : ". $cowi-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang". "<br>";
echo "Suaranya : Moooo ". $cowi->bersuara(). "<br>"; 

echo "<hr>";

class Kelinci {
	var $Rabbity;
	function Tidak_bisa_terbang() {
		// $Rabbity-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $Rabbity-> Winny;
	}
}


$Rabbity = new Kelinci;
$Rabbity->jumlah_kaki = 4;
echo "Rabbity adalah Kelinci <br>";
echo "Punya Kaki Sebanyak : ". $Rabbity-> jumlah_kaki. "<br>";
echo "Tidak Bisa Terbang". "<br>";
echo "Suaranya : Whinny". $Rabbity->bersuara(). "<br>";

echo "<hr>";

class Kucing {
	var $momow;
	function Tidak_bisa_terbang() {
		// $momow-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $momow-> Meoong;
	}

}

$momow = new Kucing;
$momow->jumlah_kaki = 4;
echo "momow adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ". $momow-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang" . "<br>";
echo "Suaranya : Meoong". $momow->bersuara(). "<br>";

echo "<hr>";

class Merpati{
	var $dove;
	function Tidak_bisa_terbang() {
		// $dove-> Bisa Terbang;
	}
	function bersuara(){
		// $dove-> Buzz;
	}
}

$dove = new Merpati;
$dove->jumlah_kaki = 6;
echo "dove adalah Nyamuk <br>";
echo "Punya Kaki Sebanyak : ". $dove-> jumlah_kaki. "<br>";
echo "Bisa terbang". "<br>";
echo "Suaranya : Buzz". $dove->bersuara(). "<br>";

echo "<hr>";
