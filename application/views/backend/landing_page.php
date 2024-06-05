<!-- TOPIC -->
  <section class="container my-5" id="petawistra">
    <span class="text-primary d-flex justify-content-center"><small>Peta WiStra</small></span>
        <h3 class="text-center mb-4">Peta Sebaran Objek Wisata Sulawesi Tenggara</h3>
    <div class="row justify-content-md-center">
      <!-- <div class="col-lg-1 topic_1"></div> -->
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
      <!-- <div class="col-lg-1 topic_4"></div> -->
    </div>
    </div>
  </section>
  