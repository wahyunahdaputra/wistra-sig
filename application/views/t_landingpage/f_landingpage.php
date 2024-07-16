<footer class="bodyy">
    <div class="containerrr">
      <input type="radio" name="dot" id="one" />
      <input type="radio" name="dot" id="two" />
      <div class="main-card">
        <div class="cardsss">
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="<?= base_url() ?>assets/images/Card_Profile/wahyu.jpeg" alt="">
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
	var map = L.map('map').setView([-4.127270533534936, 122.10755301696203], 8);

	var tileLayer = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });

    // Google map layer
    var Googlemap = googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);

    // Hybrid
    var Hybrid = googleHybrid = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });

    // Terrain
    var Terrain = googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });

    // Layer Control
    var baseLayers = {
        "TileLayer": tileLayer,
        "GoogleStreets": Googlemap,
        "Hybrid": Hybrid,
        "Terrain": Terrain
    };

    var overlays = {
        // "Marker": Googlemap
    };

    L.control.layers(baseLayers, overlays).addTo(map);

var greenIcon = new L.Icon({
        iconUrl: '<?= base_url() ?>assets/images/img/marker-icon-green.png',
        shadowUrl: '<?= base_url() ?>assets/images/img/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    var blueIcon = new L.Icon({
        iconUrl: '<?= base_url() ?>assets/images/img/marker-icon-blue.png',
        shadowUrl: '<?= base_url() ?>assets/images/img/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    var orangeIcon = new L.Icon({
        iconUrl: '<?= base_url() ?>assets/images/img/marker-icon-orange.png',
        shadowUrl: '<?= base_url() ?>assets/images/img/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    var grayIcon = new L.Icon({
        iconUrl: '<?= base_url() ?>assets/images/img/marker-icon-grey.png',
        shadowUrl: '<?= base_url() ?>assets/images/img/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    // Fungsi untuk memilih ikon berdasarkan kategori wisata
    function getIcon(kategori) {
        switch (kategori) {
            case 'Wisata Alam':
                return greenIcon;
            case 'Wisata Perairan':
                return blueIcon;
            case 'Wisata Budaya':
                return orangeIcon;
            case 'Wisata Religi':
                return grayIcon;
            default:
                return redIcon; // Default ke greenIcon jika kategori tidak dikenali
        }
    }

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
            var marker = L.marker([<?= $lok['lat_lng'] ?>], {icon: getIcon('<?= $lok['kategori'] ?>')}).addTo(map);
            marker.bindPopup("<b><?= $lok['nama_lokasi'] ?></b><br><?= $lok['lat_lng'] ?><br><?= $lok['keterangan'] ?><br><img src='<?= base_url("assets/images/{$lok['gambar']}") ?>' alt='' width='150px'>");
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($cari_wisata)): ?>
    <?php foreach ($cari_wisata as $lok): ?>
        var marker = L.marker([<?= $lok->lat_lng ?>], {icon: getIcon('<?= $lok->kategori ?>')}).addTo(map);
        marker.bindPopup("<b><?= $lok->nama_lokasi ?></b><br><?= $lok->lat_lng ?><br><?= $lok->keterangan ?><br><img src='<?= base_url("assets/images/{$lok->gambar}") ?>' alt='' width='150px'>");
    <?php endforeach; ?>
    <?php endif; ?>

</script>