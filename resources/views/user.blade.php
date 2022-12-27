<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
</head>
<body>
    <h3>Daftar Pengguna</h3>
    <a href="/mahasiswa/create">Tambah Data</a>
    <table border="1">
        <thead>
            <th>Nama Pengguna</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach($user as $usr)
                <tr>
                    <td>{{ $usr->username }}</td>
                    <td>{{ $usr->password }}</td>
                    <td>{{ $usr->name }}</td>
                    <td>{{ $usr->status }}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $mhs->id }}">Edit</a> | <a href="/mahasiswa/hapus/{{ $mhs->id }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>