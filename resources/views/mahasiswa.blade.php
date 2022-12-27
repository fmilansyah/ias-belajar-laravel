<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>
    <a href="/mahasiswa/create">Tambah Data</a>
    <table border="1">
        <thead>
            <th>NPM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->npm }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $mhs->id }}">Edit</a> | <a href="/mahasiswa/hapus/{{ $mhs->id }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>