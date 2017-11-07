<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>
		<h3>No.1 Function</h3>
		<?php
			function luasKotak ($s){
				$hitung=$s*$s;
				return $hitung;
			}
			echo "Hasil Luas Persegi : ".luasKotak(8);
		?>
		<h3>No.2 Function</h3>
		<?php
			function pisah(){
				$angka="120831";
				for ($i=0; $i < strlen($angka) ; $i++) {
					if ($i%2==0) {
						echo " ";
					}echo $angka[$i];
				}
			}
			pisah();
			?>
		<h3>No.3 Function</h3>
		<?php
			function hurufTengah(){
			$key="IMAM FAHMI";
			$tengah=strlen($key)/2;
			$atas=ceil($tengah);
			$bwh=floor($tengah)-1;
			echo "Input : ".$key."<br><br>";
			if(strlen($key)%2==0){
				echo "Hasilnya dari kata ".$key." adalah huruf : <b>".substr($key,$bwh,2)."</b><br>";
			}else{
				echo "Hasilnya dari kata ".$key." adalah huruf : <b>".substr($key,$tengah,1)."</b><br>";
				}
   			}
   			hurufTengah();		
			?>
		<h3>No.4 Function</h3>
		<?php
			function hurufVokal($String) {
    		return substr_count($String, 'a')+substr_count($String, 'e')+substr_count($String, 'i')+substr_count($String, 'o')+substr_count($String, 'u');
		} echo "dari kata (Drink Water) memiliki : <b>".hurufVokal("Drink Water")."</b> Huruf Vokal";
		?>
		<h3>No.5 Function</h3>
		<?php
			function hitungKata (){
			$input  = "The quick brown fox jumps over the lazy dog"; 
			$input = str_word_count($input);
			return $input;
			}
			echo "Number of words in the string : ".hitungKata();
		?>
		<h3>No.6 Function</h3>
		<?php
	function futureInvestmentValue($amount, $InterestRate,$years) {
		return $amount * pow(1 + ($InterestRate/12), $years * 12);
	}
		$amount=1000;
		$InterestRate=10;
		$years=5;
		$InterestRate *= 0.01;
		echo "Years &nbsp;&nbsp;&nbsp;Future Value<br>";
		for ($i=1; $i <= $years  ; $i++) { 
			echo $i."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".futureInvestmentValue($amount,$InterestRate,$i)."<br>";
		}
   		?>
   		<H3>No.7 Function</H3>
   		<?php
   		function karakter($awal,$akhir,$limit){
   			for ($i=1; $awal <= $akhir ; $i++,$awal++) {
   				echo chr($awal)." ";
   				if ($i%$limit==0) {
   					echo "<br>";
   				 } 
   			}
   	   	}echo karakter(ord('('),ord('z'),20);
    ?>
</body>
</html>