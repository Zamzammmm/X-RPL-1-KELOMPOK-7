<html>
<head>
<h1 align = "center"><font face="Courier New">PENDAFTARAN UANG SEKOLAH</font></h1>
</head> 

<body >
<font face="Courier New"/>
    <fieldset style="width : 50%, margin="center"" >
        <legend style="font-size:2vw">Kwitansi Pembayaran</legend>
        <form action="proseskwitansi.php" method="POST">
            <table>
                    <tr>    
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td> <input type="text" name="nama" size="30" value=" "></td>
                    </tr>

                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><input type="number" name="nisn" value=" "></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                    <td><textarea name = "alamat" rows ="5" cols="40"></textarea></td>
                    </tr>

                    <tr>
                        <td>Agama</td><td>:</td>
                        <td> <select name="agama" >
                            <option value="Islam"> Islam </option>
                            <option value="Kristen"> Kristen </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha">Budha</option>
                            <option value="Atheis">Atheis</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Jurusan</td><td>:</td>
                        <td>
                        <input type="radio" name="jurusan" value="RPL"/>RPL
                        <input type="radio" name="jurusan" value="TSM"/>TSM
                        <input type="radio" name="jurusan" value="TKR"/>TKR
                        </td>
                    </tr>
    
                    <tr>
                        <td>Jumlah Biaya Pendaftaran</td>
                        <td>:</td>
                        <td>Rp. 8.500.500</td>
                    </tr>

                    <tr>
                        <td>Jumlah Uang</td><td>:</td>
                        <td> <input type="text" name="jumlah_uang" size="30"  ></td>
                    </tr>

                    <tr>
                        <td><br>
                        <input type="submit" name="submit" value="Hitung">
                        <input type="reset" name="reset" value="Batal">
                        <a href="index.php" style = "text-decoration : none">Kembali</a>
                        
                        </td>
                    </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>