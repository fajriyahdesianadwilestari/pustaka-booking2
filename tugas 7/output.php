<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
</head>
<body>
<?php
$nilai1=$_POST['nilai1'];
$nilai2=$_POST['nilai2'];
$rumus=$_POST['rumus'];
?>
HASIL HITUNG RUMUS 
<br><br>
Nilai a adalah = <?php echo $nilai1 ; ?><br>
Nilai b adalah = <?php echo $nilai2 ; ?><br>
<?php 
    if ($nilai1=="0" AND $nilai2=="0")
    {
    	echo "Tidak Ada Hasil Perhitungan";
    } 
        elseif ($rumus=="segituga") 
        {
    	   $hasil=(1/2*($nilai1*nilai2));
    	   echo "Rumus Yang dipilih Aadalah = $rumus <br>
    	   Hasil Perhitungan Rumus = $hasil";
        }
        else 
        {
            $hasil=($nilai1*nilai2);
            echo "Rumus Yang Dipilih Adalah = $rumus <br>
            Hasil Perhitungan Rumus = $hasil";
        }    	
        
 ?>  
</body>
</html>