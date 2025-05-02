<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Shopee</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- CDN for SweetAlert -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #FF5722; /* Latar belakang oranye */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white;
            width: 350px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }
        .login-container input:focus {
            border-color: #FF5722;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #FF5722;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #e64a19;
        }
        .signup {
            text-align: center;
            margin-top: 20px;
        }
        .signup a {
            color: #1e88e5;
            text-decoration: none;
        }
        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>REGISTER</h2>

        <form action="/store-register" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="nama anda" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="number" name="hp" placeholder="nomer hp" required>
            <button type="submit">REGISTER</button>
        </form>

        <!-- Display SweetAlert on success -->
        @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}"
            });
        </script>
        @endif

        <div class="signup">
            <p>Baru di Tokoonline? <a href="/login">login</a></p>
        </div>
    </div>

</body>
</html>
