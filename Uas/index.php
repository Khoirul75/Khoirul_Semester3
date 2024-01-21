<?php include "header.php"?>

<body>
    <header class="bg-primary bg-gradient text-white py-5">
            <div class="container px-auto text-center">
                <h1 class="fw-bolder">Selamat Datang, <?php echo $_SESSION['user']['nama']; ?></h1>
                <p class="lead">Sistem Informasi Data Obat Di Apotek X Tahun 2024 </p>
                <a class="btn btn-lg btn-light mt-2" href="obat.php">Lihat Data</a>
            </div>
        </header>

    <br>
    <div class="container-fluid">
        <section>
            <div class="container px-1">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Tentang web ini</h2>
                        
                        <p class="lead">Web ini dibuat untuk memberikan informasi tentang data obat yang tersedia di sebuah apotek, untuk memudahkan kita melihat dan membuat setiap datail data obat di apotek tersebut. </p>
                        <p class="lead">Fitur yang tersedia didalam website ini :</p>
                        <ul>
                            <li>Memuat halaman informasi seluruh data obat.</li>
                            <li>Menu untuk input data obat baru.</li>
                            <li>Halaman login untuk admin.</li>
                            <li>Terdapat fungsi untuk mengedit, menghapus, dan mencari data obat.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-1">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Kontak Saya</h2>
                        <p class="lead">Hubungi saya melalui sosial media saya di bawah ini.</p>
                        <p><a href="https:wa.me/6285713306112" style="text-decoration: none; font-size: 18px; color: black;"><i class="bi bi-whatsapp"></i> whatsapp</a></p>
                        <p><a href="https:www.instagram.com/khiryuu_/" style="text-decoration: none; font-size: 18px; color: black;"><i class="bi bi-instagram"></i> instagram</a></p>
                        <p><a href="https://github.com/Khoirul75" style="text-decoration: none; font-size: 18px; color: black;"><i class="bi bi-github"></i> github</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>  

<!-- Footer-->
<?php include "footer.php"?>
