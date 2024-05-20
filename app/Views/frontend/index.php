<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mading Digital DISPUSIP</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/my_own_style.css' ?>" />

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jam -->
    <script type="text/javascript">
        window.onload = function() {
            jam();
        };

        function jam() {
            var a = document.getElementById("jam"),
                d = new Date(),
                h,
                m,
                s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            a.innerHTML = h + ":" + m + ":" + s;

            setTimeout("jam()", 1000);
        }

        function set(a) {
            a = a < 10 ? "0" + a : a;
            return a;
        }
    </script>
    <!-- jam -->
</head>

<body>

    <nav class="navbar">
        <div class="navbar-brand">
            <a href="">
                <img src="<?php echo base_url() . 'assets/img/logo/logo.png' ?>" alt="logo" class="logo-img"></a>
            <div class="dispusip">
                Mading Digital Perpustakaan Tenas Effendy Kota Pekanbaru
            </div>
            <a href="<?= base_url('login') ?>"> <i class="fa-regular fa-user" id="admin-login"> </i> </a>
        </div>
    </nav>


    <div class="video">
        <div class="row">
            <!-- Kolom video -->
            <div class="col-md-9">
                <div class="card mb-1">
                    <video class="w-100" id="myVideo" height="559" controls autoplay>
                        <source src="" id="mp4Source" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="height: calc(100% - 20px); overflow: hidden;">
                    <!-- Gambar jadwal buka perpustakaan -->
                    <img src="assets/img/jadwal.png" class="card-img-top img-fluid" alt="Jadwal Buka Perpustakaan" style="padding-top: 10px;">
                    <div class="card-body">
                        <div class="card mb-3">
                            <div class="card-body">
                                <!-- Logo motto -->
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <img src="assets/img/smart.jpg" class="img-fluid" alt="Gambar Baru" style="max-width: 60%; margin-bottom: 20px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Logo dispusip -->
                                    <div class="col-6 d-flex align-items-center justify-content-center">
                                        <img src="assets/img/logo/logo2.png" class="img-fluid" style="max-width: 80%;" alt="Gambar Tambahan">
                                    </div>
                                    <!-- Logo uin -->
                                    <div class="col-6 d-flex align-items-center justify-content-center">
                                        <img src="assets/img/logo-uin.png" class="img-fluid" style="max-width: 40%;" alt="Logo Baru">
                                    </div>
                                </div>
                                <!-- Teks copyright -->
                                <p class="card-text text-center mt-3">&copy; Kerja Praktik 2024&nbsp; <br>Jurusan Teknik Informatika</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="runingtext">
            <marquee class="teksjalan">
                <p>
                    Selamat Datang di Perpustakaan Tenas Effendy Pekanbaru ... Letakkan
                    Tas Didalam Loker ... Jangan Bawa Makanan Didalam Perpustakaan ...
                    Selamat Datang di Perpustakaan Tenas Effendy Pekanbaru ... Letakkan
                    Tas Didalam Loker ... Jangan Bawa Makanan Didalam Perpustakaan ...
                </p>
            </marquee>
        </div>

        <div id="jam"></div>
        <!-- js boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            let count = 0;
            let player = document.getElementById('myVideo');
            let mp4Vid = document.getElementById('mp4Source');
            let playList = [];


            document.addEventListener("DOMContentLoaded", function() {
                fetch(`http://localhost:8080/videos/get`)
                    // fetch data to get all the video and then store in playlist
                    .then(response => response.json())
                    .then(data => {
                        playList = Object.values(data);
                        loadFirstVideo();
                    });
            });

            player.addEventListener('ended', myHandler, false);

            function loadFirstVideo() {
                if (playList.length > 0) {
                    $(mp4Vid).attr('src', "./assets/video/" + playList[0]);
                    player.load();
                    player.play();
                }
            }

            function myHandler() {
                count++;
                if (count < playList.length) {
                    $(mp4Vid).attr('src', "./assets/video/" + playList[count]);
                    player.load();
                    player.play();
                } else {
                    count = 0; // Reset count to loop the playlist
                    loadFirstVideo();
                }
            }
        </script>
</body>

</html>
