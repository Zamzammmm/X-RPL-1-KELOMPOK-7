<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gaji Karyawan</title>
    </head>
    <body>
    <fieldset style="width : 50%, margin="center"" >
        <legend style="font-size:2vw" align="center">Form Gaji Karyawan</legend>
        <form action="prosespenggajian.php" method="post">
            <table align="center">
                <tr>
                    <td>Nama Karyawan</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""><br><br></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <select name="jabatan">
                            <option value="sekretaris">Sekretaris</option>
                            <option value="bendahara">Bendahara</option>
                            <option value="marketing">Marketing</option>
                            <option value="produksi">Produksi</option>
                            <option value="akuntan">Akuntan</option>
                        </select><br><br>
                    </td>
                </tr>
                <tr>
                    <td>Jam Kerja</td>
                    <td>:</td>
                    <td> <input type="number" name="jam_kerja" value="jam">jam<br><br></td>
                </tr>
                <tr>
                    <td>Jam Lembur</td>
                    <td>:</td>
                    <td><input type="number" name="jam_lembur" value="jam">Jam <br><br></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan" name="simpan"> 
                    <input type="reset" name="reset" va
lue="reset">
                    <a href="index.php" style = "text-decoration : none">Kembali</a></td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>
