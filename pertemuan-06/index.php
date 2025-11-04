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
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <p>Ini contoh paragraf HTML.</p>
      <?php 
      echo "<p>Halo Dunia</p>";
      echo "<p>Nama Saya Muhammad Azka Nazhan</P>";
      ?>
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
      <h2>About Muhammad Azka Nazhan</h2>
      <p><strong>NIM:</strong> <?php echo $NIM; ?></p>
      <p><strong>NAMA:</strong> <?php echo $NAMA; ?></p>
      <p><strong>TEMPAT LAHIR:</strong> <?php echo $TEMPAT_LAHIR; ?></p>
      <p><strong>TANGGAL LAHIR:</strong> <?php echo $TANGGAL_LAHIR; ?></p>
      <p><strong>HOBI:</strong> <?php echo $HOBI; ?></p>
      <p><strong>PASANGAN:</strong> <?php echo $PASANGAN; ?></p>
      <p><strong>PEKERJAAN:</strong> <?php echo $PEKERJAAN; ?></p>
      <p><strong>NAMA ORANG TUA:</strong> <?php echo $NAMA_ORANG_TUA; ?></p>
      <p><strong>NAMA KAKAK PERTAMA:</strong> <?php echo $NAMA_KAKAK_PERTAMA; ?></p>
      <!-- 🔧 Perbaikan di bawah ini: titik dua (:) salah, diganti jadi titik koma (;) -->
      <p><strong>NAMA KAKAK KEDUA:</strong> <?php echo $NAMA_KAKAK_KEDUA; ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="" method="GET">
        <div class="form-row">
          <label for="txtNama">Nama:</label>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukan Nama" required autocomplete="name">
        </div>

        <div class="form-row">
          <label for="txtemail">Email:</label>
          <input type="email" id="txtemail" name="txtemail" placeholder="Masukan Email" required autocomplete="email">
        </div>

        <div class="form-row">
          <label for="txtPesan">Pesan Anda:</label>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." maxlength="200" required></textarea>
          <small id="charCount">0/200 karakter</small>
        </div>

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
