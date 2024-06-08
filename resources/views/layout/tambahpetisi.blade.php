<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Data</title>
    <link rel="stylesheet" href="{{ asset('style/admin.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li><a href="dashboard"><i class="bx bxs-dashboard"></i><span>Dashboard</span></a></li>
            <li><a href="gagasan"><i class="bx bxs-objects-vertical-bottom"></i><span>Jonegoro Jengker</span></a></li>
            <li class="active"><a href="input"><i class="bx bx-notepad"></i><span>Input Data</span></a></li>
            <li><a href="petisi"><i class="bx bxs-message-dots"></i><span>Petisi</span></a></li>
            <li><a href="admin"><i class="bx bxs-message-dots"></i><span>Admin</span></a></li>
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
                <span>Input Data</span>
                <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="search">
                    <i class="bx bx-search-alt"></i>
                    <input type="text" placeholder="Search" />
                </div>
            </div>
        </div>
        <div class="tabel-wrapper">
            <h3 class="main-title">Input Data</h3>
            <div class="form-wrapper">
                <form action="/insertdata2" method="POST">
                    @csrf
                    <div class="form-group">
                    <select name="id_gagasan">
                                    <option disabled selected>Pilih</option>
                                    @foreach($gagasan as $g)
                                    <option value="{{ $g->id_gagasan }}">{{ $g->judul_gagasan }}</option>
                                    @endforeach
                                </select>
</div>
<div class="form-group">
                        <label for="judul_gagasan">ID Petisi</label>
                        <input type="text" id="id_petisi" name="id_petisi" />
                    </div>
                    <div class="form-group">
                        <label for="judul_gagasan">Judul Gagasan</label>
                        <input type="text" id="judul_gagasan" name="judul_gagasan" />
                    </div>
                    <div class="form-group">
                        <label for="narasi_gagasan">Narasi Gagasan</label>
                        <textarea id="narasi_gagasan" name="narasi_gagasan" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="button-container">
                        <button class="move-button" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>