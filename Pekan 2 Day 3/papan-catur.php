<?php

function papan_catur($angka) {
	for ($a = 0; $a < $angka; $a++) { 
		for ($b = 0; $b < ($angka*2)-1; $b++) { 
			if (($a % 2 == 0 && $b % 2 == 0) || ($a % 2 == 1 && $b % 2 == 1)) {
				echo " #&nbsp ";
			}else
				$color = "&nbsp";
		}
		echo "<br>";
	}
	echo "<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

/*
Buatlah sebuah file dengan nama papan-catur.php. Tulislah di dalam file tersebut sebuah function dengan nama papan_catur yang menerima parameter angka. function tersebut akan mereturn string yang membentuk sebuah papan catur dengan simbol pagar “#” dengan ukuran angka x angka.
*/