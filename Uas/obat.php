<?php include "header.php"?>

<body>  
    <div class="container">
    <h2 class="text-center mt-5 ">Data Obat Di Apotek X Tahun 2024</h2>
    <div class="card mt-5">
            <div class="card-header bg-primary text-light">
            <h4>Daftar Obat </h4>
            </div>
            <div class="card-body">
                <div class="col-md-8 mb-3 mx-auto">
                    <form method="POST">
                        <div class="input-group">
                        <a href="export.php" target="_blank" class="btn btn-danger text-light" style="margin-right :50px"><i class="bi bi-printer-fill"></i> Print</a>
                            <input type="text" name="tcari" value="<?= @$_POST['tcari'] ?>" class="form-control" placeholder="Masukan kata kunci">
                            <button class="btn btn-primary" name="bcari" type="submit"><i class="bi bi-search"></i> Cari</button>
                            <a href="inputData.php" class="btn btn-outline-primary text-secondary" style="margin-left :50px"><i class="bi bi-plus"></i> Obat Baru</a>
                        </div>
                    </form>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Kadaluarsa</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    
                    $no = 1;
                    //untuk mencari data
                    if(isset($_POST['bcari'])){
                        //tampilkan data yang dicari
                        $keyword = $_POST['tcari'];
                        $p = "SELECT * FROM obat WHERE kode like '%$keyword%'or nama like '%$keyword%' order by id_obat  desc";
                    } else {
                        $p = "SELECT * FROM obat order by id_obat desc";
                    }

                    //menampilkan data dari database
                    $tampil = mysqli_query($conn, $p);
                    while ($data = mysqli_fetch_array($tampil)):
                    ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $data['kode']?></td>
                    <td><?= $data['nama']?></td>
                    <td><?= 'Rp. '.$data['harga_beli']?></td>
                    <td><?= 'Rp. '.$data['harga_jual']?></td>
                    <td><?= $data['stok']?></td>
                    <td><?= $data['satuan']?></td>
                    <td><?= $data['tgl_kadaluarsa']?></td>
                    <td>
                        <a href="inputData.php?hal=edit&id=<?=$data['id_obat']?>" class="btn btn-warning"><i class="bi bi-pencil-fill" style="margin-right: 5px;"></i>Edit</a>
                        <a href="inputData.php?hal=hapus&id=<?=$data['id_obat']?>" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="bi bi-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
                </table>
                <div class="container ">
                <a href="obat.php" class="btn btn-warning mt-3 "><i class="bi bi-backspace"></i> Kembali 
                </a>
                <div>

            </div>
        </div>
    </div>
</body>
<!-- Footer -->
<?php include "footer.php"?>

