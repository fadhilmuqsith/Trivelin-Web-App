@extends('layouts.homeviews')

@section('container_home')

<div class="container-fluid px-0">
    <div class="row g-0 d-flex justify-content-center">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="page-header min-vh-75" style="background-image: url('https://cdn.nativeindonesia.com/foto/malino-highlands/Perkebunan-Teh-Bak-Permadani.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 my-auto mx-3">
                                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Perkebunan Teh</h4>
                                    <h1 class="text-white fadeIn2 fadeInBottom">Malino Highlands</h1>
                                    <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Malino Highlands berada di ketinggian sekitar 1.200 mdpl dengan luasnya yang mencapai 200 ha. sedari dulu di kawasan ini sudah ada lahan perkebunan teh yang cukup luas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="page-header min-vh-75" style="background-image: url('http://127.0.0.1:8000/assets/img/tongkonan.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 my-auto mx-3">
                                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Rumah Adat</h4>
                                    <h1 class="text-white fadeIn2 fadeInBottom">Tongkonan Toraja</h1>
                                    <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Secara harfiah, Tongkonan diambil dari kata “tongkon” yang berarti dalam bahasa Indonesia adalah “tempat duduk” atau “menduduki”.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="page-header min-vh-75" style="background-image: url('http://127.0.0.1:8000/assets/img/rotterdam.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 my-auto mx-3">
                                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Benteng Peninggalan Sejarah</h4>
                                    <h1 class="text-white fadeIn2 fadeInBottom">Fort Rotterdam Makassar</h1>
                                    <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Benteng Fort Rotterdam sebelumnya adalah peninggalan Kerajaan Gowa-Tallo yang bernama Benteng Jumpandang atau Benteng Ujung Pandang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-vh-75 position-absolute w-100 top-0">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

        <div class="col-sm-6 align-items-center px-3 py-3">
            <img class="w-75 m-3 float-end" src="http://127.0.0.1:8000/assets/img/trivellin.png" alt="">
        </div>

        <div class="col-sm-6 align-items-center px-3 py-3">


            <div class=" container d-flex h-100">
                <div class="col my-auto align-middle">
                    <h1 class="title-heading-left fadeIn2 fadeInBottom" style="color:#ffc107">Paket Wisata Murah Terlengkap</h1>
                    <p style="font-size: 2em; font-weight: 400; line-height: 1.28em; text-align: left;">Jangan dirumah aja<br>
                        Indonesia itu indah.<br>
                        <strong>Ayo liburan bersama Trivelin<br>
                        </strong>
                    </p>
                    <p style="text-align: left; padding: 0px 4px;">Kunjungi most Affdorrable <strong>wisata</strong> di kota kesayangan anda </p>
                    <button type="button" onclick="scrollToElement('#example');" class="btn btn-default border-radius-lg bg-gradient-success" style="color:white">Lihat paket wisata <span> <i class="fa-solid fa-chevron-right"></i></span></button>
                </div>
            </div>

        </div>

        <!--Paket Wisata-->
        <div class="example px-5 py-5" id="example" style="background-color:white;">
            <h2 class="my-3" style="color: #2d2d2d;">Mau Wisata Kemana Hari Ini?</h2>
            <div class="container-fluid align-middle">
                <div class="row g-0 justify-content-center ">

                    @foreach ($kotas as $kota)
                    <div class="col-6 col-sm-4 col-md-3 p-2" style="width: 18rem;">
                        <div class="card mx-1 my-1">
                            <div class="card card-background move-on-hover">
                                <div class="full-background" style="background-image:url('<?php echo "assets/img/kota$kota->foto" ?> ')"></div>
                                <div class="card-body pt-12">
                                    <h4 class="text-white">Paket Wisata {{ $kota->nama_kota }}</h4>
                                    <a href="{{ route('home.show',$kota->id) }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        </div>

        <!--Mengapa Pilih Travelin-->
        <div class="row d-flex justify-content-center py-5 px-5" >

            <div class="col-sm d-flex justify-content-center "><img class="m-3 p-5" style="width:100%; height:80%; margin-top:10%" src=" http://127.0.0.1:8000/assets/img/holiday.png" alt=""></div>

            <div class="col-sm">
                <div class="card bg-gradient-default">
                    <div class="card-body">
                        <h3 class="card-title text-edit text-gradient" style="color: #ffc107;">Kenapa Memilih Travelin?</h3>
                        <p>Bersama Trivelin, kemudahan dan kenyamanan Anda untuk mencari paket liburan menjadi yang paling utama. Perjalanan wisata keluarga, sekolah, perusahaan, atau tour bersama pasangan dan rombongan akan lebih berkesan. Dengan banyaknya Travel agen yang sudah bekerja sama dangan Travelin siap mengantarkan anda berwisata diseluruh kota yang ada di sulawesi selatan.</p>

                        <div class="card-body text-lg-left text-center pt-0">
                            <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                                    <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <span class="ps-3">Range harga terbaik</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-lg-left text-center pt-0">
                            <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                                    <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <span class="ps-3">Agen yang berpengalaman</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-lg-left text-center pt-0">
                            <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                                    <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <span class="ps-3">Banyak pilihan wisata dari berbagai agen travel</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-lg-left text-center pt-0">
                            <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                                    <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                                </div>
                                <div style="text-align: left;">
                                    <span class="ps-3">Tempat wisata favorite di kota terkenal yang ada di sulawesi selatan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Cara Pesan-->
        <div class="row justify-content-center py-5 px-5" id="cara-pesan" >
            <div class="col-10">
                <div class="card bg-gradient-default"style="background-color:F8F9FA">
                    <div class="card-body text-center">
                        <h3 class="card-title text-info text-gradient" style="text-align: center; margin-bottom:3%">Cara Pemesanan</h3>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                 <img src=" http://127.0.0.1:8000/assets/img/illustrations/search-destinasi.png">
                                 </div>
                                 <div class="col">
                                 <img src=" http://127.0.0.1:8000/assets/img/illustrations/fill-reservasi.png">
                                 </div>
                                 <div class="col">
                                 <img src=" http://127.0.0.1:8000/assets/img/illustrations/check--booking.png">
                                 </div>
                            </div>
                        </div>                        
                        <div class="container">
                            <div class="row">
                                <div class="col" >
                                <h6 style="text-align: cente;">1.Cari Destinasi Wisata</h6>
                                <p style="font-size:15px">  cari tempat destinasi wisata pilihan favorit </p>
                                 </div>
                                 <div class="col">
                                 <h6 style="text-align: center;">2. Isi Form Reservasi  </h6>
                                 <p style="font-size:15px"> Lengkapi form reservasi wisata dengan mengisi beberpa informasi yang dibuthukan</p>
                                 </div>
                                 <div class="col">
                                 <h6 style="text-align: center;">3.Konfirmasi Booking <h6>
                                 <p style="font-size:15px"> Pastikan kode booking telah terkirim di email anda </p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row justify-content-center py-5 px-5">

            <div class="col-10">
                <div class="card bg-gradient-default">
                    <div class="card-body text-center">
                        <h3 class="card-title text-info text-gradient" style="text-align: center;">Anda seorang travel agen?</h3>
                        <p style="text-align: center;">Masuk atau Buat Akun jika anda seorang travel agen dan ingin bekerja sama dengan Trivelin !</p>
                        <a href="/admin/login" type="button" class="btn btn-default border-radius-lg bg-gradient-success" style="color:white">Masuk/Buat Akun<span> <i class="fa-solid fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>



        </div>

    </div>
</div>

<script>
    function scrollToElement(selector, callback) {
        var animation = {
            scrollTop: $(selector).offset().top
        };
        $('html,body').animate(animation, 'slow', 'swing', function() {
            if (typeof callback == 'function') {
                callback();
            }
            callback = null;
        });
    }
</script>
<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<footer class="bg-link" style="background-color: white;">
    <!-- Grid container -->
    <div class="container p-4">

        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
            <!-- Github -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->


        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form5Example2" class="form-control" />
                            <label class="form-label" for="form5Example2">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-default border-radius-lg bg-gradient-success">
                            Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->



        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <p><i class="fas fa-home me-3"></i>Telkom University, Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>

                        </li>
                        <li>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                Trivelin@gmail.com
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        </li>
                        <li>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">USEFUL LINKS</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark">About us</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Our Tim</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">License</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
                document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Trivelin Tim</a>
        </div>
    </div>
    <!-- Copyright -->

</footer>

@endsection