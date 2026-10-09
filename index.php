<?php

include_once "koneksi.php";
// include once buat manggil file koneksi.php biar bisa konek ke database

$query = mysqli_query($db, "SELECT * FROM siswa");
$nomor = 1;

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: lightcoral;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

    <h2>Daftar Siswa Sekolah</h2>
     <a href="tambahSiswa.php" class="add-btn"><i class="fa fa-plus"></i> Tambah siswa</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="siswaTableBody">
            <?php foreach ($query as $siswa) { ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $siswa['nis'] ?></td>
                <td><?php echo $siswa['nama'] ?></td>
                <td><?php echo $siswa['kelas'] ?></td>
                <td><?php echo $siswa['jurusan'] ?></td>
                <td>
                      <a href="editSiswa.php?id=<?php echo $siswa['id'] ?>" class="action-btn edit" >
                           edit
                        </a>    
                         <a href="hapusSiswa.php?id=<?php echo $siswa['id'] ?>" class="action-btn delete" >
                            hapus
                        </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>