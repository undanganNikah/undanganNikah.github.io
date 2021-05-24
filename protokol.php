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



    <!-- mempelai -->
    <div class="box">
        <img src="image/background.png" class="back" alt="">

        <div class="frame-mempelai">
            <img src="image/top_l.png" class="top-l" alt="">
            <img src="image/top_r.png" alt="top-r" class="top-r">
            <img src="image/bottom_r.png" alt="bottom-r" class="bottom-r">
            <img src="image/bottom_l.png" alt="bottom-l" class="bottom-l">
            <div class="box-content1"></div>
            <div class="box-content">
                <div class="protokol">
                    <p style="font-family: 'Redressed'; font-size: 30px; margin-top: -20px;">Pencegahan Covid-19</p>
                    <img src="image/line_b19973.jpg" alt="" style="width: 100px; height:1px; margin-top: -45px;">
                </div>
                <div class="pencegahan">
                    <p>Acara ini akan diselenggarakan dengan mematuhi protokol pencegahan penyebaran COVID-19</p>
                </div>
                <div class="masker">
                    <img src="image/masker_black.png" alt="mask">
                    <p>Tamu undangan menggunakan masker</p>
                </div>
                <div class="suhu">
                    <img src="image/temperatur_black.png" alt="temperatur">
                    <p>Suhu tubuh normal (dibawah 37,5&deg;C)</p>
                </div>
                <div class="jarak">
                    <img src="image/jaga_jarak_black.png" alt="jarak">
                    <p>Jaga jarak antar orang sekitar 2 meter.</p>
                </div>
                <div class="cucitangan">
                    <img src="image/cuci_tangan_black.png" alt="cucitangan">
                    <p>Cuci tangan menggunakan air dan sabun atau menggunakan hand sanitizer</p>
                </div>
                <div class="tamu">
                    <p>Bagi para tamu undangan diharapkan mengikuti protokol pencegahan COVID-19.</p>
                </div>



            </div>
        </div>

    </div>

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