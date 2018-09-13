<?php
echo"<b>Bintang Piramida dengan menggunakan fungsi Rekursif</b><br><br>";
function rekursif ($batas){
	echo "<pre>";
	for ($i=1;$i<=$batas;$i++){
     for ($j=$batas;$j>=$i;$j--){
    echo "*";
      }
     echo "<br>";
}
	echo "</pre>";
}
rekursif(5);
echo"=================================";

echo"<b>Piramida Angka dengan menggunakan fungsi Rekursif</b><br><br>";
function rekursif2 ($batas2){
	echo "<pre>";
	for ($i=1; $i <=$batas2 ; $i++) {
 for ($j=4; $j>=$i ; $j--) {
 echo "&nbsp";
 }
for ($k=$i; $k >=1 ; $k--) {
 echo "$k";
 }
 echo "<br>";
}
echo"<pre>";
 
}

rekursif2(5);

?>
