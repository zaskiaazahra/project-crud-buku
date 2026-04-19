<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<div class="container">

    <h2>📚 Data Buku</h2>

    <a href="/buku/create" class="btn tambah">+ Tambah Buku</a>

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @foreach($data as $d)
            <tr>
                <td>{{ $d->judul }}</td>
                <td>{{ $d->penulis }}</td>
                <td>{{ $d->tahun }}</td>
                <td>
                    <a href="/buku/{{ $d->id }}/edit" class="btn edit">Edit</a>

                    <form action="/buku/{{ $d->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn hapus">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>