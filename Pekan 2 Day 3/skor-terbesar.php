<?php
function skor_terbesar($arr){
//kode di sini
  $hasil = array_column($arr, 'nilai');
  array_multisort($hasil, SORT_DESC, $arr);
  return $hasil;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
print_r(skor_terbesar($skor));
//$hasil = array_column($skor, 'nilai');
//array_multisort($hasil, SORT_DESC, $skor);
//echo "<pre>";
//print_r($skor);
//echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
/*
buatlah sebuah file dengan nama skor-terbesar.php. Di dalam file tersebut buatlah sebuah function dengan nama skor_terbesar yang menerima parameter berupa array berisi array asosiatif data penilaian peserta bootcamp. function akan me-return sebuah array asosiatif yang berisi siswa dengan nilai tertinggi di masing-masing kelas.
*/
?>