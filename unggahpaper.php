<html class="html">
<header>
    <section class="navigation_bar">
        <img src="LOGO TABR-01.png">
        <ul><a href="">Beranda</a></ul>
        <ul><a href="">Tentang</a></ul>
        <ul><a href="">Tim Editorial</a></ul>
        <ul><a href="unggahpaper.php">Unggah Paper</a></ul>
        <ul><a href="cekstatus.php">Cek Status</a></ul>
        <ul><a href="signout.php">Keluar</a></ul>
    </section>
</header>
<main>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="submissionstyle.css">

    <form action="" method="post" autocomplete="off">
    <div class="container">
        <h1>Unggah Paper</h1>
        <hr>

        <label for="judul"><b>Judul</b></label>
        <input type="text" placeholder="Judul" name="judul" required>

        <label for="abstrak"><b>Abstrak</b></label>
        <textarea class="abstract" type="text" placeholder="Abstrak" name="Abstrak" required></textarea>

        <label for="abstrak"><b>File Abstrak</b></label>
        <div class="abstrak_note">
            <p>File diunggah dalam format PDF</p>
            <p>Maks. 5 MB</p>
        </div>
        <input type="file" placeholder="Unggah File" name="fileAbstrak" id="fileAbstrak">

        <label for="penulis1"><b>Penulis 1</b></label>
        <input type="text" placeholder="Nama Lengkat Penulis 1 (Tanpa Gelar)" name="penulis1" required>

        <label for="penulis2"><b>Penulis 2</b></label>
        <input type="text" placeholder="Nama Lengkap Penulis 2 (Tanpa Gelar)" name="penulis2" required>

        <label for="asal_instansi"><b>Asal Instansi</b></label><br>
        <div class="asal_instansi_note">
            <p>Format: Program Studi/Jurusan, Fakultas, Universitas, Kota, Negara</p>
            <p>Contoh: Akuntansi, Ekonomi Bisnis dan Humaniora, Jakarta Selatan, Indonesia</p>
        </div>
        <input type="text" placeholder="Asal Instansi" name="asal_instansi" required>


        <div class="clearfix">
            <button type="submit" class="uploadbtn">UNGGAH</button>
        </div>

    </div>
</form>

</html>
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