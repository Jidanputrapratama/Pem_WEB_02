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
            <li class="nav-item"><a class="nav-link" href="#services"><span>Services</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span>Produk</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#our-story"><span>Our Story</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact-us"><span>Contact Us</span></a></li>
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


    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>Lebih Lanjut Tentang JDNBeach</h4>
                        <div class="line-dec"></div>
                        <p style="text-align: justify;">&nbsp;&nbsp;JDNBeach merupakan salah satu pantai yang terletak
                            di wilayah
                            Jawa Tengah. Pantai ini
                            memiliki keindahan yang luar biasa dengan pasir putih yang lembut dan air laut yang jernih.
                            JDNBeach juga dikelilingi oleh pepohonan yang rindang, membuat suasana pantai menjadi lebih
                            sejuk dan nyaman. JDNBeach juga memiliki beberapa fasilitas yang dapat dinikmati oleh
                            pengunjung, seperti :

                        </p>
                        <ul>
                            <li>- Area Parkir yang Luas</li>
                            <li>- Toilet yang Bagus Untuk Anda</li>
                            <li>- Warung Makanan dan Minuman</li>
                            <li>- dan Pastinya Ada tempat Bermain Anak</li>
                        </ul>
                        <div class="primary-button">
                            <a href="#portfolio">Mau Lihat Produk Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Sebagai Lokasi untuk Acara-acara</h4>
                                <div class="line-dec"></div>
                                <p style="text-align: justify;">JDNBeach juga sering dijadikan sebagai lokasi untuk
                                    acara-acara seperti camping, acara pernikahan, dan acara keluarga. Dengan keindahan
                                    pantai yang memukau, JDNBeach menjadi tempat yang ideal untuk menghabiskan waktu
                                    bersama keluarga dan teman-teman.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>menjadi tempat yang cocok untuk berbagai aktivitas air</h4>
                                <div class="line-dec"></div>
                                <p style="text-align: justify;">JDNBeach juga menjadi tempat yang cocok untuk berbagai
                                    aktivitas air seperti
                                    berenang, snorkeling, dan diving. Air laut yang jernih dan terumbu karang yang indah
                                    membuat kita dapat menikmati keindahan bawah laut yang menakjubkan.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Dapat diakses dengan mudah melalui jalur darat atau laut</h4>
                                <div class="line-dec"></div>
                                <p style="text-align: justify;">JDNBeach dapat diakses dengan mudah melalui jalur darat
                                    atau laut. Jika menggunakan
                                    kendaraan pribadi, pengunjung dapat mengikuti rute Semarang - Jepara - JDNBeach.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Keindahan pantai yang menakjubkan</h4>
                                <div class="line-dec"></div>
                                <p style="text-align: justify;">Dengan keindahan pantai yang menakjubkan dan berbagai
                                    fasilitas yang tersedia,
                                    JDNBeach menjadi destinasi wisata yang wajib dikunjungi di Jawa Tengah.</p>
                            </div>
                        </div>
                    </div>
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
                                    <a class="btn btn-lg btn-warning mt-3 text-white" href="shop.php#produk">Pesan
                                        Sekarang</a>
                                </div>

                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tabs-content" id="our-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="wrapper">
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                <img src="img/pantai4.jpg" alt="">
                                <p style="text-align: justify;">Pada tahun 2018, JDNBeach telah menjadi salah satu
                                    destinasi wisata yang paling
                                    populer di Bali. Pantai ini menawarkan pemandangan yang indah dan aktivitas yang
                                    menyenangkan, seperti olahraga air dan berjemur di pantai. Namun, pada saat yang
                                    sama, JDNBeach juga menghadapi beberapa masalah, seperti masalah sampah dan
                                    kepadatan pengunjung.
                                    Untuk mengatasi masalah ini, pemerintah dan pengelola pantai telah bekerja sama
                                    untuk meningkatkan infrastruktur dan fasilitas di JDNBeach. Pada tahun 2019, mereka
                                    membangun toilet dan tempat sampah yang lebih banyak, serta meningkatkan sistem
                                    pengelolaan sampah. Selain itu, mereka juga memperluas area parkir dan membangun
                                    jalur pejalan kaki yang lebih baik.</p>
                            </div>
                            <div id="tab2">
                                <img src="img/pantai.jpg" alt="">
                                <p style="text-align: justify;">
                                    Pada tahun 2020, JDNBeach mengalami peningkatan signifikan dalam jumlah pengunjung.
                                    Namun, pandemi COVID-19 mempengaruhi pariwisata di seluruh dunia, termasuk JDNBeach.
                                    Pantai ini ditutup selama beberapa bulan pada 2020, tetapi kemudian dibuka kembali
                                    dengan protokol kesehatan yang ketat.
                                    Pada tahun 2021, JDNBeach kembali menjadi destinasi wisata yang populer. Namun,
                                    pengelola pantai dan pemerintah setempat masih bekerja keras untuk meningkatkan
                                    fasilitas dan infrastruktur. Mereka berencana untuk memperluas area parkir dan
                                    membangun tempat duduk yang lebih banyak di sepanjang pantai.
                                </p>
                            </div>
                            <div id="tab3">
                                <img src="img/pantai3.jpg" alt="">
                                <p style="text-align: justify;">Pada tahun 2022, JDNBeach akan terus menjadi salah satu
                                    destinasi wisata paling populer di Bali. Pengelola pantai akan terus bekerja keras
                                    untuk meningkatkan fasilitas dan infrastruktur, serta memperkuat sistem pengelolaan
                                    sampah. Mereka juga akan memperkenalkan program edukasi tentang kelestarian
                                    lingkungan kepada pengunjung.</p>
                            </div>
                            <div id="tab4">
                                <img src="img/pantai4.jpg" alt="">
                                <p style="text-align: justify;">Pada tahun 2023, JDNBeach akan menjadi destinasi wisata
                                    yang lebih baik dan lebih berkelanjutan. Dengan infrastruktur dan fasilitas yang
                                    lebih baik, serta pengelolaan sampah yang lebih efektif, JDNBeach akan menjadi
                                    tempat yang lebih nyaman dan aman untuk dikunjungi. Selain itu, program edukasi
                                    tentang kelestarian lingkungan juga akan membantu mempertahankan keindahan pantai
                                    ini untuk generasi mendatang.</p>
                            </div>
                        </section>
                        <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                            <li><a href="#tab1" class="active">2018 - 2019</a></li>
                            <li><a href="#tab2">2020 - 2021</a></li>
                            <li><a href="#tab3">2022</a></li>
                            <li><a href="#tab4">2023 - Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="parallax-content contact-content" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="row">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name"
                                                placeholder="Your name..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input name="email" type="email" class="form-control" id="email"
                                                placeholder="Your email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message"
                                                placeholder="Your message..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15861.270082892343!2d106.81614410781245!3d-6.3529244999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sen!2sid!4v1683720639845!5m2!1sen!2sid"
                            width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
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