<?php foreach (@$_SESSION['cart'] as $key => $value ) : ?>
        <?php
            include "koneksi.php"; 
            $qry_beli = mysqli_query($koneksi, "SELECT * FROM detail_transaksi where id_produk = '".$value['id_produk']."' ORDER BY id_transaksi DESC");
            
            $no = 0;
            while($dt_transaksi=mysqli_fetch_array($qry_beli)){      
                $no++;
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_transaksi['tanggal_transaksi']?></td>
                <td><?=$_SESSION['nama_pelanggan']?>
                <td><?=$_SESSION['nama_produk']?>
            </tr>
            <?php
         } ?>
         <?php endforeach; ?>