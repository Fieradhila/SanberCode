<?php
function pasangan_terbesar($angka){
	$besar = substr($angka, 0, 2);
	for ($i=0; $i <= strlen($angka)-2; $i++) { 
		$couple_angka = substr($angka, $i, 2);
		if ($couple_angka > $besar) {
			$besar = $couple_angka;
		}
	}
	echo $besar, "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

/*
buatlah sebuah file dengan nama pasangan-terbesar.php. Di dalam file tersebut buatlah function dengan nama pasangan_terbesar yang menerima sebuah parameter berupa angka dan akan mengembalikan pasangan angka yang merupakan angka terbesar. Contoh jika parameternya adalah 16749549 maka function me-return 95 karena angka tersebut adalah pasangan angka terbesar
*/
?>