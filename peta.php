<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Undangan Nikah</title>
</head>

<body>



    <!-- penutup -->
    <div class="box">
        <img src="image/background.png" class="back" alt="">

        <div class="frame-mempelai">
            <img src="image/top_l.png" class="top-l" alt="">
            <img src="image/top_r.png" alt="top-r" class="top-r">
            <img src="image/bottom_r.png" alt="bottom-r" class="bottom-r">
            <img src="image/bottom_l.png" alt="bottom-l" class="bottom-l">
            <div class="box-content1"></div>
            <div class="box-content">
                <div class="peta">
                    <span class="petaLokasi">Peta Lokasi</span>
                    <img src="image/line_b19973.jpg" alt="">
                    <p style="font-weight: bold; margin-top:15px; margin-bottom: 1px;">Kediaman Mempelai Wanita</p>
                    <p>Jl. Halim Perdana Kusuma Gg. Kumpi Jisin RT. 001/03 Kel. Jurumudi Baru Kec. Benda Kota Tangerang, Banten</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.838667919615!2d106.67231291382426!3d-6.15235609554557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f881d30d415b%3A0x539e1fb50262ef8e!2sJl.%20Halim%20Perdana%20Kusuma%2C%20RT.001%2FRW.003%2C%20Jurumudi%20Baru%2C%20Benda%2C%20Kota%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1621833811513!5m2!1sid!2sid" width="300" height="250" style="border:1; border-radius: 5px; box-shadow: 3px 2px 3px 3px rgba(0, 0, 0, 0.2);" allowfullscreen="" loading="lazy"></iframe>
                <!-- <div>
                    <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.120792079996!2d106.633103!3d-6.189531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f92923c20435%3A0x79c87e972a5eb71f!2sUNIS%20Tangerang!5e0!3m2!1sid!2sid!4v1621257075135!5m2!1sid!2sid" class="btn btn-dark" style="width: 200px; margin-top: 10px;">Buka Maps</a>
                </div> -->

            </div>
        </div>

    </div>

    <!-- navigation -->
    <ul class="navigation">
        <li>
            <a href="penerima.php">
                <div class="icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="name" data-text="Penerima">Penerima</div>
            </a>
        </li>
        <li class="show">
            <a href="sampul.php">
                <div class="icon">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                </div>
                <div class="name" data-text="Sampul">Sampul</div>
            </a>
        </li>
        <li>
            <a href="mempelai.php">
                <div class="icon">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </div>
                <div class="name" data-text="Mempelai">Mempelai</div>
            </a>
        </li>
        <li>
            <a href="acara.php">
                <div class="icon">
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                </div>
                <div class="name" data-text="Acara">Acara</div>
            </a>
        </li>
        <li>
            <a href="peta.php">
                <div class="icon">
                    <i class="fa fa-map-o" aria-hidden="true"></i>
                </div>
                <div class="name" data-text="Peta">Peta</div>
            </a>
        </li>
        <li>
        <li class="hide">
            <a href="protokol.php">
                <div class="icon">
                    <i class="fa fa-book" aria-hidden="true"></i>
                </div>
                <div class="name" data-text="Protokol">Protokol</div>
            </a>
        </li>
        <li class="hiden">
            <a href="penutup.php">
                <div class="icon">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                </div>
                <div class="name" data-text="Penutup">Penutup</div>
            </a>
        </li>
    </ul>

    <div class="toggle"></div>

    <script>
        const show = document.querySelector('.show');
        const navigation = document.querySelector('.navigation');
        const hide = document.querySelector('.hide');
        const hiden = document.querySelector('.hiden');
        document.querySelector('.toggle').onclick = function() {
            this.classList.toggle('active');
            hide.classList.toggle('active');
            hiden.classList.toggle('active');
            navigation.classList.toggle('active');
            show.classList.toggle('active');
        }
    </script>


    <!-- <div class="iframe-preview iframe-preview-mobile">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-4">
                 <nav class="fixed-bottom">
                    <ul class="nav nav-tabs carousel fixed-bottom" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="penerima-tab" data-bs-toggle="tab" data-bs-target="#penerima" type="button" role="tab" aria-controls="penerima" aria-selected="true">Penerima</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sampul-tab" data-bs-toggle="tab" data-bs-target="#sampul" type="button" role="tab" aria-controls="sampul" aria-selected="false">Sampul</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mempelai-tab" data-bs-toggle="tab" data-bs-target="#mempelai" type="button" role="tab" aria-controls="mempelai" aria-selected="false">Mempelai</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="acara-tab" data-bs-toggle="tab" data-bs-target="#acara" type="button" role="tab" aria-controls="acara" aria-selected="false">Acara</button>
                        </li>
                    </ul>
                 </nav>
            </div>
        </div>
    </div> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>