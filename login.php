<?php
if (isset($_GET['message'])) {
    if ($_GET['message'] == "daftar") {
        $mdaftar = "Berhasil Membuat Akun. Silahkan Login";
    } else if ($_GET['message'] == "failed") {
        $mgagal = "Login Gagal. Email atau Password Salah";
    } else if ($_GET['message'] == "logout") {
        $mlogout = "Anda telah berhasil logout";
    } else if ($_GET['message'] = "belum_login") {
        $mbelumlogin = "Silahkan login terlebih dahulu";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="src/daftar.css">
    <title>Ngegame - Daftar Akun</title>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-5" style="width: 35%; box-shadow: 9px 10px 10px 4px #000;">
            <div class="text-center" id="head-card" style="font-family: 'Poppins', sans-serif;">
                <a href="index.php"><img src="assets/back.png" alt="back"></a>
                <h1>Login</h1>
                <hr>
            </div>
            <div class="text-center">
                <p class="text-danger"><?php
                                        if (isset($_GET['message'])) {
                                            if ($_GET['message'] == "daftar") {
                                                echo $mdaftar . '!';
                                            } else if ($_GET['message'] == "failed") {
                                                echo $mgagal . '!';
                                            } else if ($_GET['message'] == "logout") {
                                                echo $mlogout . '!';
                                            } else if ($_GET['message'] = "belum_login") {
                                                echo $mbelumlogin . '!';
                                            }
                                        }
                                        ?></p>
            </div>

            <form action="session.php" method="POST">
                <label for="email" class="form-label">Alamat Email</label>
                <div class="input-group input-group-lg mb-3">
                    <input id="email" type="text" class="form-control bg-opacity-10 fs-6" placeholder="contohemail@gmail.com" aria-label="Username" aria-describedby="addon-wrapping" name="email" required>
                    <span class="input-group-text" id="addon-wrapping"><img src="assets/email.png" alt="username" width="20px" style="color: white;"></span>
                </div>
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-lg mb-3">
                    <input id="password" type="password" class="form-control bg-opacity-10 fs-6" aria-label="password" aria-describedby="addon-wrapping" name="password" required>
                    <span class="input-group-text" id="addon-wrapping"><img src="assets/key.png" alt="password" width="20px" style="color: white; cursor:pointer;" onclick="togglePasswordVisibility('password')"></span>
                </div>
                <p style="opacity: 0.5; display:inline">Belum punya akun?</p>
                <a href="daftar.php">Daftar</a>
                <button type=" submit" class="btn btn-danger container-fluid fw-bold mt-3" style="font-family: 'Poppins', sans-serif;">Login</button>
            </form>
        </div>
    </div>
    <script>
        const char = "!#$%&\\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[]^_`abcdefghijklmnopqrstuvwxyz{|}~";
        let showed = false;
        let readyclicked = true;
        let value;

        function togglePasswordVisibility(passwordFieldId) {
            if (readyclicked) {
                const pass = document.getElementById(passwordFieldId);
                const button = document.querySelector('#addon-wrapping img');

                if (!showed) {
                    value = pass.value;
                    pass.value = pass.value.split("").map(() => "•").join("");
                    setTimeout(() => {
                        pass.type = "text";
                    }, 1);
                    for (let i = 0; i < value.length * 2 + 20; i++) {
                        setTimeout(() => {
                            pass.value = pass.value.split("").map((letter, index) => {
                                if (index <= (i - 20) / 2) return value[index];
                                else if (index <= i / 2) return char[Math.floor(Math.random() * 93)];
                                else return "•";
                            }).join("");
                        }, 25 * i);
                    }
                    pass.value = value
                    setTimeout(() => {
                        readyclicked = true
                    }, 25 * (value.length * 2 + 20) + 2)
                } else {
                    value = pass.value;
                    for (let i = 0; i < value.length * 2 + 20; i++) {
                        setTimeout(() => {
                            pass.value = pass.value.split("").map((letter, index) => {
                                if (index <= (i - 20) / 2) return "•";
                                else if (index <= i / 2) return char[Math.floor(Math.random() * 93)];
                                else return value[index];
                            }).join("");
                        }, 25 * i);
                    }
                    setTimeout(() => {
                        pass.type = "password";
                        pass.value = value;
                        readyclicked = true;
                    }, (value.length * 2 + 20) * 25 + 1);
                    setTimeout(() => {
                        readyclicked = true;
                    }, 25 * (value.length * 2 + 20) + 2);
                }

                readyclicked = false;
                showed = !showed;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>