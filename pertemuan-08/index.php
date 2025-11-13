<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

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
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="Entry Data Mahasiswa">
      <h2>Entry Data Mahasiswa</h2>
      <form id="Entry Data Mahasiswa" action="index.php" method="INDEX">
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
    </section>

      <from action="proses.php" method="POST">

       <label for="txtNIM"><span>NIM:</span>
          <input type="text" id="txtNIM" name="txtNIM" placeholder="Masukkan NIM" required autocomplete="NIM">
        </label>

        <label for="txtNAMA"><span>NAMA:</span>
          <input type="NAMA" id="txtNAMA" name="txtNAMA" placeholder="Masukkan NAMA" required autocomplete="NAMA">
        </label>

        <label for="txtTEMPAT LAHIR"><span>TEMPAT LAHIR:</span>
          <input type="text" id="txtTEMPAT LAHIR" name="txtTEMPAT LAHIR" placeholder="Masukkan TEMPAT LAHIR" required autocomplete="TEMPAT LAHIR">
        </label>

        <label for="txtTANGGAL LAHIR"><span>TANGGAL LAHIR:</span>
          <input type="TANGGAL LAHIR" id="txtTANGGAL LAHIR" name="txtTANGGAL LAHIR" placeholder="Masukkan TANGGAL LAHIR" required autocomplete="TANGGAL LAHIR">
        </label>

        <label for="txtHOBI"><span>HOBI:</span>
          <input type="HOBI" id="txtHOBI" name="txtHOBI" placeholder="Masukkan HOBI" required autocomplete="HOBI">
        </label>

        <label for="txTPASANGAN"><span>PASANGAN:</span>
          <input type="PASANGAN" id="txtPASANGAN" name="txtPASANGAN" placeholder="Masukkan PASANGAN" required autocomplete="PASANGAN">
        </label>

        <label for="txtPEKERJAAN"><span>PEKERJAAN:</span>
          <input type="PEKERJAAN" id="txtPEKERJAAN" name="txtPEKERJAAN" placeholder="Masukkan PEKERJAAN" required autocomplete="PEKERJAAN">
        </label>

        <label for="txtNAMA ORANG TUA"><span>NAMA ORANG TUA:</span>
          <input type="NAMA ORANG TUA" id="txtNAMA ORANG TUA" name="txtNAMA ORANG TUA" placeholder="Masukkan NAMA ORANG TUA" required autocomplete="NAMA ORANG TUA">
        </label>

        <label for="txtNAMA KAKAK PERTAMA"><span>NAMA KAKAK PERTAMA:</span>
          <input type="NAMA KAKAK PERTAMA" id="txtNAMA KAKAK PERTAMA" name="txtNAMA KAKAK PERTAMA" placeholder="Masukkan NAMA KAKAK PERTAMA" required autocomplete="NAMA KAKAK PERTAMA">
        </label>

        <label for="txtNAMA KAKAK KEDUA"><span>NAMA KAKAK KEDUA:</span>
          <input type="NAMA KAKAK KEDUA" id="txtNAMA KAKAK KEDUA" name="txtNAMA KAKAK KEDUA" placeholder="Masukkan NAMA KAKAK KEDUA" required autocomplete="NAMA KAKAK KEDUA">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo $tempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
      <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
      <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
      <p><strong>Nama Adik:</strong> <?php echo $sespesan ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>