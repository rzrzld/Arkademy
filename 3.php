<?php
$ukuran = 5;
$tengah = ($ukuran/2)+0.5;

for($a=1; $a<=$ukuran; $a++){
    for($b=1; $b<=$ukuran; $b++){ 
        if(($b==1 || $b==$ukuran || $a==$tengah) && $a<=$ukuran){
			echo "* ";
		} else{
			echo "= ";
		}
	}
	echo "<br/>";
}
?>