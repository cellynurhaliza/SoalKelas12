<form action="" method="post">
    <label for="">Jumlah Detik:</label>
    <input type="number" name="jumlahDetik">
    <input type="submit" value="Hitung">
</form>


<?php
   $jumlahDetik = $_POST['jumlahDetik'];
    
   $jam = floor($jumlahDetik / 3600);
   $sisaDetik = $jumlahDetik % 3600;
   $menit = floor($sisaDetik / 60);
   $detik = $sisaDetik % 60;
   echo $jam," jam ";
   echo $menit," menit ";
   echo $detik," detik ";
?>