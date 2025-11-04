<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>selamat datang</h2>
            <P>ini contoh pragraf HTML.</P>
        </section>

        <?php
        $NIM = "2511500061";
        $NAMA = "MUHAMMAD AZKA NAZHAN";
        $TEMPAT_LAHIR = "MUNTOK BANGKA BARAT";
        $TANGGAL_LAHIR = "14-APRIL-2007";
        $HOBI = "BERMAIN GAME DAN BERMAIN FUTSAL";
        $PASANGAN = "NASYWAERSA";
        $PEKERJAAN = "MAHASISWA";
        $NAMA_ORANG_TUA = "BAPAK TOTO DAN IBU MAEMUNAH";
        $NAMA_KAKAK_PERTAMA = "FACHRURROZI AKBAR";
        $NAMA_KAKAK_KEDUA = "SYAFA TASYA FEBRINA";
        ?>

        <section id="about">
            <h2>About Muhammad azka Nazhan</h2>
            <p><strong>NIM:</strong> <?php echo $NIM; ?></p>
            <p><strong>NAMA:</strong> <?php echo $NAMA; ?></p>
            <p><strong>TEMPAT LAHIR:</strong> <?php echo $TEMPAT_LAHIR; ?></p>
            <p><strong>TANGGAL LAHIR:</strong> <?php echo $TANGGAL_LAHIR; ?></p>
            <p><strong>HOBI:</strong> <?php echo $HOBI; ?></p>
            <p><strong>PASANGAN:</strong> <?php echo $PASANGAN; ?></p>
            <p><strong>PEKERJAAN:</strong> <?php echo $PEKERJAAN; ?></p>
            <p><strong>NAMA ORANG TUA:</strong> <?php echo $NAMA_ORANG_TUA; ?></p>
            <p><strong>NAMA KAKAK PERTAMA:</strong> <?php echo $NAMA_KAKAK_PERTAMA; ?></p>
            <p><strong>NAMA KAKAK KEDUA:</strong> <?php echo $NAMA_KAKAK_KEDUA: ?></p>


    </section>
    <section id="contact">
            <h2>kontak kami</h2>
      <form action="" method="GET">
        <div class="form-row">
          <label for="txtNama">Nama:</label>
          <input type="text" id="txtNama" name="txtnama" placeholder="Masukan Nama" required autocomplete="name">
        </div>

        <div class="form-row">
          <label for="txtemail">Email:</label>
          <input type="email" id="txtemail" name="txtemail" placeholder="Masukan email" required autocomplete="email">
        </div>

        <label for="txtPesan">Pesan Anda:</label>
        <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
        <small id="charCount">0/200 karakter</small>
        </label>

        <div class="form-row">
          <button type="submit">Kirim</button>
          <button type="reset">Batal</button>
        </div>
        
      </form>
        </section>

    </main>
    <footer>
        <p>&copy; 2025 Muhammad Azka Nazhan [2511500062]</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>