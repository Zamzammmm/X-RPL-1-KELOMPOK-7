<html>
<head>
<h1 align = "center"><font face="Courier New">PENDAFTARAN SISWA</font></h1>
<title>Pendaftaran</title>
</head>

<body>
<font face="Courier New"/>
    <fieldset style="width : 50%, margin="center"" >
        <legend style="font-size:2vw">FORMULIR PENDAFTARAN SISWA SMK</legend>
<FORM ACTION="prosespendaftaran.php" METHOD="POST" NAME="input">

<table border="0" style="center;">
<tr>
    <td>NO PENDAFTARAN</td>
    <td>:</td>
    <td><input type="number" name="no_pendaftaran" placeholder="No Pendaftaran Anda...."></td>
</tr>
<tr>
    <td>NISN</td>
    <td>:</td>
    <td><input type="number"  name="nisn" placeholder="Nisn Anda...."></td>
</tr>
<tr>
    <td>NAMA </td>
    <td>:</td>
    <td><input type="text"  name="nama" placeholder="Nama Anda...."></td>
</tr>
<tr>
    <td>ALAMAT</td>
    <td>:</td>
    <td><textarea name = "alamat" rows ="5" cols="40"></textarea></td>
</tr>
<tr>
<td>HOBI </td>
<td>:</td>
<td> 
       <input type="checkbox" name="hobi1" value="Futsal"> Futsal<br>
       <input type="checkbox" name="hobi2" value="coding"> Coding<br>
       <input type="checkbox" name="hobi3" value="Ngurek"> Ngurek <br>
       <input type="checkbox" name="hobi4" value="al-qur'an"    > Al-Qur'an<br>
       </td>
</tr>
<tr>
<tr>
    <td>TEMPAT LAHIR</td>
    <td>:</td>
    <td><input type="text"  name="tempat_lahir" placeholder="Tempat Lahir Anda..."></td>
</tr>
<tr>
    <td>TANGGAL LAHIR</td>
    <td>:</td>
    <td><input type="date"  name="tanggal_lahir" placeholder="Tanggal Lahir Anda..."></td>
</tr>
<tr>
    <td>AGAMA</td>
    <td>:</td>
    <td><select name="agama">
      <option value ="ISLAM">ISLAM</option>
      <option value ="KRISTEN">KRISTEN</option>
      <option value ="HINDU">HINDU</option>
      <option value ="BUDHA">BUDHA</option>
      </select></td>
</tr>
<tr>
    <td>ASAL SEKOLAH</td>
    <td>:</td>
    <td><input type="text"  name="asal_sekolah" placeholder="Asal Sekolahh Anda..."></td>
</tr>

<tr>
    <td>JENIS KELAMIN</td>
    <td>:</td>
    <td>
    <input type="radio" name="jk" value ="Laki-Laki">Laki-Laki
    <input type="radio" name="jk" value ="Perempuan">Perempuan
    </td>
</tr>
<tr>
    <td>JURUSAN</td>
    <td>:</td>
    <td><select name="jurusan">
      <option value ="RPL" >RPL</option>
      <option value ="TSM">TSM</option>
      <option value ="TKR">TKR</option>
      </select></td>
</tr>
<tr>
    <td>No Hp</td>
    <td>:</td>
    <td><input type="number" name="no_hp" placeholder="No Hp Anda..."></td>
</tr>
<tr>
    <td>NAMA AYAH</td>
    <td>:</td>
    <td><input type="text" name="nama_ayah" placeholder="Nama Ayah..."></td>
</tr>
<tr>
    <td>PEKERJAAN AYAH</td>
    <td>:</td>
    <td><input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan ayah Anda..."></td>
</tr>
<tr>
    <td>NAMA IBU</td>
    <td>:</td>
    <td><input type="text"name="nama_Ibu" placeholder="Nama Ibu..."></td>
</tr>
<tr>
    <td>PEKERJAAN IBU</td>
    <td>:</td>
    <td><input type="text"name="pekerjaan_Ibu" placeholder="Pekerjaan Ibu Anda..."></td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="simpan"/>
    <input type="reset" name="reset" value="Hapus"/>
    <a href="index.php" style = "text-decoration : none">Kembali</a></td>
</tr>

</table>
</body>
</html>  