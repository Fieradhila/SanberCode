<?php

function palindrome_angka($angka) {
  $hasil = "";
  $sAngka = strval($angka);
  $ubahString = "";
  for ($i = strlen($sAngka) - 1; $i >= 0; $i--) {
  	$ubahString .= $sAngka[$i];
  }

  if ($ubahString == $sAngka) {
  	$angka += 1;
  }

  while (true) {
  	$sAngka = strval($angka);
  	$ubahString = "";
  	for ($i = strlen($sAngka) - 1; $i >= 0; $i--) {
  		$ubahString .= $sAngka[$i];
  	}
  	if ($ubahString == $sAngka){
  		global $hasil;
  		$hasil = $sAngka . "<br>";
  		return $hasil;
  	}else{
  		$angka += 1;
  	};
  };
};

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

/*
Buatlah sebuah file dengan nama palindrome-angka.php. Di dalam file tersebut buatlah sebuah function dengan nama palindrome_angka yang menerima sebuah parameter berupa integer. function tersebut memproses angka tersebut dan mengembalikan angka selanjutnya yang merupakan sebuah palindrome. contoh jika parameter nya angka 38 maka function akan mereturn 44 yang merupakan angka palindrome. Jika parameter yang diberikan merupakan sebuah angka palindrome, maka function me-return angka selanjutnya yang merupakan palindrome. Contoh jika parameter nya angka 6 maka akan mereturn angka 7 yang merupakan palindrome selanjutnya. (Note: angka 0 sampai 9 adalah palindrome)
*/
?>