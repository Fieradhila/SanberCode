<?php

function cari_mean($arr){
	$deret = sizeof($arr);
	$hasil = 0;

	for ($i=0; $i < $deret ; $i++) { 
		$hasil = $hasil + $arr[$i];
	}
	$rata = $hasil / $deret;
	$avg = round($rata);
	echo $avg, "<br>";

}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

/*
buatlah file dengan nama cari-mean.php. Di dalam file tersebut buatlah sebuah function dengan nama cari_mean yang menerima parameter berupa array berisi angka-angka. function akan mengembalikan nilai mean atau rata-rata dari kumpulan angka pada array tersebut. Contohnya jika parameternya [1,2,3,4,5] maka function akan me-return angka 3 yang merupakan nilai rata-rata dari data di dalam array tersebut.

$mean = array();
	$hitung = array();

	foreach ($arr as $key => $value) {
		foreach ($value as $skey => $svalue) {
			if (!array_key_exists($skey, $hitung)) {
				$hitung[$skey] = 0;
				$mean[$skey] = 0;
			}
			$hitung[$skey]++;
			$mean[$skey] += $svalue;
		}
	}
	$avg = array();
	foreach ($mean as $key => $value) {
		$avg[$key] = $value / $hitung[$key];
	}
	echo $avg;
*/
?>