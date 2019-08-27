<html>
<head>
    <h1><font face="Courier New" size="5">Hasil Kwitansi</font></h1>

<body>
    <font face="Courier New"/>

<?php
    if (isset($_POST['submit'])) {
        
        $nama=$_POST["nama"];
        $nonis = $_POST["nisn"];
        $alamat=$_POST["alamat"];
        $agama=$_POST["agama"];
        $jurusan=$_POST["jurusan"];
        $jumlah = $_POST['jumlah_uang'];
    }
?>

    <fieldset>
        <legend>Kwitansi Pembayaran</legend>
        <form action="" method="POST" name="input">
            <table>

        <td colspan="4">------------------------------------------------------</td>

    <tr>
        <td>Nama Siswa</td><td>:</td>
        <td> <?php echo $nama;?></td>
    </tr>

    <tr>
        <td>NISN</td><td>:</td>
        <td> <?php echo $nonis;?> </td>
    </tr>

    <tr>
        <td>Alamat</td><td>:</td>
        <td><?php echo $alamat;?></td>
    </tr>

    <tr>
        <td>Agama</td><td>:</td>
        <td> <?php echo $agama;?></td>
    </tr>

    <tr>
        <td>Jurusan</td><td>:</td>
        <td><?php echo $jurusan;?></td>
    </tr>

    <tr>
        <td>Harga</td>
        <td> : </td>
        <td>Rp. 8.500.000</td>
    </tr>

    <tr>
        <td>Jumlah Uang</td>
        <td>:</td>
        <td><?php echo "Rp. ".$jumlah;?></td>
    </tr>

        <td colspan="4">------------------------------------------------------ (-)</td>

    <tr>
        <td>Sisa / Kembalian Pembayaran</td><td>:</td>
        <td>
        <?php 
            if ($jumlah >= 8500000) {
                $tot_bayar=$jumlah-8500000;
                echo "Rp. $tot_bayar";
            } else {
                $tot_bayar=8500000-$jumlah;
                echo "Rp. $tot_bayar";
            }
        ?></td>
    </tr>

        <td colspan="4">------------------------------------------------------</td>


    </table>
        
        </form>
    </fieldset>
</body>
</html>