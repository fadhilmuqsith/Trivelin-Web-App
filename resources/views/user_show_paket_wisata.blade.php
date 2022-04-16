@extends('layouts.homeviews')

@section('container_home')


<div class="row g-0 d-flex justify-content-center" style="background-color:whitesmoke;">

    <style>
        .bd {
            width: 100%;
            height: 400px;
            padding: 0;
            margin: 0;
            /* background-image:
                url("http://127.0.0.1:8000/assets/img/bg11.png");
            background-repeat: no-repeat;

            object-position: center top;
            background-size: 100%; */
            background: url(http://127.0.0.1:8000/assets/img/bg11.png) no-repeat center center;
            -webkit-background-size: cover;
            /* For WebKit*/
            -moz-background-size: cover;
            /* Mozilla*/
            -o-background-size: cover;
            /* Opera*/
            background-size: cover;
            /* Generic*/
            border-bottom-left-radius: 50% 20%;
            border-bottom-right-radius: 50% 20%;
        }

        p {
            margin: 10px;
        }

        .holder {
            margin-top: 8%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .heading {
            font-size: 40px;
            font-weight: 500;
            color: #f5f6fa;
        }

        .tagline {
            font-size: 18px;
        }
    </style>
    <div class="bd">
        <div class="holder">
            <h2>Selamat Datang di {{ $kota->nama_kota }}</h2>
            <p class="tagline">Yuk, Ketahui sejarah {{ $kota->nama_kota }} sebelum memesan paket tour!</p>
            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                Baca sejarah<span> <i class="fa-solid fa-chevron-right"></i></span>
            </button>
            @if($kota->id == 1)
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah Kota {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Menurut catatan sejarah, cikal bakal lahirnya Kota Makassar berawal dari 1 April 1906. Saat itu pemerintah Hindia Belanda membentuk dewan pemerintahan Gemeentee di Kampung Baru, yang terletak di kawasan Pantai Losari dan Benteng Fort Rotterdam. Kawasan ini yang berkembang menjadi kota Makassar hingga kini disebut hari kebudayaan makassar, sebelumnya merupakan hari jadi Kotamadya Ujung Pandang
                            <br /><br />
                            Kota ini dahulu bernama Ujung Pandang dipakai pada tahun 1971 sampai tahun 1999. Alasan untuk mengganti nama Makassar menjadi Ujung Pandang dengan alasan politik, antara lain karena Makassar adalah nama sebuah suku bangsa padahal tidak semua penduduk kota Makassar adalah anggota dari etnik Makassar.
                            <br /><br />


                            Nama Kota Makassar diubah menjadi Ujung Pandang terjadi pada tanggal 1 September 1971, berdasarkan Peraturan Pemerintah No. 51 tahun 1971. Saat itu, Kota Makassar dimekarkan dari 21 kilometer persegi menjadi 115,87 Kilometer persegi, terdiri dari 11 wilayah kecamatan dan 62 lingkungan dengan penduduk sekitar 700 ribu jiwa.
                            <br /><br />


                            Ujung Pandang sebenarnya adalah nama lain dari Makassar, yang dipakai sekitar tahun 1958 sampai tahun 2000. Pergantian nama Makassar dengan Ujung Pandang ini dilatar belakangi oleh nama Makassar yang menjadi nama sebuah suku bangsa di Makassar.
                            <br /><br />

                            Nama Ujung Pandang sendiri adalah nama sebuah kampung di wilayah Kota Makassar. Ujung Pandang mulai dikenal pada masa pemerintahan Raja Gowa ke-X, Tunipalangga yang pada tahun 1545 mendirikan Benteng Ujung Pandang sebagai kelengkapan benteng-benteng kerajaan Gowa yang sudah ada sebelumnya.
                            <br /><br />

                            Terjadinya Perang Dunia Kedua dan berdirinya RI mengubah wajah Makassar. Perginya sebagian besar warga asing di tahun 1949 dan nasionalisasi perusahaan asing di akhir tahun 1950-an, membuatnya kembali menjadi sebuah kota provinsi.
                            <br><br>

                            Pada tanggal 13 Oktober 1999, berdasarkan Peraturan Pemerintah Nomor 86 Tahun 1999 nama Ujung Pandang dikembalikan menjadi Kota Makassar. Aturan ini sesuai dengan Undang-Undang Pemerintahan Daerah luas wilayah bertambah kurang lebih 4 mil kearah laut 10.000 Ha, menjadi 27.577 Ha.
                            <br><br>

                            Berawal dari proses reformasi yang terjadi sejak 21 Mei 1998, nama Makassar seolah kembali hidup untuk menggantikan Ujung Pandang. Barulah di penghujung masa jabatan Presiden BJ Habibie, nama Makassar kembali tanpa proses yang berbelit-belit.
                            <br><br>
                            Dalam konsideran Peraturan Pemerintah No. 86 Tahun 1999, di antaranya menyebutkan bahwa perubahan itu wujud keinginan masyarakat Ujung Pandang dengan mendapat dukungan DPRD Ujung Pandang dan perubahan ini sejalan dengan pasal 5 ayat (3) Undang-Undang RI Nomor 22 tahun 1999, bahwa perubahan nama daerah, ditetapkan dengan Peraturan Pemerintah.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($kota->id == 2)
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Wilayah sekitaran Teluk Tonkin, yang terletak antara Vietnam utara dan Cina selatan, adalah tempat asal suku Toraja. Awalnya, imigran tersebut tinggal di wilayah pantai Sulawesi, namun akhirnya pindah ke dataran tinggi.
                            <br /><br />
                            Sejak abad ke-17, Belanda mulai menancapkan kekuasaan perdagangan dan politik di Sulawesi melalui Vereenigde Oost-Indische Compagnie (VOC). Selama dua abad, mereka mengacuhkan wilayah dataran tinggi Sulawesi tengah (tempat suku Toraja tinggal) karena sulit dicapai dan hanya memiliki sedikit lahan yang produktif. Pada akhir abad ke-19, Belanda mulai khawatir terhadap pesatnya penyebaran Islam di Sulawesi selatan, terutama di antara suku Makassar dan Bugis. Belanda melihat suku Toraja yang menganut animisme sebagai target yang potensial untuk dikristenkan. Pada tahun 1920-an, misi penyebaran agama Kristen mulai dijalankan dengan bantuan pemerintah kolonial Belanda. Selain menyebarkan agama, Belanda juga menghapuskan perbudakan dan menerapkan pajak daerah. Sebuah garis digambarkan di sekitar wilayah Sa'dan dan disebut Tana Toraja. Tana Toraja awalnya merupakan subdivisi dari kerajaan Luwu yang mengklaim wilayah tersebut. Pada tahun 1946, Belanda memberikan Tana Toraja status regentschap, dan Indonesia mengakuinya sebagai suatu kabupaten pada tahun 1957.
                            <br /><br />


                            Misionaris Belanda yang baru datang mendapat perlawanan kuat dari suku Toraja karena penghapusan jalur perdagangan budak yang menguntungkan Toraja. Beberapa orang Toraja telah dipindahkan ke dataran rendah secara paksa oleh Belanda agar lebih mudah diatur. Pajak ditetapkan pada tingkat yang tinggi, dengan tujuan untuk menggerogoti kekayaan para elit masyarakat. Meskipun demikian, usaha-usaha Belanda tersebut tidak merusak budaya Toraja, dan hanya sedikit orang Toraja yang saat itu menjadi Kristen. Pada tahun 1950, hanya 10% orang Toraja yang berubah agama menjadi Kristen.
                            <br /><br />


                            Penduduk Muslim di dataran rendah menyerang Toraja pada tahun 1930-an. Akibatnya, banyak orang Toraja yang ingin beraliansi dengan Belanda berpindah ke agama Kristen untuk mendapatkan perlindungan politik, dan agar dapat membentuk gerakan perlawanan terhadap orang-orang Bugis dan Makassar yang beragama Islam. Antara tahun 1951 dan 1965 setelah kemerdekaan Indonesia, Sulawesi Selatan mengalami kekacauan akibat pemberontakan yang dilancarkan Darul Islam, yang bertujuan untuk mendirikan sebuah negara Islam di Sulawesi. Perang gerilya yang berlangsung selama 15 tahun tersebut turut menyebabkan semakin banyak orang Toraja berpindah ke agama Kristen.
                            <br /><br />

                            Pada tahun 1965, sebuah dekret presiden mengharuskan seluruh penduduk Indonesia untuk menganut salah satu dari lima agama yang diakui: Islam, Kristen Protestan, Katolik, Hindu dan Buddha. Kepercayaan asli Toraja (aluk) tidak diakui secara hukum, dan suku Toraja berupaya menentang dekret tersebut. Untuk membuat aluk sesuai dengan hukum, ia harus diterima sebagai bagian dari salah satu agama resmi. Pada tahun 1969, Aluk To Dolo dilegalkan sebagai bagian dari Agama Hindu Dharma.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($kota->id == 3)
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah Kabupaten {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Mitologi penamaan "Bulukumba", konon bersumber dari dua kata dalam bahasa Bugis yaitu "Bulu’ku" dan "Mupa" yang dalam bahasa Indonesia berarti "masih gunung milik saya atau tetap gunung milik saya". Mitos ini pertama kali muncul pada abad ke–17 Masehi ketika terjadi perang saudara antara dua kerajaan besar di Sulawesi yaitu Kerajaan Gowa dan Kerajaan Bone. Di pesisir pantai yang bernama "Tana Kongkong", di situlah utusan Raja Gowa dan Raja Bone bertemu, mereka berunding secara damai dan menetapkan batas wilayah pengaruh kerajaan masing-masing.
                            <br /><br />
                            Bangkeng Buki' (secara harfiah berarti kaki bukit) yang merupakan barisan lereng bukit dari Gunung Lompobattang diklaim oleh pihak Kerajaan Gowa sebagai batas wilayah kekuasaannya mulai dari Kindang sampai ke wilayah bagian timur. Namun pihak Kerajaan Bone berkeras memertahankan Bangkeng Buki' sebagai wilayah kekuasaannya mulai dari barat sampai ke selatan.
                            <br /><br />


                            Berawal dari peristiwa tersebut kemudian tercetuslah kalimat dalam bahasa Bugis "Bulu'kumupa" yang kemudian pada tingkatan dialek tertentu mengalami perubahan proses bunyi menjadi "Bulukumba".
                            Konon sejak itulah nama Bulukumba mulai ada dan hingga saat ini resmi menjadi sebuah kabupaten.
                            <br /><br />


                            Peresmian Bulukumba menjadi sebuah nama kabupaten dimulai dari terbitnya Undang–Undang Nomor 29 Tahun 1959, tentang Pembentukan Daerah–daerah Tingkat II di Sulawesi yang ditindaklanjuti dengan Peraturan Daerah Kabupaten Bulukumba Nomor 5 Tahun 1978, tentang Lambang Daerah.
                            <br /><br />

                            Akhirnya setelah dilakukan seminar sehari pada tanggal 28 Maret 1994 dengan narasumber Prof. Dr. H. Ahmad Mattulada (ahli sejarah dan budaya), maka ditetapkanlah hari jadi Kabupaten Bulukumba, yaitu tanggal 4 Februari 1960 melalui Peraturan Daerah Nomor 13 Tahun 1994.
                            <br /><br />

                            Secara yuridis formal Kabupaten Bulukumba resmi menjadi daerah tingkat II setelah ditetapkan Lambang Daerah Kabupaten Bulukumba oleh DPRD Kabupaten Bulukumba pada tanggal 4 Februari 1960 dan selanjutnya dilakukan pelantikan bupati pertama, yaitu Andi Patarai pada tanggal 12 Februari 1960.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($kota->id == 4)
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah kota {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Pada awal perkembangannya, perbukitan yang sekarang ini disebut Kota Parepare, dahulunya adalah merupakan semak-semak belukar yang diselang-selingi oleh lubang-lubang tanah yang agak miring sebagai tempat yang pada keseluruhannya tumbuh secara liar tidak teratur, mulai dari utara (Cappa Ujung) hingga ke jurusan selatan kota. Kemudian dengan melalui proses perkembangan sejarah sedemikian rupa dataran itu dinamakan Kota Parepare.
                            <br /><br />
                            Lontara Kerajaan Suppa menyebutkan, sekitar abad XIV seorang anak Raja Suppa meninggalkan istana dan pergi ke selatan mendirikan wilayah tersendiri pada tepian pantai karena memiliki hobi memancing. Wilayah itu kemudian dikenal sebagai Kerajaan Soreang, kemudian satu lagi kerajaan berdiri sekitar abad XV yakni Kerajaan Bacukiki.
                            <br /><br />


                            Kata Parepare ditengarai sebagian orang berasal dari kisah Raja Gowa, dalam satu kunjungan persahabatan Raja Gowa XI, Manrigau Dg. Bonto Karaeng Tunipallangga (1547-1566) berjalan-jalan dari kerajaan Bacukiki ke Kerajaan Soreang. Sebagai seorang raja yang dikenal sebagai ahli strategi dan pelopor pembangunan, Kerajaan Gowa tertarik dengan pemandangan yang indah pada hamparan ini dan spontan menyebut “Bajiki Ni Pare” artinya “(Pelabuhan di kawasan ini) di buat dengan baik”. Parepare ramai dikunjungi termasuk orang-orang Melayu yang datang berdagang ke kawasan Suppa.
                            <br /><br />


                            Kata Parepare punya arti tersendiri dalam bahasa Bugis, kata Parepare bermakna " Kain Penghias " yg digunakan diacara semisal pernikahan, hal ini dapat kita lihat dalam buku sastra lontara La Galigo yang disusun oleh Arung Pancana Toa Naskah NBG 188 yang terdiri dari 12 jilid yang jumlah halamannya 2851, kata Parepare terdapat dibeberapa tempat di antaranya pada jilid 2 hal [62] baris no. 30 yang berbunyi " pura makkenna linro langkana PAREPARE" (KAIN PENGHIAS depan istana sudah dipasang).
                            <br /><br />

                            Melihat posisi yang strategis sebagai pelabuhan yang terlindungi oleh tanjung di depannya, serta memang sudah ramai dikunjungi orang-orang, maka Belanda pertama kali merebut tempat ini kemudian menjadikannya kota penting di wilayah bagian tengah Sulawesi Selatan. Di sinilah Belanda bermarkas untuk melebarkan sayapnya dan merambah seluruh dataran timur dan utara Sulawesi Selatan. Hal ini yang berpusat di Parepare untuk wilayah Ajatappareng.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($kota->id == 5)
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Wilayah Kabupaten Maros pada mulanya adalah suatu wilayah kerajaan yang dikenal sebagai Kerajaan Marusu yang kemudian bernama Kabupaten Maros sampai saat ini. Selain nama Maros, masih terdapat nama lain daerah ini, yakni Marusu dan/atau Buttasalewangan. Ketiga nama tersebut oleh sebagian masyarakat Kabupaten Maros sangat melekat dan menjadikan sebagai lambang kebanggaan tersendiri dalam mengisi pembangunan daerah.
                            <br /><br />
                            Berdasarkan data-data yang diperoleh, terutama salah satu putra daerah, yakni Andi Fahry Makkasau dari bukunya berjudul “Kerajaan-Kerajaan di Maros Dalam Lintasan Sejarah”, memuat sejarah Kabupaten Maros. Sebagaimana dijelaskan sebelumnya bahwa Kabupaten Maros pada awalnya adalah sebuah wilayah kerajaan yang dipengaruhi oleh dua kerajaan besar di Sulawesi Selatan, yakni Kerajaan Bone dan Kerjaan Gowa, yang mana pada waktu itu, Maros memiliki nilai strategis yang sangat potensial. Kabupaten Maros dari dulu hingga saat ini dihuni oleh dua suku, yakni Suku Bugis dan Suku Makassar. Pada masa kemerdekaan, yakni tujuh tahun setelah Proklamasi Kemerdekaan RI tanggal 17 Agustus 1945 oleh pemerintah Republik Indonesia dikeluarkan peraturan No. 34 1952 juncto PP. No. 2/1952 tentang pembentukan Afdelling Makassar yang di dalamnya tercakup Maros sebagai sebuah Onderafdelling dengan 16 buah distrik.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($kota->id == 6)
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah Kabupaten {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Masa kerajaan</h6>
                            Sebelum kedatangan bangsa Belanda di Sulawesi Selatan, wilayah di Kabupaten Jeneponto merupakan kerajaan-kerajaan kecil yang dihuni oleh suku Makassar. Wilayah Kabupaten Jeneponto dikuasai oleh kerajaan-kerajaan yang kekuasaannya berada dalam pengaruh Kerajaan Gowa dan Kerajaan Tallo. Kabupaten Jeneponto pada masa kerajaan di Sulawesi Selatan terbagi-bagi menjadi 6 kerajaan, yaitu Kerajaan Garassi, Kerajaan Bangkala, Kerajaan Binamu, Kerajaan Tarowang, Kerajaan Sapanang, dan Kerajaan Arungkeke.
                            <br /><br />

                            <h6>Masa kolonial</h6>
                            Kerajaan Bangkala dan Kerajaan Binamu memisahkan diri dari Kerajaan Laikang pada bulan November 1863. Pada masa tersebut, wilayah Kerajaan Laikang berada dalam pemerintahan Hindia Belanda. Kedua kerajaan ini mengadakan perlawanan politik dengan Hindia Belanda. Pada tanggal 29 Mei 1929, Kerajaan Binamu memilih seorang raja baru yang dipilih oleh rakyatnya melalui lembaga adat bernama Toddo' Appaka.
                            <br /><br />


                            Tanggal 20 Mei 1946, adalah simbol patriotisme Raja Binamu (Mattewakkang Dg Raja) yang meletakkan jabatan sebagai raja yang melakukan perlawanan terhadap pemerintah Belanda . Dengan Demikian penetapan Hari Jadi Jeneponto yang disepakati oleh pakar pemerhati sejarah, peneliti, sesepuh dan tokoh masyarakat Jeneponto, dari seminar Hari jadi Jeneponto yang berlangsung pada hari Rabu, tanggal 21 Agustus 2002 di Gedung Sipitangarri, dianggap sangat tepat, dan merupakan keputusan yang dapat dipertanggungjawabkan
                            <br /><br />

                            <h6>Masa kemerdekaan Indonesia</h6>
                            Undang-Undang tentang Pembentukan Daerah Tingkat II Di Sulawesi kemudian menetapkan Kabupaten Jeneponto sebagai Daerah Tingkat II di Sulawesi Selatan pada tanggal 1 Mei 1959. Penetapan ini bersamaan dengan pembentukan Kabupaten Takalar yang memperoleh pemekaran wilayah dari Kabupaten Jeneponto.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($kota->id == 7)
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah kabupaten {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Pangkajene adalah sebuah kecamatan yang menjadi ibukota dari Kabupaten Pangkajene Kepulauan, Sulawesi Selatan, Indonesia. Sebagai sebuah pusat kota, Pangkajene memainkan peran vital kehidupan Kabupaten Pangkep baik sebagai pusat pemerintahan maupun pusat perekonomian.
                            <br /><br />
                            Kata “Pangkajene” (Bahasa Makassar), berasal dari dua kata yang disatukan, yaitu “Pangka” yang berarti cabang dan “Je’ne” yang berarti air, dinamai demikian karena pada daerah yang dulunya merupakan wilayah kekuasaan Kerajaan Barasa itu, terdapat sungai yang bercabang, yang sekarang dinamai Sungai Pangkajene. Sampai saat ini belum didapatkan keterangan yang tegas, sejak kapan nama “Pangkajene” menggantikan nama yang popular sebelumnya, ‘Marana’. Menurut beberapa sumber, awalnya yang dikenal adalah Kampung Marana, dan sungai yang membelah kota Pangkajene sekarang ini dulunya bernama Sungai Marana.(Makkulau, 2008).
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif($kota->id == 8)
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sejarah {{ $kota->nama_kota }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Kerajaan Tana Bone dahulu terbentuk pada awal abad ke- IV atau pada tahun 1330, namun sebelum Kerajaan Bone terbentuk sudah ada kelompok-kelompok dan pimpinannya digelar KALULA Dengan datangnya LA UBBI yang digelar TO MANURUNG ( Manurungge Ri Matajang ) atau MATA SILOMPO-E. maka terjadilah penggabungan kelompok-kelompok tersebut termasuk Cina, Barebbo, Awangpone dan Palakka. Pada saat pengangkatan TO MANURUNG MATA SILOMPO- E menjadi Raja Bone, terjadilah kontrak pemerintahan berupa sumpah setia antara rakyat Bone dalam hal ini diwakili oleh penguasa Cina dengan 10 MANURUNG , sebagai tanda serta lambang kesetiaan kepada Rajanya sekaligus merupakan pencerminan corak pemerintahan Kerajaan Bone diawal berdirinya. Disamping penyerahan diri kepada Sang Raja juga terpatri pengharapan rakyat agar supaya menjadi kewajiban Raja untuk menciptakan keamanan, kemakmuran, serta terjaminnya penegakan hukum dan keadilan bagi rakyat. Adapun teks Sumpah yang diucapkan oleh penguasa Cina mewakili rakyat Bone berbunyi sebagai berikut ;
                            <br /><br />
                            Budaya masyarakat Bone demikian Tinggi mengenai sistem norma atau adat berdasarkan Lima unsur pokok masing-masing : Ade, Bicara, Rapang, Wari dan Sara yang terjalin satu sama lain, sebagai satu kesatuan organis dalam pikiran masyarakat yang memberi rasa harga diri serta martabat dari pribadi masing-masing. Kesemuanya itu terkandung dalam satu konsep yang disebut “ SIRI “merupakan integral dari ke Lima unsur pokok tersebut diatas yakni pangadereng ( Norma adat), untuk mewujudkan nilai pangadereng maka rakyat Bone memiliki sekaligus mengamalkan semangat/budaya.
                            <br /><br />


                            SIPAKATAU artinya : Saling memanusiakan , menghormati / menghargai harkat dan martabat kemanusiaan seseorang sebagai mahluk ciptaan ALLAH tanpa membeda – bedakan, siapa saja orangnya harus patuh dan taat terhadap norma adat/hukum yang berlaku.
                            <br /><br />


                            SIPAKALEBBI artinya : Saling memuliakan posisi dan fungsi masing-masing dalam struktur kemasyarakatan dan pemerintahan, senantiasa berprilaku yang baik sesuai dengan adat dan budaya yang berlaku dalam masyarakat
                            <br /><br />

                            SIPAKAINGE artinya: Saling mengingatkan satu sama lain, menghargai nasehat, pendapat orang lain, manerima saran dan kritikan positif dan siapapun atas dasar kesadaran bahwa sebagai manusia biasa tidak luput dari kekhilafan Dengan berpegang dan berpijak pada nilai budaya tersebut diatas, maka system pemerintahan Kerajaan Bone adalah berdasarkan musyawarah mufakat. Hal ini dibuktikan dimana waktu itu kedudukan ketujuh Ketua Kaum ( Matoa Anang ) dalam satu majelis dimana MenurungE sebagai Ketuanya Ketujuh Kaum itu diikat dalam satu ikatan persekutuan yang disebut KAWERANG, artinya Ikatan Persekutuan Tana Bone. Sistem Kawerang ini berlangsung sejak ManurungE sebagai Raja Bone pertama hingga Raja Bone ke IX yaitu LAPPATAWE MATINROE RI BETTUNG pada akhir abad ke XVI.
                            <br /><br />

                            Pada tahun 1605 Agama Islam masuk di Kerajaan Bone dimasa pemerintahan Raja Bone ke X LATENRI TUPPU MATINROE RI SIDENRENG. Pada masa itu pula sebuatan Matoa Pitu diubah menjadi Ade Pitu ( Hadat Tujuh ), sekaligus sebutan MaTOA MENGALAMI PULA PERUBAHAN MENJADI Arung misalnya Matua Ujung disebut Arung Ujung dan seterusnya. Demikian perjalanan panjang Kerajaan Bone, maka pada bulan Mei 1950 untuk pertama kalinya selama Kerajaan Bone terbentuk dan berdiri diawal abad ke XIV atau tahun 1330 hingga memasuki masa kemerdekaan terjadi suatu demonstrasi rakyat dikota Watampone yaitu menuntut dibubarkannya Negara Indonesia Timur, serta dihapuskannya pemerintahan Kerajaan dan menyatakan berdiri dibelakang pemerintah Republik Indonesia Beberapa hari kemudian para anggota Hadat Tujuh mengajukan permohonan berhenti.
                            <br><br>

                            Disusul pula beberapa tahun kemudian terjadi perubahan nama distrik/onder distrik menjadi KECAMATAN sebagaimana berlaku saat ini. Pada tanggal 6 April 1330 melalui rumusan hasil seminar yang diadakan pada tahun 1989 di Watampone dengan diperkuat Peraturan Daerah Kabupaten Dati II Bone No.1 Tahun 1990 Seri C, maka ditetapkanlah tanggal 6 April 1330 sebagai HARI JADI KABUPATEN BONE dan diperingati setiap tahun .
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>

    <div class="row d-flex justify-content-center my-3">

        <div class="col-sm-8 my-3">
            @if(count($query) < 1) <div class="card card-frame my-3">
                <div class="card-body d-flex justify-content-center">
                    <img src="http://127.0.0.1:8000/assets/img/notfound.png" class="img-fluid border-radius-lg" width="400px" alt="Responsive image">
                    <div class="col my-auto align-middle">
                        <h3 style="text-align: center;" class="mb-4"><span class="text-warning">Opss...!</span><br>
                            Paket tour dikota ini belum ada !</h3>
                    </div>
                </div>
        </div>
        @else
        @foreach ($query as $querys)
        <div class="card card-frame my-3" style="clear: both;">
            <!-- Card image -->
            <div class="card-header p-4 mx-3 mt-3 position-relative z-index-1">
                <p class="card-title h4 d-block text-darker">#{{ $querys->title }}</p>
                <img class="border-radius-lg w-100" src="
                 @if ($querys->image)
                    {{ asset('storage/' . $querys->image)}}
                    @else
                     https://images.unsplash.com/photo-1582414004129-a955c6087f5e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBhcmFkaXNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60
                    @endif">
            </div>
            <div class="card-body">
                <h4 class="card-title">Deskripsi tour</h4>
                <p class="card-text mb-4">{{ $querys->description }}</p>
                <div class="border-radius-lg" style="background-color:#ffc107; padding:10px">
                    <h5 class="card-title">Harga Mulai: {{ $querys->price }}</h5>
                </div>

                <!-- Tabs navs -->
                <ul class="nav nav-tabs nav-fill mb-3 my-3" id="ex1" role="tablist">
                    <li class="nav-item mx-2" role="presentation">
                        <a class="btn nav-link active my-2" style="padding: 15px 5px;" id="tab-tujuan-{{ $querys->id }}" data-bs-toggle="tab" href="#tabs-tujuan-{{ $querys->id }}" role="button" aria-controls="tabs-tujuan-{{ $querys->id }}" aria-selected="true">Tempat Wisata</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="btn nav-link my-2 " style="padding: 15px 5px;" id="tab-harga-{{ $querys->id }}" data-bs-toggle="tab" href="#tabs-harga-{{ $querys->id }}" role="button" aria-controls="tabs-harga-{{ $querys->id }}" aria-selected="false">Detail Harga</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="btn nav-link my-2" style="padding: 15px 5px;" id="tab-itinary-{{ $querys->id }}" data-bs-toggle="tab" href="#tabs-itinary-{{ $querys->id }}" role="button" aria-controls="tabs-itinary-{{ $querys->id }}" aria-selected="false">Itinary</a>
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex2-content">
                    <div class="tab-pane fade show active" id="tabs-tujuan-{{ $querys->id }}" role="tabpanel" aria-labelledby="tab-tujuan-{{ $querys->id }}">
                        <h4>Tujuan Paket #{{ $querys->title }}</h4><br>{!! html_entity_decode(nl2br(e($querys->travel_route))) !!}
                    </div>
                    <div class="tab-pane fade" id="tabs-harga-{{ $querys->id }}" role="tabpanel" aria-labelledby="tab-harga-{{ $querys->id }}">
                        <h4>Harga Paket #{{ $querys->title }}</h4><br>{!! html_entity_decode(nl2br(e($querys->price_detail))) !!}
                    </div>
                    <div class="tab-pane fade" id="tabs-itinary-{{ $querys->id }}" role="tabpanel" aria-labelledby="tab-itinary-{{ $querys->id }}">
                        <h4>Itenary Paket #{{ $querys->title }}</h4><br>{!! html_entity_decode(nl2br(e($querys->itinary))) !!}
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        @endif
    </div>

    <div class="col-sm-4 my-3">
        <div class="card bg-gradient-default my-3">
            <div class="card-body">
                <!-- <p class="card-title h4 d-block text-darker">#{{ $kota->nama_kota }}</p> -->
                <h4 class="card-title" style="text-align: center;">Form reservasi wisata</h4>
                <hr class="horizontal dark my-0">
                <form method="post" action="/booking">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nama lengkap</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-control-label">Email </label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="phone_number" class="form-control-label">No Wa / Telp</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number">
                        <label style="font-weight:normal;">Pastikan No Wa / Telp aktif karena akan digunakan untuk konfirmasi pesanan anda.</label>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-control-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="tour_date" class="form-control-label">Tanggal tour</label>
                        <input class="form-control" type="date" id="tour_date" name="tour_date">
                    </div>

                    <div class="form-group">
                        <label for="quantity" class="form-control-label">Jumlah peserta</label>
                        <input class="form-control" type="number" id="quantity" name="quantity">
                    </div>
                    <div class="form-group">
                        <label for="tour_id" class="form-control-label">Pilihan Paket wisata</label>
                        <select class="form-control form-control-lg" name="tour_id" id="tour_id">
                            @if(count($query) < 1) <option>Belum ada paket wisata</option>
                                @else
                                @foreach ($query as $querys)
                                <option value="{{ $querys->id }}">{{ $querys->title }}</option>
                                @endforeach
                                @endif
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Booking Sekarang</button>
                </form>
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