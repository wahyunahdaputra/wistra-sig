<div class="row">
    <div class="col-md-12">
        <div class="row justify-content-center">
            <div class="card box-shadow-2 col-md-12">
                <div class="card-header">
                    <h1 class="text-center" style="font-size: 24px; font-weight: bold; color: black;">Peta Sebaran Objek Wisata Sulawesi Tenggara</h1>
                    <hr>
                    <div class="search-bar col-lg-12 mb-1">
                    <form id="searchForm" action="<?php echo site_url('DashboardController/search'); ?>" method="post">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Cari objek wisata...">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text" title="Cari" name="cari"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-lg-12">
                        <div id="map" style="height: 60vh"></div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Keterangan marker -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Keterangan:</h5>
                            <ul class="list-unstyled">
                                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-green.png" alt="Blue Marker" style="width: 20px; height: 31px;"> Marker Biru: Wisata Perairan</li>
                                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-blue.png" alt="Green Marker" style="width: 20px; height: 31px;"> Marker Hijau: Wisata Alam</li>
                                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-orange.png" alt="Orange Marker" style="width: 20px; height: 31px;"> Marker Jingga: Wisata Budaya</li>
                                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-grey.png" alt="Grey Marker" style="width: 20px; height: 31px;"> Marker Abu-abu: Wisata Religi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
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
                return redIcon;
        }
    }

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
