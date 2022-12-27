<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h3>Tambah Mahasiswa</h3>
    <form action="/mahasiswa/store" method="POST">
        @csrf
        <label for="npm">NPM</label>
        <br />
        <input type="text" id="npm" name="npm" />
        <br />
        <label for="nama">Nama Lengkap</label>
        <br />
        <input type="text" id="nama" name="nama" />
        <br />
        <label for="prodi">Program Studi</label>
        <br />
        <input type="text" id="prodi" name="prodi" />
        <br />
        <br />
        <input type="submit" value="Simpan">
    </form>
</body>
</html>