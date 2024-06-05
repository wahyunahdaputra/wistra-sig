$(document).ready(function () {

	// ------------------------------------------------------------------------------------------
	// start
	// ------------------------------------------------------------------------------------------
	var root = window.location.origin + '/wistra-sig/';

	// ------------------------------------------------------------------------------------------

	$('#feedback').delay(2000).fadeOut('slow');

	// ------------------------------------------------------------------------------------------

	$('.lokasi-hapus').click(function () {
		var id = $(this).val();
		var html = '' +
			'<a href="'+root+'lokasi/hapus/'+id+'" class="btn btn-danger btn-bg-gradient-x-red-pink">Hapus</a>';
		$('#hapuslokasi').html(html);
	});

});