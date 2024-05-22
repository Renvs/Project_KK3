<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 24 | Lukman</title>
</head>
    <style>

    </style>
<body>
    <h2>Studi Kasus 3</h2>
    <h4>Default</h4>
    <p><a href="{{ url('/kelas/create') }}">Tambah Data</a></p>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Lokasi</th>
        </tr>
        @foreach ($kelas as $row)
        <tr>
            <td>{{ isset($i) ? ++$i : $i = 1}}</td>
            <td>{{ $row->nama_kelas }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->lokasi_ruangan }}</td>
        </tr>
        @endforeach
    </table>

    <h4><br>Ascending</h4>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Lokasi</th>
        </tr>
        @foreach ($kelasLok as $row)
        <tr>
            <td>{{ isset($i) ? ++$i : $i = 1}}</td>
            <td>{{ $row->nama_kelas }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->lokasi_ruangan }}</td>
        </tr>
        @endforeach
    </table>

    <h4><br>Teacher With A First Letter Name</h4>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Lokasi</th>
            <th>Wali Kelas</th>
        </tr>
        @foreach ($kelasWali as $row)
        <tr>
            <td>{{ isset($i) ? ++$i : $i = 1}}</td>
            <td>{{ $row->nama_kelas }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->lokasi_ruangan }}</td>
            <td>{{ $row->nama_wali_kelas }}</td>
        </tr>
        @endforeach
    </table>

    <h4><br>Order By Major</h4>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Lokasi</th>
        </tr>
        @foreach ($kelasJurKel as $row)
        <tr>
            <td>{{ isset($i) ? ++$i : $i = 1}}</td>
            <td>{{ $row->nama_kelas }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->lokasi_ruangan }}</td>
        </tr>
        @endforeach
    </table>

    <h4><br>Order By Rekayasa Perangkat Lunak</h4>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Lokasi</th>
        </tr>
        @foreach ($kelasJur as $row)
        <tr>
            <td>{{ isset($i) ? ++$i : $i = 1}}</td>
            <td>{{ $row->nama_kelas }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->lokasi_ruangan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>