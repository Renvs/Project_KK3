<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 1</title>
</head>
<body>
    <h1>Hello World 1</h1>
    <p>Tulisan ini ditampilkan dari Views</p><br><br>

    @session('Success')
        <div class="alert alert-Success">
            {{ session('Success') }}
        </div>
    @endsession

    @session('Error')
        <div class="alert alert-Rrror">
            {{ session('Error') }}
        </div>
    @endsession

    <a href="{{ url('/siswa/create') }}">Tambah Data</a>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Golongan Darah</th>
        </tr>
        @foreach ($siswa as $row)
        <tr>
            <td>{{ isset($i) ? ++$i : $i = 1}}</td>
            <td>{{ $row->nama_lengkap }}</td>
            <td>{{ $row->jk }}</td>
            <td>{{ $row->golongan_darah }}</td>
        </tr>
        @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>