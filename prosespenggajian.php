<?php
 
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$jam_kerja = $_POST['jam_kerja'];
$jl = $_POST['jam_lembur'];
 
    if($jabatan == 'sekretaris'){
        $gaji_perjam = 30000;
    }elseif ($jabatan == 'bendahara') {
        $gaji_perjam = 31000;
    }elseif ($jabatan == 'marketing') {
        $gaji_perjam = 32000;
    }elseif ($jabatan == 'produksi') {
        $gaji_perjam = 33000;
    }else{
        $gaji_perjam = 34000;
    }
 
// if($jam_kerja <= 200){
//     $jam = $jam_kerja;
// }else{
//     $jam =  200;
//     $jl = $jam_kerja - $jam;
// }
 
$gaji_pokok = $jam_kerja * $gaji_perjam;
 
$gaji_lembur = 20000 * $jl;
 
$total_gaji = $gaji_pokok + $gaji_lembur;
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Penggajian</title>
</head>
<body>
    <fieldset style="width : 50%, margin="center"">
        <legend style="font-size:2vw" align="center">Hasil Gaji</legend>
        <table align="center">
    <tr>
        <td>Nama Karyawan</td>
        <td>:</td>
        <td><?php echo ucwords($nama); ?></td>
    </tr>
    <tr>

        <td>Jabatan Karyawan</td> 
        <td>:</td>
        <td><?php echo ucwords($jabatan); ?></td>
    </tr>
    <tr>
        <td>Jam Kerja </td>
        <td>:</td>
        <td><?php echo $jam_kerja." Jam"; ?></td>
    </tr>
    <tr>
        <td>Gaji Perjam</td>
        <td>:</td> 
        <td><?php echo "Rp. ". $gaji_perjam; ?></td>
    </tr>
    <tr>
        <td>Gaji Pokok</td>
        <td>:</td> 
        <td> <?php echo"Rp. ". $gaji_pokok; ?></td>
    </tr>
    <tr>
        <td>Lembur</td> 
        <td>:</td> 
        <td><?php echo $jl." Jam"; ?></td>
    </tr>
    <tr>
        <td>Gaji Lembur Perjam </td>
        <td>:</td>
        <td><?php echo "Rp. ". 20000; ?></td>
    </tr>
    <tr>
        <td>Gaji Lembur</td> 
        <td>:</td>
        <td> <?php echo "Rp. ". $gaji_lembur; ?></td>
    </tr>
    <tr>
        <td>Total Gaji Karyawan</td>
        <td>:</td> 
        <td><?php echo "Rp. ".$total_gaji; ?></td>
    </tr>
    </fieldset>
</table>
</body>
</html>