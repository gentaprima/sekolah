function add_class(base_url) {
	document.getElementById("modal_title").innerHTML = "Form Tambah Kelas";
	document.getElementById("id_kelas").value = "";
	document.getElementById("nama_kelas").value = "";
	document.getElementById("button").innerHTML = "Tambah Data";
	document.getElementById("form").action = base_url;
}
function edit_class(base_url,id,nama_kelas) {
	document.getElementById("modal_title").innerHTML = "Form Update Kelas";
	document.getElementById("id_kelas").value = id;
	document.getElementById("nama_kelas").value = nama_kelas;
	document.getElementById("button").innerHTML = "Update Data";
	document.getElementById("form").action = base_url;
}
function delete_class(base_url) {
	document.getElementById("buttondelete").href = base_url;
}
