
<!DOCTYPE html>
<html>
<head>
    <!-- Head content -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar gagasan</title>
    <link rel="stylesheet" href="{{ asset('style/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <!-- Tabel untuk menampilkan data keluhan -->
    <div class="tabel-wrapper">
        <div class="tabel-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($gagasan as $g)
                        <tr>
                            <td>{{ $g->id }}</td>
                            <td>{{ $g->narasi_gagasan }}</td>
                            <td>
                                <a href="/removegagasan/{{$g->id_gagasan}}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Remove</a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan='3'>Tidak ada data gagasan</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>