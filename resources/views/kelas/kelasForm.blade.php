<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @session('Gagal')
        <div class="alert alert-error">
            {{ session('Gagal') }}
        </div>
    @endsession

    @if ($errors -> any())
        <div class="alert alert-danger">
            <h5>Alert !!</h5>
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>    
    @endif

    <h1>TAMBAH KELAS</h1>
    <form action="{{ url('kelas', @$kelas->id) }}" method="POST">
        @csrf

        @if (!empty(@$kelas))
            @method('PATCH')
        @endif
        
        <p><label for="kelas">Nama Kelas</label>
        <input type="text" name="nama_kelas" id="kelas" placeholder="Nama Kelas" value="{{ old('nama_kelas', @$kelas->nama_kelas) }}"></p>
        <p><label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ old('jurusan', @$kelas->jurusan) }}"></p>
        <p><label for="lok_kelas">Lokasi Kelas</label>
        <input type="text" name="lokasi_ruangan" id="lok_kelas" placeholder="Lokasi" value="{{ old('lokasi_ruangan', @$kelas->lokasi_ruangan) }}"></p>
        <p><label for="walkel">Nama Wali Kelas</label>
        <input type="text" name="nama_wali_kelas" id="walkel" placeholder="Nama Wali Kelas" value="{{ old('nama_wali_kelas', @$kelas->nama_wali_kelas) }}"></p>
        
        <input type="submit" value="simpan">
    </form>
</body>
</html>
