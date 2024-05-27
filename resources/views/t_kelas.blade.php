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
    <h2>KELAS</h2>
    <h4>Default</h4>

    @session('Berhasil')
        <div class="alert alert-succes">
            {{ session('Berhasil') }}
        </div>
    @endsession
    
    @session('Gagal')
        <div class="alert alert-danger">
            {{ session('Gagal') }}
        </div>
    @endsession

    <p><a href="{{ url('/kelas/create') }}">Tambah Data</a></p>
</body>
</html>