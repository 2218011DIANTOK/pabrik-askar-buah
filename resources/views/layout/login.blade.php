<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('style/login.css') }}" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <form action="{{ route('login.actionlogin') }}" method="post">
        @csrf
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" id="usern" name="username" autocomplete="off"/>
          <i class="bx bx-user-circle"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" id="passw" name="password" autocomplete="off"/>
          <i class="bx bx-lock-alt"></i>
</div>
        
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>Don't have an account? <a href="{{ url('register') }}">Register</a></p>
        </div>
      </form>
    </div>

    <script>
        var forgotPasswordLink = document.getElementById("forgotPasswordLink");
        forgotPasswordLink.addEventListener("click", function(event) {
        event.preventDefault(); 
        var email = prompt("Silakan masukkan alamat email Anda untuk mereset password :");

        if (email) {
          alert("Sebuah email telah dikirim ke " + email + " dengan petunjuk untuk mereset password Anda.");
        } else {
          alert("Silakan masukkan alamat email Anda.");
        }
      });
</script>

<script>
  document.getElementById('usern').addEventListener('s ubmit', function(event) {
    event.preventDefault(); // Menghentikan form dari pengiriman
  
    // Mengambil nilai dari inputan
    var username = document.getElementById('usern').value;
    var password = document.getElementById('passw').value;
  
    // Menyimpan nilai ke Local Storage
    localStorage.setItem('username', username);
    localStorage.setItem('password', password);
  
    alert('Data login berhasil disimpan.');
  });
  </script>

  </body>
</html>