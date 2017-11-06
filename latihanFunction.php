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
			$split="12 08 31";
			echo "<pre>";
			print_r(explode(" ", $split,3));
			echo "</pre>";
			?>
		<h3>No.3 Function</h3>
		<?php
			function hurufTengah($key){
			$wlen = strlen($key);
   			$lPad = floor($wlen/2)+1;
    		$rPad = ceil($wlen/2);
   			$left = substr($key, 0, -$lPad);
   			$middle = substr($key, -$lPad, 1); 
   			$right = substr($key, $rPad, $lPad);
   			return $middle;
   			}
   			echo "huruf tengah dari kata FAHMI adalah : <b>" .hurufTengah("FAHMI")."</b>";
			
			?>
		<h3>No.4 Function</h3>
		<?php
			function hurufVokal($String) {
    		return substr_count($String, 'a')+substr_count($String, 'e')+substr_count($String, 'i')+substr_count($String, 'o')+substr_count($String, 'u');
		} echo "dari kata (Drink Water) memiliki : <b>".hurufVokal("Drink Water")."</b> Huruf Vokal";
		?>
		<h3>No.5 Function</h3>
		<?php
			function hitungKata ($input){
			// $input  = "The quick brown fox jumps over the lazy dog"; 
			$input = str_word_count($input);
			return $input;
			}
			echo "Number of words in the string : ".hitungKata("The quick brown fox jumps over the lazy dog");
		?>
		<h3>No.6 Function</h3>
		<?php
		function figureValue($principal,$rate,$years){
   		$futureValue = round($principal * pow(1 + ($rate/100), $years), 2);
   		return $futureValue;
    	}
    	echo figureValue(1000,10,5);
   		?>
</body>
</html>