<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Peminjaman Buku</title>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }
        .table-data th,
        .table-data td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px;
        }
        .table-data th {
            background-color: grey;
        }
        h3 {
            font-family: Verdana;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>LAPORAN DATA PEMINJAMAN BUKU</h3>
    <br/>

    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pengembalian</th>
                <th>Total Denda</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($laporan as $l) {
            ?>
            <tr>
                <td scope="row"><?= $no++; ?></td>
                <td><?= $l['nama']; ?></td>
                <td><?= $l['judul_buku']; ?></td>
                <td><?= $l['tgl_pinjam']; ?></td>
                <td><?= $l['tgl_kembali']; ?></td>
                <td><?= $l['tgl_pengembalian']; ?></td>
                <td><?= $l['total_denda']; ?></td>
                <td><?= $l['status']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
