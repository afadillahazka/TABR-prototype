<?php
session_start();
include "koneksi.php";
?>

<html class="html">
<header>
    <section class="navigation_bar">
        <img src="LOGO TABR-01.png">
        <ul><a href="">Beranda</a></ul>
        <ul><a href="">Tentang</a></ul>
        <ul><a href="">Tim Editorial</a></ul>
        <ul><a href="signin.php">Masuk/Daftar</a></ul>
        <ul><a href="cekstatus.php">Cek Status</a></ul>
    </section>
</header>
<main>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="style.css">

    <form method="post" autocomplete="off">

        <div class="container">
            <h1>masuk</h1>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Masukkan Surel" name="email" required>

            <label for="password"><b>Kata Sandi</b></label>
            <input type="password" placeholder="Masukkan Kata Sandi" name="password" id="password" required>
            <i class="bi bi-eye-slash" id="togglePassword"></i>

            <div class="clearfix">
                <button type="submit" class="signupbtn" name="proseslog">MASUK</button>
                <p>Belum Memiliki Akun?</p>
                <button type="button" class="signinbtn"><a href=signup.php>DAFTAR</a></button>

            </div>
        </div>
    </form>
</main>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Montserrat", sans-serif;
    }

    .html {
        margin: 0 20% 0 20%;
        background-color: rgb(241, 241, 241);
    }

    /* HEADER */
    header {
        background: linear-gradient(to right, #00008F, #2680FF)
    }

    header h1 {
        text-align: center;
    }

    .navigation_bar {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px;
    }

    .navigation_bar img {
        width: 72;
    }

    .navigation_bar a {
        text-decoration: none;
        color: white;
        font-size: 2vh;
    }

    .navigation_bar a:hover {
        font-weight: bold;
    }

    /* MAIN */
    main {
        background-color: white;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    @media screen and (max-width:481px) {
        * {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .html {
            margin: 0;
            padding: 0;
        }

    }
</style>

<?php
if (isset($_POST['proseslog'])) {
    $sql = mysqli_query($koneksi, "select * from user where email='$_POST[email]' and password='$_POST[password]'");

    $check = mysqli_num_rows($sql);
    if ($check > 0) {
        $_SESSION['email'] = $_POST['email'];
        
        echo "<script>alert('Berhasil masuk!')</script>";
        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    } else {
        echo "<p align=center><b> Email dan/atau Password salah!<b><p>";
        echo "<meta http-equiv=refresh content=2;URL='signin.php'>";
    }
}
?>