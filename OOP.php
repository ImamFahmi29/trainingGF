<?php
	
	class Kendaraan{
		public $jenKen;
		public $manFaktur;
		public $tahun;
		public $merk;

		public function setDetailKen($jenis,$merk,$manFac,$thn){
			$this->jenken=$jenis;
			$this->merk=$merk;
			$this->manFaktur=$manFac;
			$this->tahun=$thn;
		}
		public function getDetailKen(){
			echo "Jenis kendaraan : <b>".$this->jenKen."</b><br> Merk/type Kendaraan : <b>".$this->merk."</b><br> Tempat Pembuatan : <b>".$this->manFaktur." </b><br> Tahun Pembuatan : <b>".$this->tahun."</b><br>";
		}
	}
	class RodaDua extends Kendaraan
	{
		public $warna;
		public $silinder;
		
		function __construct(){
			
			$this->jenKen="Motor";
			$this->merk="Yamaha";
			$this->manFaktur="Jepang";
			$this->tahun=2017;
			$this->getDetailKen();
		}
		
		public function detMotor(){
			$this->warna="Merah";
			$this->silinder=135;
			echo "Warna Kendaraan : <b>".$this->warna."</b><br> Isi Silinder : <b>".$this->silinder."</b> CC <br>";
		}
	}

	class spekMotor extends RodaDua implements kepemilikan,kegunaan
	{
		
		function __construct(){
			
			$this->milik("Imam Fahmi Fadillah");
			parent::__construct();
			parent::detMotor();
			$this->berkendara("Bekerja");
			$this->kecepatan(120);
		}
		
		public function milik($mlk){
			
			echo "<br>Kepemilikan Atas Nama : <b>$mlk</b><br>";
		}
		
		public function berkendara($ken){
			echo "Digunakan : <b>$ken</b><br>";
		}

		public function kecepatan($cepat){
			echo "Kecepatan Maksimal : <b>$cepat</b>";
		}
	}

	interface kegunaan{
		public function berkendara($kenDar);
		public function kecepatan($kec);
	}

	interface kepemilikan{
		public function milik($mil);
	}

	$roda= new RodaDua();
	
	$spek = new spekMotor();
	
?>
