<?php

require_once "Admin/dbkoneksi.php";

$sql = "SELECT * FROM produk";
// execute the query
$produk = $dbh->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>JDNTravel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/templatemo-main.css">
    <link rel="stylesheet" href="css/owl-carousel.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<!--
Vanilla Template
https://templatemo.com/tm-526-vanilla
-->

<body>

    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>Intro</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span>Produk</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#produk"><span>Form Pemesanan</span></a></li>
        </ul>
    </div>

    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1>JDNBeach</h1>
                <span><em>Surga Pantai</em> yang Menakjubkan</span>
                <div class="primary-button">
                    <a href="#services">Bergabung Dengan Kami</a>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-content projects-content" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <?php foreach ($produk as $row) : ?>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/pantai.jpg" data-lightbox="image-1"><img src="img/pantai.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4> <?= $row['nama'] ?> </h4>
                                    <span>Rp. <?= number_format($row['harga'], 2, ',', '.') ?></span>
                                    <br>
                                    <a class="btn btn-lg btn-warning mt-3 text-white" href="#produk">Pesan Sekarang</a>
                                </div>

                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="parallax-content contact-content" id="produk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading text-white mb-5" style="text-align: center;">
                                    <span>Form Pemesanan</span>
                                    <h2>Isi Form Pemesanan</h2>
                                </div>
                            </div>
                            <form id="contact" action="Admin/proses_pesanan.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="tanggal" class="text-white">Tanggal Keberangkatan</label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control"
                                                required />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="nama" class="text-white">Nama Tempat Wisata</label><br>
                                            <?php

                                            $sql = "SELECT * FROM produk";
                                            // execute the query
                                            $produk = $dbh->query($sql);

                                            ?>
                                            <select name="nama_produk" id="produk" class="custom-select" required>
                                                <option value="">Pilih Kota atau Hotel</option>
                                                <?php foreach ($produk as $row) : ?>
                                                <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="nama_pemesan" class="text-white">Nama Lengkap</label>
                                            <input type="text" id="nama_pemesan" name="nama_pemesan"
                                                class="form-control" placeholder="Nama Anda" required />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="alamat_pemesan" class="text-white">Alamat Lengkap</label>
                                            <textarea id="alamat_pemesan" name="alamat_pemesan" class="form-control"
                                                rows="9" placeholder="Jakarta Kota" required></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="qty" class="text-white">QTY</label>
                                            <input type="number" id="qty" name="qty" class="form-control"
                                                placeholder="10" required />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="total_harga" class="text-white">Total Harga</label>
                                            <input type="number" id="total_harga" name="total_harga"
                                                class="form-control" placeholder="6000000" required />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" name="proses" value="Simpan"
                                                class="btn btn-primary tm-btn-primary">Pesan
                                                Sekarang</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p>Copyright &copy; 2023 JDNBeach

                        - Design: <a rel="nofollow noopener" href="https://wa.me/+6285716569378"><em>Jidan Putra
                                Pratama</em></a></p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
    </script>

    <script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    </script>

</body>

</html>