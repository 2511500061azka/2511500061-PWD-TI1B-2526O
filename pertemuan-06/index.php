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
      ?>
    </section>

    <section id="about">
      <h2>About Muhammad Azka Nazhan</h2>
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

    echo "<p><strong>NIM:</strong>2511500061</p>";

echo "<p><strong>NAMA:</strong>MUHAMMAD AZKA NAZHAN</p>";

echo "<p><strong>TMEPAT LAHIR:</strong>MUNTOK BANGKA BARAT</p>";

echo "<p><strong>TANGGAL LAHIR:</strong>14-APRIL-2007</p>";

echo "<p><strong>HOBI:</strong>BERMAIN GAME DAN BERMAIN FUTSAL</p>";

echo "<p><strong>PASANGAN:</strong>NASYWAERSA</p>";

echo "<p><strong>PEKERJAAN:</strong>MAHASISWA</p>";

echo "<p><strong>NAMA ORANG TUA:</strong>BAPAK TOTO DAN IBU MAEMUNAH</p>";

echo "<p><strong>NAMA KAKAK PERTAMA:</strong>FACHRURROZI AKBAR</p>";

echo "<p><strong>NAMA KAKAK KEDUA:</strong>SYAFA TASYA FEBRINA</p>";

    ?>

    </section>
    <section id="ipk">
        <h2>Nilai Saya</h2>
        <?php 
        $namaMatkul1 = "Algoritma dan Struktur Data";
    $sksMatkul1 = 3;
    $nilaiHadir1 = 90;
    $nilaiTugas1 = 65;
    $nilaiUTS1 = 78;
    $nilaiUAS1 = 70;

    $namaMatkul2 = "Agama";
    $sksMatkul2 = 2;
    $nilaiHadir2 = 76;
    $nilaiTugas2 = 50;
    $nilaiUTS2 = 70;
    $nilaiUAS2 = 80;

    $namaMatkul3 = "Matematika Diskrit";
    $sksMatkul3 = 3;
    $nilaiHadir3 = 86;
    $nilaiTugas3 = 75;
    $nilaiUTS3 = 78;
    $nilaiUAS3 = 75;

    $namaMatkul4 = "Sistem Operasi";
    $sksMatkul4 = 3;
    $nilaiHadir4 = 90;
    $nilaiTugas4 = 87;
    $nilaiUTS4 = 85;
    $nilaiUAS4 = 88;

    $namaMatkul5 = "Pemrograman Web Dasar";
    $sksMatkul5 = 3;
    $nilaiHadir5 = 69;
    $nilaiTugas5 = 80;
    $nilaiUTS5 = 96;
    $nilaiUAS5 = 97;

    // ---------- Fungsi Penentuan Grade dan Mutu ----------
    function hitungGrade($nilaiAkhir, $hadir) {
      if ($hadir < 70) return ['E', 0];
      if ($nilaiAkhir >= 90) return ['A', 4];
      if ($nilaiAkhir >= 80) return ['A-', 3.7];
      if ($nilaiAkhir >= 75) return ['B+', 3.3];
      if ($nilaiAkhir >= 72) return ['B', 3];
      if ($nilaiAkhir >= 69) return ['B-', 2.7];
      if ($nilaiAkhir >= 60) return ['C+', 2.3];
      if ($nilaiAkhir >= 59) return ['C', 2];
      if ($nilaiAkhir >= 55) return ['C-', 1.7];
      if ($nilaiAkhir >= 30) return ['D', 1];
      return ['E', 0];
    }

    // ---------- Perhitungan Masing-masing Mata Kuliah ----------
    $totalBobot = 0;
    $totalSKS = 0;

    for ($i = 1; $i <= 5; $i++) {
      $nilaiAkhir = (0.1 * ${"nilaiHadir$i"}) + (0.2 * ${"nilaiTugas$i"}) + (0.3 * ${"nilaiUTS$i"}) + (0.4 * ${"nilaiUAS$i"});
      list($grade, $mutu) = hitungGrade($nilaiAkhir, ${"nilaiHadir$i"});
      $bobot = $mutu * ${"sksMatkul$i"};
      $status = ($grade == "D" || $grade == "E") ? "Gagal" : "Lulus";

      echo "<p><strong>Nama Matakuliah ke-$i:</strong> ${"namaMatkul$i"}</p>";
      echo "<p><strong>SKS:</strong> ${"sksMatkul$i"}</p>";
      echo "<p><strong>Kehadiran:</strong> ${"nilaiHadir$i"}</p>";
      echo "<p><strong>Tugas:</strong> ${"nilaiTugas$i"}</p>";
      echo "<p><strong>UTS:</strong> ${"nilaiUTS$i"}</p>";
      echo "<p><strong>UAS:</strong> ${"nilaiUAS$i"}</p>";
      echo "<p><strong>Nilai Akhir:</strong> " . round($nilaiAkhir, 2) . "</p>";
      echo "<p><strong>Grade:</strong> $grade</p>";
      echo "<p><strong>Angka Mutu:</strong> $mutu</p>";
      echo "<p><strong>Bobot:</strong> $bobot</p>";
      echo "<p><strong>Status:</strong> $status</p>";
      echo "<hr>";

      $totalBobot += $bobot;
      $totalSKS += ${"sksMatkul$i"};
    }

    $IPK = $totalBobot / $totalSKS;

    echo "<p><strong>Total Bobot:</strong> $totalBobot</p>";
    echo "<p><strong>Total SKS:</strong> $totalSKS</p>";
    echo "<p><strong>IPK:</strong> " . round($IPK, 2) . "</p>";
    ?>
  </section>
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
