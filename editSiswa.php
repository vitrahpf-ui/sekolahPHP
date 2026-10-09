<!-- awoaokawoak maaf miss masih jelek gada cssnya, udah ngantuk euyy-->
<?php 

include_once('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($db, "SELECT * FROM siswa WHERE id = '$id'");
$buku = mysqli_fetch_assoc($query);

if (isset($_POST['simpan'])) {
    $nama        = $_POST['nama'];
    $nis      = $_POST['nis'];
    $kelas     = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    
    
    $query = mysqli_query($db, "UPDATE siswa SET nama= '$nama', nis = '$nis', kelas = '$kelas', jurusan = '$jurusan' WHERE id = '$id'");
    
    if ($query) {
        header('Location: index.php');
        exit();
    } else {
        echo 'Gagal menyimpan perubahan';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Buku</title>
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
        <h2>Edit Buku</h2>
        <form action="" method="post" id="formTambahBuku" autocomplete="off">
            <label for="nama">nama Buku</label>
            <input type="text" id="nama" name="nama" value="<?php echo $buku['nama'] ?>">

            <label for="nis">nis</label>
            <input type="text" id="nis" name="nis" value="<?php echo $buku['nis'] ?>">

            <label for="kelas">kelas</label>
            <input type="text" id="kelas" name="kelas" value="<?php echo $buku['kelas'] ?>">

            <label for="jurusan">jurusan</label>
            <input type="text" id="jurusan" name="jurusan" value="<?php echo $buku['jurusan'] ?>">
           


            <div class="form-actions">
                <button type="submit" name="simpan" class="btn">Simpan</button>
                <a href="index.php"></i> Kembali</a>
            </div>
        </form>
    </div>

</body>

</html>
