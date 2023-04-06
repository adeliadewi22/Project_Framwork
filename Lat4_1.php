<?php
//class mobil
Class Mobil {
	public $nama;
	public $merk;
	
	function getInfo(){
		echo "Nama mobil: ".$this->nama."<br/>";
		echo "Merk :".$this->merk."<br/>";
	}
}
//main
$ferrari=new Mobil();
$ferrari->nama="xxx";
$ferrari->merk="aaa";
$ferrari->getInfo();	

?>
