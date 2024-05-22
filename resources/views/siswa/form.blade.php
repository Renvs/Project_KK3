<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM SISWA</h1>
    <form action="{{ url('siswa') }}" method="POST">
        @csrf

        NIS             : <input type="text" name="nis"> <br>
        Nama Lengkap    : <input type="text" name="nama_lengkap"> <br>
        Jenis Kelamin   : <br>
        <Label for="L"><input type="radio" name="jk" id="L" value="L">Laki-Laki</Label><br>
        <Label for="P"><input type="radio" name="jk" id="P" value="P">Perempuan</Label><br>
        Golongan Darah :
        <select name="golongan_darah">
            <option value="">Pilih Golongan Darah</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>
        <input type="submit" value="simpan">
    </form>
</body>
</html>