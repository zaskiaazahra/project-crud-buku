<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>

    <style>
        body {
            font-family: Arial;
            background: #eef2f7;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .tambah {
            background: #3498db;
        }

        .edit {
            background: #2ecc71;
        }

        .hapus {
            background: #e74c3c;
        }

        .btn:hover {
            opacity: 0.8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
        }

        table thead {
            background: #2c3e50;
            color: white;
        }

        table tbody tr:nth-child(even) {
            background: #f2f2f2;
        }

        table tbody tr:hover {
            background: #ddd;
        }

        form {
            display: inline;
        }
    </style>
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