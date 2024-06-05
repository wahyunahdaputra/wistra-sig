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
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
	var map = L.map('map').setView([-4.127270533534936, 122.10755301696203], 9);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

    <?php if (!empty($lihat_marker)): ?>
        <?php foreach ($lihat_marker as $lok): ?>
            var marker = L.marker([<?= $lok['lat_lng'] ?>]).addTo(map);
            marker.bindPopup("<b><?= $lok['nama_lokasi'] ?></b><br><?= $lok['lat_lng'] ?><br><?= $lok['keterangan'] ?><br><img src='<?= base_url("assets/images/{$lok['gambar']}") ?>' alt='' width='150px'>");
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($cari_wisata)): ?>
    <?php foreach ($cari_wisata as $lok): ?>
        var marker = L.marker([<?= $lok->lat_lng ?>]).addTo(map);
        marker.bindPopup("<b><?= $lok->nama_lokasi ?></b><br><?= $lok->lat_lng ?><br><?= $lok->keterangan ?><br><img src='<?= base_url("assets/images/{$lok->gambar}") ?>' alt='' width='150px'>");
    <?php endforeach; ?>
    <?php endif; ?>

</script>
