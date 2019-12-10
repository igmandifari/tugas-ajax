<?php
include "koneksi.php";
$arr=array();
$tampil=mysqli_query($koneksi,"SELECT * FROM t_pegawai INNER JOIN t_jabatan ON t_pegawai.kode_jabatan=t_jabatan.kode_jabatan WHERE kode_pegawai='$_GET[kode_pegawai]'");
while($data=mysqli_fetch_array($tampil)){
	$temp = array(
	"kode_pegawai" => $data["kode_pegawai"],
	"nama" => $data["nama"],
	"tanggal_lahir" => $data["tanggal_lahir"],
	"tempat_lahir" => $data["tempat_lahir"],
	"alamat" => $data["alamat"], 
	"no_hp" => $data["no_hp"],
	"kode_jabatan" => $data["kode_jabatan"],
	"nama_jabatan" => $data["nama_jabatan"],
	"gaji_pokok" => $data["gaji_pokok"],
	"tunjangan_jabatan" => $data["tunjangan_jabatan"]);
	
	array_push($arr, $temp);
}

$data= json_encode($arr);
echo"$data";
?>