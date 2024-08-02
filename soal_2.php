<form action="" method="post">
    <table>
        <tr>
            <td>Angka pertama: </td>
            <td><input type="number" name="angka1"></td>
        </tr>
        <tr>
            <td>Angka kedua: </td>
            <td><input type="number" name="angka2"></td>
        </tr>
        <tr>
            <td>Angka ketiga: </td>
            <td><input type="number" name="angka3"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name ="proses"></td>
        </tr>
    </table>
</form>


<?php
   $angka1 = $_POST['angka1'];
   $angka2 = $_POST['angka2'];
   $angka3 = $_POST['angka3'];
    
   if($angka1 > $angka2 && $angka1 > $angka3){
    echo "Nilai terbesar adalah: ". $angka1;
   } if($angka2 > $angka3){
    echo "Nilai terbesar adalah: ". $angka2;
   } else{
    echo "Nilai terbesar adalah: ". $angka3;
   }
?>