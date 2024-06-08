<!DOCTYPE html>
<html>
<head>
    <!-- Head content -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="{{ asset('style/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li><a href="admin"><i class="bx bxs-dashboard"></i><span>Dashboard</span></a></li>
        <li><a href="gagasan"><i class="bx bxs-objects-vertical-bottom"></i><span>Jonegoro Jengker</span></a></li>
        <li class="active"><a href="input"><i class="bx bx-notepad"></i><span>Input Data</span></a></li>
        <li><a href="petisi"><i class="bx bxs-message-dots"></i><span>Petisi</span></a></li>
        <li class="logout">
        <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ route('actionlogout') }}"
   onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a>
        </li>
    </ul>
</div>
<div class="main-content">
    <div class="header-wrapper">
        <div class="header-title">
            <span>Edit Data</span>
            <span>Dashboard</span>
        </div>
        <div class="user-info">
            <div class="search">
                <i class="bx bx-search-alt"></i>
                <input type="text" placeholder="Search">
            </div>
            <img src="{{ asset('../image/government64px.png') }}" alt="">
        </div>
    </div>
    <div class="tabel-wrapper">
        <h3 class="main-title">Edit Data</h3>
        <div class="form-wrapper">
            <!-- Form untuk pengeditan data -->
            <form action="/updatedata/{{$gagasan->id_gagasan}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul_gagasan">Judul Gagasan</label>
                    <input type="text" id="judul_gagasan" name="judul_gagasan" value="{{ $row->judul_gagasan }}">
                </div>
                <div class="form-group">
                    <label for="narasi_gagasan">Narasi Gagasan</label>
                    <textarea id="narasi_gagasan" name="narasi_gagasan" rows="4">{{ $row->narasi_gagasan }}</textarea>
                </div>

                <button type="submit" class="edit-button">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>