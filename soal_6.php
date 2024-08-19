<form method="post" action="">
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Nilai Ujian Siswa $i: <input type='number' name='nilai[]'><br>";
        }
    ?>
    <input type="submit" name="submit" value="Cari nilai tertinggi">
</form>
<?php
    $nilai = $_POST['nilai'];
    $nilai_tertinggi = max($nilai);
    $jumlah_tertinggi = count(array_filter($nilai, function($n) use ($nilai_tertinggi) {
        return $n == $nilai_tertinggi;
    }));

    echo "Nilai tertinggi: $nilai_tertinggi<br>";
    echo "Jumlah siswa : $jumlah_tertinggi";
?>