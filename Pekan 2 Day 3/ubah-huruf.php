<?php
function ubah_huruf($string){
	$abjad = "abcdefghijklmnopqrstuvwxyz";
	$output = "";
	for ($i=0; $i < strlen($string); $i++) { 
		$position = strrpos($abjad, $string[$i]);
		$output .= substr($abjad, $position+1, 1);
	}
	echo $string, " : ", $output, "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

/*
buatlah sebuah file dengan nama ubah-huruf.php. Di dalam file tersebut buatlah sebuah function dengan nama ubah_huruf yang menerima parameter berupa string. function akan mereturn string yang berisi karakter-karakter yang sudah diubah dengan karakter setelahnya dalam susunan abjad “abdcde …. xyz”. Contohnya karakter “a” akan diubah menjadi “b” karakter “x” akan berubah menjadi “y”, dst.
*/
?>