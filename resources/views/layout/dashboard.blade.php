<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('style/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="bx bxs-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="gagasan">
                    <i class="bx bxs-objects-vertical-bottom"></i>
                    <span>Jonegoro Jengker</span>
                </a>
            </li>
            <li>
                <a href="input">
                    <i class="bx bx-notepad"></i>
                    <span>Input Data</span>
                </a>
            </li>
            <li>
                <a href="petisi">
                    <i class="bx bxs-message-dots"></i>
                    <span>Petisi</span>
                </a>
            </li>
            <li>
                <a href="admin">
                    <i class="bx bxs-message-dots"></i>
                    <span>Admin</span>
                </a>
            </li>
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
                <span>{{ Auth::user()->username }}</span>
                <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="search">
                    <i class="bx bx-search-alt"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
    </div>
    <script>
        function logout() {
            document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            window.location.href = "{{ url('login') }}";
        }
    </script>
</body>
</html>