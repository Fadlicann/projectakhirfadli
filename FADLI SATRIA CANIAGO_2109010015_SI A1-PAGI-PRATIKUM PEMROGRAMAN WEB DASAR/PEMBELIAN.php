<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU PRODUK</title>
</head>
<body>
    <h1>MENU PRODUK</h1>
    


    <hr>
    <h1> Input Data </h1>
    <form action="" method="POST">
    <table>
        <tr>
            <td>NAMA PRODUK</td>
            <td>:</td>
            <td>
                <input type="TEXT" name ="nama produk">

            </td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td>:</td>
            <td>
                <input type="number" name ="harga">
                
            </td>
        </tr>
        <tr>
            <td>JUMLAH BARANG</td>
            <td>:</td>
            <td>
                <input type="number" name = "jumlah barang">
                
            </td>
        </tr>
        <tr>
            <td>JUMLAJ PEMBAYARAN</td>
            <td>:</td>
            <td>
                <input type="number" name ="jumlah pembayaran">
                
            </td>

            
        </tr> 

        $JU
       
        <tr>
            <td colspan="3">
                <button style="width:100%" name="Cari">Cari</button></td>
</tr>
    </table>
    </form>

    <table style="text-align: left">
        <tr>
            <th>TOTAL BAYAR</th>
            <td>:</td>
            <td><?php echo @$_POST["harga"]* @$_post ["jumlah barang"];?></td>
        </tr>
       
       
    </table>

    <hr>
    <p> total bayar<?= @$_POST["harga"] ?>   * <?= @$_POST["jumlah barang"]?> </p>


<HR>
<HR>
<HR>
<li>
            <a href ="index.php">KEMBALI</a>
</LI>
       
        
   
      
</body>
</html>