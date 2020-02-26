const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Ok Terima Kasih',
		text: 'data Berhasil' + flashData,
		type: 'success'
	})
}