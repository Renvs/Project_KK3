<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAMBAH KELAS</h1>
    <form action="{{ url('kelas') }}" method="POST">
        @csrf
        
        <label for="kelas">Nama Kelas</label>
        <input type="text" id="kelas" placeholder="Nama Kelas">
        <label for="jurusan">Jurusan</label>
        <input type="text" id="jurusan" placeholder="Jurusan">
        <label for="lok_kelas">Lokasi Kelas</label>
        <input type="text" id="lok_kelas" placeholder="Lokasi">
    
        <input type="submit" value="simpan">
    </form>
</body>
</html>