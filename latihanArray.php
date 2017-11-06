<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<h2>Tugas Array</h2>
	<h3>No. 1</h3>
	<?php
		$warna = array('white', 'green', 'red', 'blue', 'black');
		echo "Merah = ".$warna[2]."<br> Hijau = ".$warna[1]."<br> Putih = ".$warna[0];
	?>
	<h3>No. 2</h3>
	<?php
		$warna = array('white', 'green', 'red');
		echo "<li>".$warna[1]."<li>".$warna[2]."<li>".$warna[0];
	  ?>
	<h3>No. 3</h3>
	<?php
		$negara = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;  
		echo "The capital of Netherlands is ".$negara['Netherlands']."<br>
		The capital of Greece is ".$negara['Greece']."<br> The capital of Germany is ".$negara['Germany'];
	?>
	<h3>No. 5</h3>
	<?php
		$warna = array(4 => 'white', 6 => 'green', 11=> 'red');
		echo $warna[4];
	?>
	<h3>No. 7</h3>
	<?php
		$nomor = array(1,2,3,4,5);
		$tambah= array('$');
		array_splice($nomor ,3,0 , $tambah);
		$hasil = count($nomor);
		for ($i=0 ; $i < $hasil; $i++){
			echo $nomor[$i]." ";
		}
	?>
	<h3>No. 8</h3>
	<?php
		$urut=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
		asort($urut);
		foreach ($urut as $key => $value) {
			echo "Key => ".$key.",Value = <b>".$value."</b><br>";
		}
	?>
	<br>
	<?php
		$urut=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
		ksort($urut);
		foreach ($urut as $key => $value) {
			echo "Key => <b>".$key."</b>, Value = ".$value."<br>";
		}
	?>
	<br>
	<?php
		$urut=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
		arsort($urut);
		foreach ($urut as $key => $value) {
			echo "Key => ".$key.", Value = <b>".$value."</b><br>";
		}
	?>
	<br>
	<?php
		$urut=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
		krsort($urut);
		foreach ($urut as $key => $value) {
			echo "Key => <b>".$key."</b>, Value = ".$value."<br>";
		}
	?>
	<h3>No. 9</h3>
	<?php
		$suhu = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
		$rata2=array_sum($suhu)/count($suhu);
		echo "Rata-rata = ".$rata2."<br>";
		sort($suhu);
		echo "List of Five lowest temperatur :";
		for ($i=0; $i < 5 ; $i++) { 
			echo $suhu[$i]." ";
		}
		echo "<br> List of Five highest temperatur :";
		for ($i=count($suhu)-5; $i < count($suhu); $i++) { 
			echo $suhu[$i]." ";
		}
	?>
	<h3>No. 12</h3>
	<?php
		$warna = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
		$kecil = array_map('strtolower', $warna);
		echo "Values are in lower case <br>";
		echo "Array (";
		foreach ($kecil as $key => $value) {
			echo " [".$key."] = ".$value;

		}echo " ) <br><br>";

		$kecil = array_map('strtoupper', $warna);
		echo "Values are in upper case <br>";
		echo "Array (";
		foreach ($kecil as $key => $value) {
			echo " [".$key."] = ".$value;
		}echo " ) <br>";
	?>
	<h3>No. 13</h3>
	<?php
		  $max=250;
		  $min=200;
		  for ($i=$min; $i < $max ; $i++) { 
		  	if ($i % 4==0) {
		  		echo $i." ";
		  	}
		  }
	?>
	<h3>No. 14</h3>
	<?php
		$huruf =array('abcd','abc','de','hjjj','g','wer');
		$cek = array_map('strlen', $huruf);
		echo " The Shortest array length is " .min($cek)."<br>";
		echo " The Longest array length is " .max($cek);
	?>
	<h3>No. 15</h3>
	<?php
	function acak($min,$max,$jumlah){
		$num=range($min, $max);
		shuffle($num);
		return array_slice($num,0, $jumlah);
		return ($min>0);
		}
		echo "<pre>";
		print_r(acak(11,20,10));
		echo "</pre>";
	?>
	<h3>No. 16</h3>
	<?php
		echo "The Largest : ".max(array_keys(acak(11,20,10)));
	?>
	<h3>No. 17</h3>
	<?php
		echo "The Lowers : ".min(array_filter(acak(0,20,10)));
		?>
	<h3>No. 36</h3>
	<?php
		$kota = array( "Bandung", "Jakarta", "Surabaya", "Medan","Semarang");
		echo "Awal : ";
		foreach ($kota as $key) {
			echo " ".$key.",";
		}
		echo "<br><br>";
		$lower=array_map('strtolower', $kota);
		echo "To Lower :";
		foreach ($lower as $key) {
			echo "<br>".$key;
		}
		echo "<br>";
		$upper=array_map('strtoupper', $kota);
		echo "<br>To Upper : ";
		foreach ($upper as $key) {
			echo "<br>".$key;
		}
		?>
		<h3>No. 37</h3>
		<?php
		// array suhu ngambil dari soal no. 9
		$hitung = array_count_values($suhu);
		$hasil = $hitung[62];
		echo "Input = 62 <br>";
		echo "Angka 62 muncul sebanyak : ".$hasil." Kali";
		?>
	</body>
</html>
