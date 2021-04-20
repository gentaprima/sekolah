function add_kuota(base_url){
document.getElementById('modal_title').innerHTML = "Form Tambah Kuota";
document.getElementById('button').innerHTML = "Tambah Data";
document.getElementById('nama_kelas').innerHTML = "";
document.getElementById('jumlah_kuota').innerHTML = "";
document.getElementById('form').action = base_url;
}
function edit_kuota(base_url,kelas,jumlah,id){
document.getElementById('modal_title').innerHTML = "Form Update Kuota";
document.getElementById('nama_kelas').value = kelas;
document.getElementById('id_kuota').value = id;
document.getElementById('jumlah_kuota').value = jumlah;
document.getElementById('button').innerHTML = "Update Data";
document.getElementById('form').action = base_url;
}
function delete_kuota(base_url){
document.getElementById('buttondelete').href = base_url;
}