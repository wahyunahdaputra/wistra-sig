<div class="row">
			<div class="col-lg-8">
				<div id="map" style="height: 70vh"></div>
			</div>
            <div class="col-lg-4">
				<div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Tambah Data Lokasi</h3>
                        <form action="<?= base_url("lokasi/tambah_lokasi") ?>" method="POST" enctype="multipart/form-data">
                            <fieldset class="form-group floating-label-form-group">
                                <label for="latlng">Latitude, Longitude</label>
                                <input type="text" class="form-control" name="latlng" id="latlng" placeholder="Klik lokasi pada peta" autocomplete="off" required>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                <label for="namlok">Nama Lokasi</label>
                                <input type="text" class="form-control" name="namlok" id="namlok" placeholder="Masukkan nama lokasi" autocomplete="off" required>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                <label for="ket">Keterangan</label>
                                <input type="text" class="form-control" name="ket" id="ket" placeholder="Keterangan" autocomplete="off" required>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="gambar" autocomplete="off" required>
                            </fieldset>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url("lokasi") ?>" type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink">Kembali</a>
                                <button type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="simpan" value="Simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
			    </div>
		    </div>
            