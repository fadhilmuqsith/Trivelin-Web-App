<!--
=========================================================
* Argon Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="https://user-images.githubusercontent.com/42905384/163003004-5a39733e-dc94-4dba-b58f-6cb2df0022f0.png">
    <link rel="icon" type="image/png" href="https://user-images.githubusercontent.com/42905384/163003004-5a39733e-dc94-4dba-b58f-6cb2df0022f0.png">
    <title>
        Trivelin Web | {{ $title }}
    </title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="http://127.0.0.1:8000/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="http://127.0.0.1:8000/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bb5c35e250.js" crossorigin="anonymous"></script>
    <link href="http://127.0.0.1:8000/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="http://127.0.0.1:8000/assets/css/argon-dashboard.css" rel="stylesheet" />


    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- //Summernote CSS - CDN Link -->


    <script src="http://www.decorplanit.com/plugin/autoNumeric-1.9.41.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <style>
        /* change the background color */


        /* change the brand and text color */
        .navbar-brand,
        .navbar-text {
            color: black !important;
        }

        /* change the link color */
        .nav-link {
            color: black !important;
        }

        /* change the color of active or hovered links */
        .nav-item.active .nav-link,
        .nav-item:focus .nav-link,
        .nav-item:hover .nav-link {
            color: #ffc107 !important;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">

    <main class="main-content position-flex ">
        <!-- Navbar Dark -->


        <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3 ">
            <div class="container-fluid">
                <a class="navbar-brand m-0" href="{{ route('home.index') }}" target="_blank">
                    <img src="https://user-images.githubusercontent.com/42905384/163003004-5a39733e-dc94-4dba-b58f-6cb2df0022f0.png" class="navbar-brand-img" alt="main_logo" height="40px">
                    <span class="ms-1 font-weight-bold" style="color: #ffc107">Trivelin Web</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="col-auto m-auto">
                                <a class="nav-link navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
                                    Home
                                </a>
                            </div>
                            <!-- <a class="nav-link" href="#">Home</a> -->
                        </li>
                        <li class="nav-item">
                            <div class="col-auto m-auto">
                                <a class="nav-link navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                                    Cek Booking
                                </a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <div class="col-auto m-auto">
                                <a class="nav-link navbar-brand" href="/home#cara-pesan" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
                                    Cara Pemesanan
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="col-auto">
                                <div class="bg-white border-radius-lg d-flex me-2">
                                    <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">

                                    <button type="button" class="btn my-1 me-1 btn-icon-only rounded-circle" style="background-color: #ffc107; color:white">
                                        <span class="btn-inner--icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-flex">
            @yield('container_home')
        </div>

    </main>

    <script>
        const navLinks = document.querySelectorAll('.nav-item')
        const menuToggle = document.getElementById('navbarSupportedContent')
        const bsCollapse = new bootstrap.Collapse(menuToggle)
        navLinks.forEach((l) => {
            l.addEventListener('click', () => {
                bsCollapse.toggle()
            })
        })
    </script>
    <!--   Core JS Files   -->
    <script src="http://127.0.0.1:8000/assets/js/core/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/core/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="http://127.0.0.1:8000/assets/js/argon-dashboard.min.js?v=2.0.1"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script>
        $(document).ready(function() {
            $("#travel_route").summernote({
                placeholder: 'Masukkan Rute Perjalanan Paket Anda!',
                tabsize: 2,
                height: 200,
                fontNames: ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
                fontNamesIgnoreCheck: ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['fontname', ['fontname']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']]
                ]
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>


    <script>
        $(document).ready(function() {
            $("#price_detail").summernote({
                placeholder: 'Masukkan Harga Detail Paket Anda!',
                tabsize: 2,
                height: 220,
                fontNames: ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
                fontNamesIgnoreCheck: ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['fontname', ['fontname']],
                    ['style', ['bold']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']]
                ]
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#itinary").summernote({
                placeholder: 'Masukkan Rencana Perjalanan Anda!',
                tabsize: 2,
                height: 200,
                fontNames: ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
                fontNamesIgnoreCheck: ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['fontname', ['fontname']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']]
                ]
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>

    <!-- //Summernote JS - CDN Link -->

    {{-- Order Modal JS --}}
    <script>
        function formatDate(value) {
            let date = new Date(value);
            const day = date.toLocaleString('default', {
                day: '2-digit'
            });
            const month = date.toLocaleString('default', {
                month: 'short'
            });
            const year = date.toLocaleString('default', {
                year: 'numeric'
            });
            return day + '-' + month + '-' + year;
        }


        $(function() {
            $('.modalShow').on('click', function() {
                const order = $(this).data('order');

                $('.id').val(order.id);
                $('.kode_booking').html(order.booking_code);
                $('.pilihan_paket').html(order.tour.title);
                if (order.status == false) {
                    $('.status').html('Menunggu Pembayaran');
                } else {
                    $('.status').html('Lunas');
                }
                $('.nama').html(order.name);
                $('.email').html(order.email);
                $('.email').html(order.email);
                $('.order_date').html(formatDate(order.created_at))
                $('.tour_date').html(formatDate(order.created_at))
            });
        });
    </script>
    {{-- End Order Modal JS --}}
</body>

</html>