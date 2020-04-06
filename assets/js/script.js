const flashData = $(".flash-data").data("flashdata");
const flashData1 = $(".flash-data1").data("flashdata");

if (flashData) {
	Swal.fire("Sukses", "Data Berhasil " + flashData, "success");
}

if (flashData1) {
	Swal.fire("Sukses", "Akun " + flashData, "success");
}

$(".hapus").on("click", function (e) {
	// matikan hrefnya untuk sementara
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Data akan dihapus secara permanen",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, hapus data!",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
