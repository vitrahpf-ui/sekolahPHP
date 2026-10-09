<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM siswa");


$data_siswa = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data_siswa[] = $row;
}
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

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data_siswa)): ?>
                <?php $no = 1; ?>
                <?php foreach ($data_siswa as $siswa): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($siswa['nis']); ?></td>
                        <td><?= htmlspecialchars($siswa['nama']); ?></td>
                        <td><?= htmlspecialchars($siswa['kelas']); ?></td>
                        <td><?= htmlspecialchars($siswa['jurusan']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Tidak ada data siswa.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>