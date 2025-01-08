<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TanikuMaju</title>
    <!-- Website Icon -->
    <link rel="Website Icon"type="png" href="asset/logotani.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- ICon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- FOnt -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 ">
            <div class="col-12 text-start mb-3">
                <img src="asset/logohijau.png" alt="logo" class="logo ps-5 mt-5">
            </div>
            <div class="col-md-4 ps-5 pt-5 kiri">
                <div class="form-login">
                    <h2 class=" mb-4 fw-bold text-start mt-5">Login</h2>
                <p style="color: #203B1F; font-weight: 400; font-size: 14px;" class="mb-4">Masuk untuk terus memantau lahan pertanian Anda. Dapatkan akses ke fitur dan layanan yang disesuaikan dengan kebutuhan Anda.</p>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username Anda">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe" style="color: #203B1F; font-size: 14px;">Ingat saya?</label>
                        </div>
                        <div>
                            <a href="#" class="text-decoration-none" style="color: #203B1F; font-size: 14px;">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <p class="fw-bold" style="color: red; font-size: 14px;">
                            Username atau password yang Anda masukkan salah. Silakan coba lagi.
                        </p>
                    </div>
                    <a href="homepage.html" class="btn btn-success w-100 mt-2 fw-bold"> Login</a>
                </form>
                <p class="text-center mt-3 mb-5">© 2024, TanikuMaju.</p>
                </div>
                <br><br><br>
            </div>
            <div class="col-md-8 d-none d-md-flex align-items-center justify-content-center">
                <img src="asset/login.png" alt="Farmers" class="petani zoom">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
