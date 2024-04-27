<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mading Digital DISPUSIP</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/my_own_style.css' ?>" />
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
        <a href=""><img src="img/logo2.png" alt="" /></a>
        <div class="dispusip">
            Dinas Perpustakaan dan Kearsipan Kota Pekanbaru
        </div>
    </nav>

    <div class="video">
        <iframe width="1007" height="566" src="https://www.youtube.com/embed/videoseries?si=suxfC4oGlQe8IOHu&amp;list=PLjLrD-adY17AbqSMF0tgD4376UluPpPwK&autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web share" allowfullscreen>
        </iframe>
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
</body>

</html>