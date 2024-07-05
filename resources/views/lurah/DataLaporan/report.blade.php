<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kegiatan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Detail Kegiatan</h1>
    <table>
        <tr>
            <th>Tanggal</th>
            <td>{{ $kegiatan->tanggal }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $kegiatan->nama }}</td>
        </tr>
        <tr>
            <th>Agenda Kegiatan</th>
            <td>{{ $kegiatan->acara }}</td>
        </tr>
        <tr>
            <th>Lokasi</th>
            <td>{{ $kegiatan->lokasi }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $kegiatan->deskripsi }}</td>
        </tr>
    </table>
</body>
</html>
