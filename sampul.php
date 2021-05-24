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



    <!-- sampul -->
    <div class="box">
        <img class="bungasampul" src="image/bunga.png" alt="bunga">
        <div class="content">
            <p class="weddingsampul">The Wedding</p>
            <div class="namasampul">Nurul <span>&</span> Abdul</div>
            <div class="tanggalsampul">06.06.2021</div>
        </div>
    </div>

    <!-- menu navbar -->
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
        <li class="hide">
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