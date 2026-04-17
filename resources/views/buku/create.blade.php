<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku</h2>

<form action="/buku" method="POST">
@csrf
<input name="judul" placeholder="Judul"><br><br>
<input name="penulis" placeholder="Penulis"><br><br>
<input name="tahun" placeholder="Tahun"><br><br>

<button>Simpan</button>
</form>

</body>
</html>