<html>
<head>
	<title>Form Gaji</title>
	<script src="jquery-3.4.1.min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			$("#kode_pegawai").change(function(){
			var kode_pegawai=$("#kode_pegawai").val()
				$.ajax({
					type:'GET',
					data:'kode_pegawai='+kode_pegawai,
					url:'json_pegawai.php',
					dataType:'json',
					success:function(data){
						for(var i=0; i < data.length; i++){
							$("#nama").val(data[i].nama)
							$("#tanggal_lahir").val(data[i].tanggal_lahir)
							$("#tempat_lahir").val(data[i].tempat_lahir)
							$("#alamat").val(data[i].alamat)
							$("#no_hp").val(data[i].no_hp)
							$("#kode_jabatan").val(data[i].kode_jabatan)
							$("#nama_jabatan").val(data[i].nama_jabatan)
							$("#gaji_pokok").val(data[i].gaji_pokok)
							$("#tunjangan_jabatan").val(data[i].tunjangan_jabatan)

							
							
						}
					}
				});
			});
		
		});
	</script>
</head>
<body>
	<h2 align="center">Form Gaji</h2>
	<form method="POST" action="#" >
	<table>
	<tr>
		<td>Pilih Barang</td>
		<td>: <select name="kode_pegawai" id="kode_pegawai">
				<option value="">-- Pilih data --</option>
				<?php include"koneksi.php";
				      $tampil=mysqli_query($koneksi,"SELECT * FROM t_pegawai INNER JOIN t_jabatan ON t_pegawai.kode_jabatan=t_jabatan.kode_jabatan");
					  while($data=mysqli_fetch_array($tampil)){
					  ?>
					<option value="<?php echo"$data[kode_pegawai]";?>"><?php echo"$data[nama]";?></option>
					  
					  
					  
					  <?php } ?>
			  </select>
			
		</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>: <input type="date" name="tanggal_lahir" id="tanggal_lahir"/></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>: <input type="text" name="tempat_lahir" id="tempat_lahir"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>: <input type="text" name="alamat" id="alamat"/></td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td>: <input type="number" name="no_hp" id="no_hp"/></td>
	</tr>
	<tr>
		<td>Kode Jabatan</td>
		<td>: <input type="number" name="kode_jabatan" id="kode_jabatan"/></td>
	</tr>
	<tr>
		<td>Nama Jabatan</td>
		<td>: <input type="text" name="nama_jabatan" id="nama_jabatan"/></td>
	</tr>
	<tr>
		<td>Gaji Pokok</td>
		<td>: <input type="number" name="gaji_pokok" id="gaji_pokok"/></td>
	</tr>
	<tr>
		<td>Tunjangan Jabatan</td>
		<td>: <input type="number" name="tunjangan_jabatan" id="tunjangan_jabatan"/></td>
	</tr>

	
	</table>
	</form>
		
</body>
</html>