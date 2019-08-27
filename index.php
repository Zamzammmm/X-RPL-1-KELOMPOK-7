<!DOCTYPE html>
<html>
<head>
    <title>Kelompok 7 - XI RPL 1</title>
    <style>
    body{
        background-image : url("IMG-20190824-WA0021.jpg");
        background-size:cover;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
        background-position: top center;
        background-repeat: repeat-x;
    }
    img {
        width : 100px;
    }contoh source code memakai tag div

    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 

    nav ul {
        background:#37988e;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#d68d9a;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
   
    </style>



</head><link rel="stylesheet" href="css/bootstrap.css">
<body>
<nav>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="penggajian.php">Web Penggajian</a></li>
        <li><a href="kwitansi.php">Web Kwitansi</a></li>
        <li><a href="pendaftaran.php">Web Pendaftaran</a></li>
    </ul>
</nav>
    <table border = "0">
        <center>

        <h2><b>Anggota Kelompok : </h2></b><br>
        <div >
        <div ><img src="aj.jpg" title="Ajrin R" alt="Ajrin" /></div>
        <p>Ajrin NR</p>
        <div ><p>Bandung,25 November 2002</p>
    </div>
    </div>

    <div>
        <div><img src="farrel.jpg" title="Farrel F" alt="Farrel"  /></div>
            <p>Farrel Fadillah</p>
        <div>
            <p>Jakarta, 22 Oktober 2002</p>
    </div>
    </div>

        <div>
            <div>
            <img src="zam.jpg" title="Zamzam Ubaidilah" alt="Zamzam Ubaidilah"  /></div>
            <p>Zamzam Ubaidillah</p>
            <div ><p>
            Garut,06 Juni 2003</p>
    </div>
    </div>

        <div>
            <div ><img src="p.jpg" title="Prasiska Julianti" alt="Prasiska Juliant"/></div>
            <p>Prasiska Julianti</p>
            <div><p>
            Bandung,13 Juli 2003</p> 
    </div>
    </div>

        <div>
            <div>
            <div ><img src="r.jpg" title="Rosmayani" alt="Rosmayani"  /></div>
            <p>Rosmayani</p>
            <div>
            <p>Bandung,16 April 2003</p>
                </div>
            </div>
        </div>    
    </table>
    </center>
</body>
<script src="js/bootstrap.js"></script>
</html>