<form action="" method="post">
    <table>
        <tr>
            <td>Jam: </td>
            <td><input type="number" name="jam"></td>
        </tr>
        <tr>
            <td>Menit: </td>
            <td><input type="number" name="menit"></td>
        </tr>
        <tr>
            <td>Detik: </td>
            <td><input type="number" name="detik"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Cek" name ="proses"></td>
        </tr>
    </table>
</form>


<?php
   $jam = $_POST['jam'];
   $menit = $_POST['menit'];
   $detik = $_POST['detik'];
    
   $j = 3600;
   $m = 60;
   $hasilJam = $jam * $j;
   $hasilMenit = $menit * $m;
   $hasilAkhir = $hasilJam + $hasilMenit + $detik;
   echo $hasilAkhir;

?>