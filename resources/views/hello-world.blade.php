<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 2</title>
</head>
<body>
    <h1>Hello World 2</h1>
    <p>Halo {{ $nama }}, Jenis Kelamin anda {{ $jk }} </p>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td>{{ $nama }}</td>
            <td>{{ $jk }}</td>
        </tr>
    </table>
</body>
</html>