<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
		<?php
			if ($this->session->flashdata('alert') == 'tambah_lokasi'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil ditambahkan
				</div>
				<script>
					<?php $this->session->unset_userdata('alert'); ?>
				</script>
			<?php
			elseif ($this->session->flashdata('alert') == 'edit_lokasi'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
				<script>
					<?php $this->session->unset_userdata('alert'); ?>
				</script>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_lokasi'):
				?>
				<div class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil dihapus
				</div>
				<script>
					<?php $this->session->unset_userdata('alert'); ?>
				</script>
			<?php
			endif;
			?>
			<div class="card-header">
				<h1 style="text-align: center">Form Input Lokasi</h1>
				<?php if ($this->session->userdata('session_hak_akses') == 'Admin'): ?>
					<a href="<?= base_url('lokasi/tambah_lokasi') ?>" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2">
						<i class="ft-plus-circle"></i> Tambah Data Lokasi
					</a>
				<?php endif; ?>
			</div>
			<hr>
			<div class="card-body table-responsive">
				<table class="table table-bordered zero-configuration" style="width: 100%">
					<thead>
					<tr>
						<td style="text-align: center">No.</td>
						<td style="text-align: center">Latitude, Longitude</td>
						<td style="text-align: center">Nama Lokasi</td>
						<td style="text-align: center">Kategori</td>
						<td style="text-align: center">Keterangan</td>
						<td style="text-align: center">Gambar</td>
						<td style="text-align: center"><i class="ft-settings spinner"></i></td>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($lokasi as $key => $value):
						?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $value['lat_lng'] ?></td>
							<td><?= $value['nama_lokasi'] ?></td>
							<td><?= $value['kategori'] ?></td>
							<td><?= $value['keterangan'] ?></td>
							<td class="text-center"><img src="assets/images/<?= $value['gambar'] ?>" alt="gambar" width="100px"></td>
							<td class="text-center">
								<?php if ($this->session->userdata('session_hak_akses') == 'Admin'):?>
								<a
									href="lokasi/edit_lokasi?id_lokasi=<?= $value['id_lokasi'] ?>" class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2"><i class="ft-edit"></i></a>
								<button
									class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 lokasi-hapus"
									data-toggle="modal" data-target="#hapus" value="<?= $value['id_lokasi'] ?>"
									title="Hapus data Lokasi"><i class="ft-trash"></i>
								</button>
								<?php endif;?>
							</td>
						</tr>
						<?php
						$no++;
					endforeach;
					?>
					</tbody>
				</table>
			</div>
			<nav>
        <ul class="pagination justify-content-center">
            <li class="page-item <?= $current_page == 1 ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $current_page > 1 ? $current_page - 1 : 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <li class="page-item <?= $i == $current_page ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?= $current_page == $total_pages ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $current_page < $total_pages ? $current_page + 1 : $total_pages ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
		</div>
	</div>
</div>
	
<div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Hapus Data Lokasi ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal" value="Tutup">
				<div id="hapuslokasi">

				</div>
			</div>
		</div>
	</div>
</div>
