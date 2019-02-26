<h3>Hitung Volume Tabung</h3>
<p>Masukkan Data Tabung</p>
<form action="volume-tabung.php" method="post">
jari-jari tabung : <input type="text" name="jari2"><br><br>
tinggi tabung : <input type="text" name="tinggi"><br><br>
<input type="submit" name="SUBMIT" value="Hitung">
</form>

<?php
if(isset($_POST['SUBMIT'])){
    $jari = $_POST['jari2'];
    $tinggi = $_POST['tinggi'];
    $phi = 22/7;
    
    $volume = $phi * $jari * $jari * $tinggi; // Menghitung volume
    $luas = ($phi * $jari * $jsri * 2) + (2 * $phi * $jari * $tinggi); // menghitung luas

 echo "Luas = $luas";
 echo "Volume = $volume";
}
?>