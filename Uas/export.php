<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    
</head>
<body>
<div class="container">
    <h2 class="text-center mt-5 ">Data Obat Di Apotek X Tahun 2024</h2>
            <hr>
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

                    //menampilkan data
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
                </tr>
                <?php endwhile; ?>
                </table>
                <script>
                    window.print()
                </script>
            </div>
        </div>
    </div>
</body>
</html>
<?php include "footer.php"?>