<?php
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    
//KEMASKINI DATA DENGAN REKOD BARU
    $result = mysqli_query($mysqli, "UPDATE produk SET nama='$nama', harga='$harga' WHERE id=$id");
    
echo "<script>alert('Kemaskini maklumat berjaya');"
    . "window.location='index.php'</script>";
}
?>

<?php

//DAPATKAN ID DARI URL
$id = $_GET['id'];

//PILIH DATA BERDASARKAN PADA ID REKOD
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id")
;

while($res = mysqli_fetch_array($result))
{
    $nama = $res['nama'];
    $harga = $res['harga'];
}
?>

<html>
    <head>
        <title>KEMASKINI MAKLUMAT</title>
    </head>
    <body>
    <center> <h2>KEMASKINI MAKLUMAT BARANGAN DAN HARGA</h2>
        <fieldset>
            <form name="form1" method="post" action="edit.php">
                <table border="0">
                    <tr>
                        <td>Nama produk</td>
                        <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
                    </tr>
                    <tr>
                        <td>harga</td>
                        <td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
            <a href="index.php">Home</a>
    </center>
    
</fieldset>
    </body>
    </html>