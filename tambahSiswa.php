<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Siswa</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }

        .container {
            background: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 25px;
            font-size: 22px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 6px;
            color: #555;
            font-size: 14px;
            text-transform: capitalize;
        }

        input[type="text"] {
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
            outline: none;
        }

        input[type="text"]:focus {
            border-color: lightcoral;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            background-color: lightcoral;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .btn:hover {
            background-color: #e57373;
            transform: translateY(-2px);
        }

    
        a {
            text-decoration: none;
            margin-top: 15px;
        }
        </style>

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
			<input type="text" id="jurusan" name="jurusan"  required>
			
			

			<div class="form-actions">
				<button type="submit" name="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
				<a href="index.php" class="back-link"><i class="fa fa-arrow-left"></i> Kembali</a>
			</div>
		</form>
	</div>
	
</body>
</html>
