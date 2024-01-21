<!-- Header -->
<?php include "header.php"?>

<?php
//jika tombol simpan di klik
    if (isset($_POST['bsimpan'])) {

    //jika data akan di edit/update
    if (isset($_GET['hal']) == "edit"){
        $edit = mysqli_query($conn, "UPDATE obat SET
                                            kode = '$_POST[Kobat]',
                                            nama = '$_POST[Nobat]', 
                                            harga_beli = '$_POST[Hbeli]',
                                            harga_jual = '$_POST[Hjual]', 
                                            stok = '$_POST[stok]',
                                            satuan = '$_POST[satuan]',
                                            tgl_kadaluarsa = '$_POST[kadaluarsa]'
                                        WHERE id_obat = '$_GET[id]'
                                   ");
        //jika sukses
        if ($edit){
            echo "<script>
            document.location='obat.php';
            </script>";
        }else {
            echo "<script>
            alert('Data Gagal Diedit');
            document.location='obat.php';
            </script>";
        }
    } else {
        
        // jika data akan disimpan baru/create
        $simpan = mysqli_query($conn, " INSERT INTO obat(kode, nama, harga_beli, harga_jual, stok, satuan, tgl_kadaluarsa)
                                        VALUE ( '$_POST[Kobat]',
                                                '$_POST[Nobat]',
                                                '$_POST[Hbeli]',
                                                '$_POST[Hjual]',
                                                '$_POST[stok]',
                                                '$_POST[satuan]',
                                                '$_POST[kadaluarsa]')
                            ");
        //jika sukses
        if ($simpan){
            echo "<script>
            document.location='obat.php';
            </script>";
        }else {
            echo "<script>
            alert('Data Gagal Disimpan');
            document.location='obat.php';
            </script>";
        }
    }
}
//selesai



//jika tombol edit & hapus di klik
$vkode = "";
$vnama = "";
$vbeli = "";
$vjual = "";
$vstok = "";
$vsatuan = "";
$vkadaluarsa = "";

if(isset($_GET['hal'])) {
    //jika edit data
    if($_GET['hal'] == "edit"){
        //tampilkan data yang akan diedit
        $tampil = mysqli_query($conn, "SELECT * FROM obat WHERE id_obat = '$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if($data){
            $vkode = $data['kode'];
            $vnama = $data['nama'];
            $vbeli = $data['harga_beli'];
            $vjual = $data['harga_jual'];
            $vstok = $data['stok'];
            $vsatuan = $data['satuan'];
            $vkadaluarsa = $data['tgl_kadaluarsa'];
        }
    //jika data dihapus
    } else if ($_GET['hal'] == "hapus") {
        $hapus = mysqli_query($conn, "DELETE FROM obat WHERE id_obat = '$_GET[id]'");
        //jika berhasil
        if ($hapus){
            echo "<script>document.location='obat.php';
            </script>";
        }else {
            echo "<script>
            alert('Data Gagal dihapus');
            document.location='obat.php';
            </script>";
        }
    }
}

?>
<!-- Body -->
<div class="container mt-5">
    <h2 class="text-center">Masukan Data Obat Baru</h2>
    <br>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    <h5>Input Data Obat</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Kode Obat</label>
                                <input type="text" name="Kobat" value="<?=$vkode?>"class="form-control" id="exampleFormControlInput1" placeholder="Masukan Kode Obat">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Obat</label>
                                <input type="text" name="Nobat" value="<?=$vnama?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Obat">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Beli</label>
                                <input type="text" name="Hbeli" value="<?=$vbeli?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Harga Beli">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Jual</label>
                                <input type="text" name="Hjual" value="<?=$vjual?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Harga Jual">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Stok</label>
                                        <input type="number" name="stok" value="<?=$vstok?>" class="form-control" id="exampleFormControlInput1" placeholder="Stok yang tersedia">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Satuan</label>
                                        <select class="form-select" name="satuan">
                                            <option  value="<?=$vsatuan?>">Pilih satuan</option>
                                            <option value="tablet">Tablet</option>
                                            <option value="botol">Botol</option>
                                            <option value="tube">Tube</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Kadaluarsa</label>
                                        <input type="date" name="kadaluarsa" value="<?=$vkadaluarsa?>" class="form-control" id="exampleFormControlInput1" placeholder="Stok yang tersedia">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <hr>
                                    <button class="btn btn-primary me-1" name="bsimpan" type="submit">Simpan</button>
                                    <button class="btn btn-warning ms-4" name="breset" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Footer -->
<?php include "footer.php"?>