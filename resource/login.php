<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../css/loginregis.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="auth_login.php" method="post" class="sign-in-form">

                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger text-center'>Maaf Username atau Password salah</div>";
                        }
                    }
                    ?>

                    <?php
                    if (isset($_GET['success']) && $_GET['success'] == 1) {
                    ?>
                        <script>
                            alert('Registrasi Berhasil!');
                        </script>
                    <?php
                    } ?>
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Back to Homepage</p>
                    <div class="social-media">
                        <a href="../homepage/index.php" class="social-icon">
                            <i class="fa-solid fa-house"></i>
                        </a>
                        
                    </div>
                </form>


                <form action="auth_register.php" method="post" class="sign-up-form">
                <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "data") {
                            echo "<div class='alert alert-danger text-center'>Harap isi data register !</div>";
                        }
                    }
                    ?>

                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <p class="social-text">Or Back to Homepage</p>
                    <div class="social-media">
                        <a href="../homepage/index.php" class="social-icon">
                            <i class="fa-solid fa-house"></i>
                        </a>
                        
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="../images/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="../images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
</body>

</html>