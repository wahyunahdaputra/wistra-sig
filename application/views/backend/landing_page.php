<section class="container my-5" id="petawistra">
    <span class="text-primary d-flex justify-content-center"><small>Peta WiStra</small></span>
    <h3 class="text-center mb-4">Peta Sebaran Objek Wisata Sulawesi Tenggara</h3>
    <div class="row justify-content-md-center">
        <div class="search-bar col-lg-12 mb-1">
            <form id="searchForm" action="<?php echo site_url('Welcome/search'); ?>" method="post">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari objek wisata...">
                    <button type="submit" class="input-group-text" title="Cari" name="cari"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="col-lg-12 topic_3">
            <div id="map" style="height: 80vh"></div>
        </div>
        <!-- Keterangan marker -->
        <div class="col-lg-12 mt-3">
            <h5>Keterangan:</h5>
            <ul class="list-unstyled">
                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-green.png" alt="Blue Marker" style="width: 20px; height: 31px;"> Marker Biru: Wisata Perairan</li>
                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-blue.png" alt="Green Marker" style="width: 20px; height: 31px;"> Marker Hijau: Wisata Alam</li>
                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-orange.png" alt="Orange Marker" style="width: 20px; height: 31px;"> Marker Jingga: Wisata Budaya</li>
                <li><img src="<?= base_url() ?>assets/images/img/marker-icon-grey.png" alt="Grey Marker" style="width: 20px; height: 31px;"> Marker Abu-abu: Wisata Religi</li>
            </ul>
        </div>
    </div>
</section>
