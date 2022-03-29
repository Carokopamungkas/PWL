<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum<br/>"){
  echo $salam."";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Saya berusia ". hitungUmur(1999, 2022) ." tahun<br/>";
  echo "Saya berkuliah di Universitas Dian Nuswantoro<br/>";
}


// memanggil fungsi perkenalan
perkenalan("caroko aji pamungkas");

?>