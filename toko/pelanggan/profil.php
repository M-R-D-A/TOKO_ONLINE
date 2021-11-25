<?php
    include "navbar.php";
    ?>
<div class="container">
    <div class="card-header">
        <h2>PROFIL ANDA</h2>
    </div>
    <div class="card-body">
        <?php
        include "koneksi.php";
        $qry_profil=mysqli_query($koneksi,"select * from pelanggan where
    id_pelanggan = '".$_SESSION['id_pelanggan']."'");
    $dt_pelanggan=mysqli_fetch_array($qry_profil);
        ?>
        
        <table class="table">
            <thead>
                <tr>
                    <th>
                        nama : <?=$dt_pelanggan['nama']?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        alamat : <?=$dt_pelanggan['alamat']?>
                    </td>
                </tr>
                <tr>
                    <td>
                        telepon : <?=$dt_pelanggan['telp']?>
                    </td>
                </tr>
            </tbody>
        </table> 
        </div>
    </div>
</div>
</div>