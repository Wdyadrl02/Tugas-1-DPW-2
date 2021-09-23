<?php

include "animal.php";

class Sapi {
	var $miwa;
	function Tidak_bisa_terbang() {
		// $miwa-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $cmiwa-> Moooo;

	}
}

$miwa = new Sapi;
$miwa->jumlah_kaki = 4;
echo "miwa adalah Sapi <br>";
echo "Punya Kaki Sebanyak : ". $miwa-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang". "<br>";
echo "Suaranya : Moooo ". $miwa->bersuara(). "<br>"; 

echo "<hr>";

class Kelinci {
	var $Rabbity;
	function Tidak_bisa_terbang() {
		// $Rabbity-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $Rabbity-> Nyinyinyi;
	}
}


$Rabbity = new Kelinci;
$Rabbity->jumlah_kaki = 4;
echo "Rabbity adalah Kelinci <br>";
echo "Punya Kaki Sebanyak : ". $Rabbity-> jumlah_kaki. "<br>";
echo "Tidak Bisa Terbang". "<br>";
echo "Suaranya :Nyinyinyi ". $Rabbity->bersuara(). "<br>";

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
		// $dove-> Krutut;
	}
}

$dove = new Merpati;
$dove->jumlah_kaki = 6;
echo "dove adalah Merpati <br>";
echo "Punya Kaki Sebanyak : ". $dove-> jumlah_kaki. "<br>";
echo "Bisa terbang". "<br>";
echo "Suaranya :Krutut". $dove->bersuara(). "<br>";

echo "<hr>";
