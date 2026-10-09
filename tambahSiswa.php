<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Siswa</title>

</head>
<body>

	<div class="container" style="position:relative;z-index:1;">
		<h2>Tambah Buku</h2>
		<form action="proses-simpan-siswa.php" method="POST" id="formTambahBuku" autocomplete="off">
			<label for="nama">Nama Siswa</label>
			<input type="text" id="nama" name="nama" required>

			<label for="nis">NIS</label>
			<input type="text" id="nis" name="nis" required>

			<label for="kelas">Kelas</label>
			<input type="text" id="kelas" name="kelas" required>

			<label for="jurusan">Jurusan</label>
			<input type="teks" id="jurusan" name="jurusan"  required>
			
			

			<div class="form-actions">
				<button type="submit" name="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
				<a href="index.php" class="back-link"><i class="fa fa-arrow-left"></i> Kembali</a>
			</div>
		</form>
	</div>
	
</body>
</html>
