<?php
	abstract class Kendaraan{
		abstract public function jenisKendaraan();
		abstract public function merk();
		abstract public function tahunPembuatan();
	}

	class RodaDua extends Kendaraan
	{
		public $jenKen;
		public $manFaktur;
		public $tahun;
		public $merk;

		function __construct($jenis,$mrk,$manufac,$thn){
			$this->jenKen=$jenis;
			$this->manFaktur=$manufac;
			$this->tahun=$thn;
			$this->merk=$mrk;
		}
		
		public function jenisKendaraan(){
			echo "Jenis Kendaraan : <b>".$this->jenKen."</b><br>";
		}

		public function merk(){
				echo "Merk/Tipe Kendaraan : <b>".$this->merk."</b><br>";
		}

		public function manufactur(){
			echo "Tempat Pembuatan : <b>".$this->manFaktur."</b><br>";
		}
		public function tahunPembuatan(){
			echo "Tahun Pembuatan : <b>".$this->tahun."</b><br>";
		}
		public function warna(){
			echo "Warna Kendaraan : <b> Merah </b><br>";
		}
		public function silinder(){
			echo "Isi Silinder (cc) : <b> 135 </b>cc <br>";
		}
	}

	class spekMotor extends RodaDua implements kepemilikan,kegunaan
	{
		public $kepMil;
		public $kendara;
		public $cepat;
		function __construct($kepMili,$kendaraan,$cepatan){

			$this->kepMil=$kepMili;
			$this->kendara=$kendaraan;
			$this->cepat=$cepatan;
		}

		public function milik(){
			echo "<br>Nama Pemilik Kendaraan : <b>".$this->kepMil."</b><br>";
		}
		public function berkendara(){
			echo " Digunakan untuk : <b> ".$this->kendara."</b><br>";
		}
		public function kecepatan(){
			echo " Kecepatan Maksimal : <b> ".$this->cepat."</b> km/jam<br>";
		}
	}

	interface kegunaan{
		public function berkendara();
		public function kecepatan();
	}

	interface kepemilikan{
		public function milik();
	}

	$roda= new RodaDua("Motor","Yamaha","Jepang",2012);
	$roda->jenisKendaraan();
	$roda->merk();
	$roda->manufactur();
	$roda->tahunPembuatan();

	$spek = new spekMotor("Imam Fahmi Fadillah","Bekerja",120);
	$spek->milik();
	$roda->jenisKendaraan();
	$roda->merk();
	$roda->tahunPembuatan();
	$spek->berkendara();
	$spek->kecepatan();
	$spek->warna();
	$spek->silinder();
?>