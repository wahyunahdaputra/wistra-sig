<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- UNICONS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <title>WiStra App</title>
  <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/images/assets/style_item.css">
  <!---<title> Responsive Our Team Section | CodingLab </title>---->
  <link rel="stylesheet" href="assets/images/Card_Profile/style.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container navbar">
      <a class="navbar-brand text-decoration-none mb-0 brandd text-primary" href="index.php">
        <i class="uil uil-bus-school fs-5" width="30px"></i>
        <strong>WiStra</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="#objekwisata">Objek Wisata</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn text-decoration-none rounded-pill btn-outline-primary" href="<?= base_url('login')?>"><i class="uil uil-user button_icon"></i> Login &nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section>
    <div class="flex-container container mt-5">
      <div class="flex-item-left">
        <h1 class="display-3"><strong><strong>WiStra</strong></strong></h1>
        <label class="home_subtitle mt-1 text-muted">WiStra merupakan sistem informasi geografis objek wisata di Sulawesi Tenggara. Yuk temukan destinasi wisata impianmu di sini berdasarkan kriteria yang kamu inginkan!</label> <br>
        <a href="<?= base_url('login') ?>" class="btn text-decoration-none rounded btn-primary mt-3 py-3">
          Cari Objek Wisata &nbsp;<i class="uil uil-search button_icon"></i>
        </a>
      </div>
      <div class="flex-item-right">
        <img src="assets/images/assets/turist.jpg" class="img-fluid rounded-3" alt="">
      </div>
    </div>
  </section>

  <!-- ITEM Video -->
  <section class="container my-5" id="objekwisata">
    <span class="text-primary d-flex justify-content-center"><small>Objek Wisata</small></span>
    <h3 class="text-center mb-2">Favorit</h3>
    <div class="body_item">
      <div class="wrapperr">
        <div class="card_destination">
          <img src="https://img.antaranews.com/cache/800x533/2021/12/15/Konservasi-Kebun-Raya-Kendari-151221-Jjn-3.jpg" />
          <div class="infoo">
            <h5>Kebun Raya Kendari</h5>
            <p><small><small>
                  Camping ground yang menyuguhkan pemandangan indah dan asri.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Kebun+Raya+Kendari/@-4.0480792,122.5746165,17z/data=!3m1!4b1!4m6!3m5!1s0x2d98922dfc0cb8cf:0xd712067b117d5db9!8m2!3d-4.0480792!4d122.5771914!16s%2Fg%2F11dxbjsz_s?entry=ttu"><small><small>Gaskenn </small><i class="uil uil-bus-school"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://turgo.id/media/uploads/2020/07/pesona-pantai-toronipa.jpg" />
          <div class="infoo">
            <h5>Pantai Toronipa</h5>
            <p><small><small>
            Objek wisata keluarga dengan garis pantai landai dan relatif dangkal.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Pantai+Toronipa/@-3.8973771,122.6547556,15z/data=!3m1!4b1!4m6!3m5!1s0x2d98e973940bd0d7:0x8d6717741f95e82e!8m2!3d-3.8973773!4d122.6650554!16s%2Fg%2F11c5btv_rp?entry=ttu"><small><small>Gaskenn </small><i class="uil uil-bus-school"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://merdekami.com/wp-content/uploads/2023/11/indahnya-air-terjun-moramo-bentuknya-bertingkat-ada-di-sulawesi-tenggara84.webp" />
          <div class="infoo">
            <h5>Air Terjun Moramo</h5>
            <p><small><small>
                  Salah satu objek wisata yang menakjubkan dan memiliki panorama cantik.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Air+Terjun+Moramo/@-4.2208421,122.7424564,17z/data=!3m1!4b1!4m6!3m5!1s0x2d989f0cda33990b:0xab7ce4a2c20de727!8m2!3d-4.2208421!4d122.7450313!16s%2Fg%2F11bz0y82jk?entry=ttu"><small><small>Gaskenn </small><i class="uil uil-bus-school"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://asset.kompas.com/crops/uK4MLbXWhxCcHKdnKvorvm5O7yo=/24x0:868x563/750x500/data/photo/2023/02/07/63e1e85e1f4db.jpg" />
          <div class="infoo">
            <h5>Pulau Labengki</h5>
            <p><small><small>
                Salah satu wisata favorit wisatawan adalah Teluk Cinta, yang bentuknya menyerupai hati.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Labengki+Beach+Hut/@-3.4711361,122.4572867,15z/data=!3m1!4b1!4m6!3m5!1s0x2d990c6068791359:0x91ecffeae9b5364e!8m2!3d-3.4711362!4d122.4675865!16s%2Fg%2F11ggq0g0s7?entry=ttu"><small><small>Gaskenn </small><i class="uil uil-bus-school"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://wakatobinationalpark.id/wp-content/uploads/2021/06/6-scaled.jpg" />
          <div class="infoo">
            <h5>Taman Nasional Wakatobi</h5>
            <p><small><small>
                Taman Nasional Wakatobi adalah salah satu taman nasional di Indonesia.
                </small></small></p>
            <a target="_blank" href="https://wakatobinationalpark.id/"><small><small>Gaskenn </small><i class="uil uil-bus-school"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://getlost.id/wp-content/uploads/2023/06/Satryo-Widodo-819x1024.jpg" />
          <div class="infoo">
            <h5>Puncak Ahuawali</h5>
            <p><small><small>
                Bukit ini menyuguhkan pemandangan alam yang memukau dengan hamparan rerumputan luas.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Puncak+Ahuawali/@-4.0378761,122.0990374,17z/data=!3m1!4b1!4m6!3m5!1s0x2d9869994e4234f7:0xd312f28a63d23d61!8m2!3d-4.0378761!4d122.1016123!16s%2Fg%2F11g02shv8c?entry=ttu"><small><small>Gaskenn </small><i class="uil uil-bus-school"></i></small></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO -->
  <section>
      <div class="container">
        <span class="text-primary d-flex justify-content-center"><small>Pulau Labengki</small></span>
        <h3 class="text-center mb-2">Rekomendasi Objek Wisata</h3>
      <div class="flex-container mt-5">
      <div class="flex-item-left">
          <h5 class="video_title">Labengki - Sombori, Miniatur Raja Ampat Surganya Tanah Sulawesi</h5>
          <label class="text-muted"><small><small>16.413 views - Premiered Nov 28, 2019</small></small></label>
          <p class="video_p">"Tanah Sulawesi khususnya provinsi Sulawesi Tenggara dan Tengah ternyata menyimpan keindahan tersendiri bagai surga yang tersembunyi. Keindahan pulang Labengki-Sombori yang telah dikenal kalangan traveller beberapa tahun belakangan ini, kini sedang hits. Konon Labengki Sombori adalah Raja Ampat-nya Sulawesi, lho. Kamu gak percaya? Mending tonton videonya, Sobat."</p>
          <a href="https://www.google.com/maps/place/Labengki+Beach+Hut/@-3.471483,122.451163,13.46z/data=!4m6!3m5!1s0x2d990c6068791359:0x91ecffeae9b5364e!8m2!3d-3.4711362!4d122.4675865!16s%2Fg%2F11ggq0g0s7?entry=ttu" target="_blank" class="btn text-decoration-none rounded-pill btn-primary mt-2 py-3">
            Kunjungi &nbsp;<i class="uil uil-map-pin-alt button_icon"></i>
          </a>
      </div>
      <div class="flex-item-right">
        <a href="https://youtu.be/VSpkBtSCnBU?si=FjKMD3MHWdi0Hv0Q" target="_blank">
            <img class="img-fluid rounded-3" src="https://i.ytimg.com/vi/VSpkBtSCnBU/maxresdefault.jpg" alt=""/>
        </a>
      </div>
    </div>
      <div class="container">
      <div class="video_row">
        <div class="video_item">
          <h5>Jarak Dari Pusat Kota Kendari</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Dekat <br> <label class="text-muted"><small><small>60 km </small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Fasilitas</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Cukup <br> <label class="text-muted"><small><small>Tempat Parkir, Toilet Umum, Vila </small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Biaya Transportasi</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Murah <br> <label class="text-muted"><small><small>Rp. 72.ooo </small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Harga Tiket Masuk</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Mahal <br> <label class="text-muted"><small><small>Rp. 50.000 </small></small></label>
            </label>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- TOPIC -->
  <section class="container my-5" id="topic">
    <div class="row justify-content-md-center">
      <div class="col-lg-1 topic_1"></div>
      <div class="col-lg-5 topic_3">
        <div id="map" style="height: 65vh"></div>
      </div>
      <div class="col-lg-5 fuzzy_component topic_2">
        <span class="text-primary"><small>Peta WiStra</small></span>
        <h3>Peta Sebaran Objek Wisata Sulawesi Tenggara</h3>
        <p class="topic_p mt-3 text-dark">
        Sulawesi Tenggara, dengan kekayaan alamnya yang memikat, menawarkan petualangan yang tak terlupakan bagi para pengunjungnya. 
        Namun, potensi wisata yang melimpah ini seringkali belum tersampaikan secara maksimal karena keterbatasan informasi yang tersedia. 
        Oleh karena itu, hadirnya <strong>WiStra</strong> ini menjadi langkah awal yang penting untuk memperluas cakupan pengetahuan dan memudahkan akses bagi para wisatawan yang ingin menjelajahi pesona Sulawesi Tenggara. </p>
        </p>
        <div class="mt-4">
          <a href="https://www.google.com/maps/place/Labengki+Beach+Hut/@-3.471483,122.451163,13.46z/data=!4m6!3m5!1s0x2d990c6068791359:0x91ecffeae9b5364e!8m2!3d-3.4711362!4d122.4675865!16s%2Fg%2F11ggq0g0s7?entry=ttu" class="text-decoration-none">
            <i class="uil uil-image-search fs-3"></i>
            <label class="h6 button--flex button--small button--link services_button">
              Lihat Objek Wisata
              <i class="uil uil-arrow-right button_icon"></i>
            </label>
          </a>
        </div>
      </div>
      <div class="col-lg-1 topic_4"></div>
    </div>
    </div>
  </section>

  <footer class="bodyy">
    <div class="containerrr">
      <input type="radio" name="dot" id="one" />
      <input type="radio" name="dot" id="two" />
      <div class="main-card">
        <div class="cardsss">
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="assets/images/Card_Profile/wahyu.jpeg" alt="">
              </div>
              <div class="details">
                <div class="name">Wahyu Nahda Putra</div>
                <div class="job">Backend Enthusiast</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardsss">
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="assets/images/Card_Profile/.png" alt="">
              </div>
              <div class="details">
                <div class="name"></div>
                <div class="job"></div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>


</body>

</html>
<script>
	var map = L.map('map').setView([-4.127270533534936, 122.10755301696203], 9);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);

		var latlng = e.latlng;
		var lat = latlng.lat.toFixed(6);
		var lng = latlng.lng.toFixed(6);
		var latlng_format = lat + ', ' + lng;

		document.getElementById('latlng').value = latlng_format;
}

map.on('click', onMapClick);

<?php if (!empty($lihat_marker)): ?>
        <?php foreach ($lihat_marker as $lok): ?>
            var marker = L.marker([<?= $lok['lat_lng'] ?>]).addTo(map);
            marker.bindPopup("<b><?= $lok['nama_lokasi'] ?></b><br><?= $lok['lat_lng'] ?><br><?= $lok['keterangan'] ?><br><img src='<?= base_url("assets/images/{$lok['gambar']}") ?>' alt='' width='150px'>");
        <?php endforeach; ?>
    <?php endif; ?>

</script>