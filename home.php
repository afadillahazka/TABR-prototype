<?php
include "session.php";
include "koneksi.php";
?>

<html class="html">
<header>
    <section class="navigation_bar">
        <img src="LOGO TABR-01.png">
        <ul><a href="">Beranda</a></ul>
        <ul><a href="">Tentang</a></ul>
        <ul><a href="">Tim Editorial</a></ul>
        <ul><a href="unggahpaper.php">Unggah Paper</a></ul>
        <ul><a href="cekstatus.html">Cek Status</a></ul>
        <ul><a href="signout.php">Keluar</a></ul>
    </section>
</header>
<main>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="/FORM SIGN IN & SIGN UP/style.css">

<p>Hai<p>
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