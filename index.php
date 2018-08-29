<?php
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include_once("config.php");

//MEMAPARKAN DATA MENGIKUT SUSUNAN DATA TERBARU DIMASUKAN

$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>

<html>
    <head>
        <title>Senarai Barangan</title>
    </head>
    <body>
    <center>
        <h2>SENARAI BARANGAN DAN HARGA</h2>
        <fieldset>
            <table width='80%' border='0'>
                <tr bgcolor='#CCCCCC'>
                    <td>Bil.</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>
                
<?php
        $no=1;//NILAI PEMULA PEMBILANG
        
//MEMAPARKAN DATA KE DALAM JADUAL YANG DIBINA
        while($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$no;
            echo "<td>".$res['nama']."</td>";
            echo "<td>".RM.$res['harga']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">kemaskini</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Adakah anda pasti?')\">hapus</a></td>";
            
            $no++;//Bilangan INCREMENT
        }
            ?>
            </table>
            <br><a href="add.php">Daftar Barang Baru</a>
    </center>
	<a href="404error.php">HOME</a></td>
</fieldset>
       
    </body>
</html>