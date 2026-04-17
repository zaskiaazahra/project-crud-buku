<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>

<h2>Edit Buku</h2>

<form action="/buku/{{ $data->id }}" method="POST">
@csrf
@method('PUT')

<input name="judul" value="{{ $data->judul }}"><br><br>
<input name="penulis" value="{{ $data->penulis }}"><br><br>
<input name="tahun" value="{{ $data->tahun }}"><br><br>

<button>Update</button>
</form>

</body>
</html>