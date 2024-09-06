<?php 
include 'travel.php';

if (isset($_POST['proses'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['Nama']);
    $email = mysqli_real_escape_string($koneksi, $_POST['Gmail']);
    $rute = mysqli_real_escape_string($koneksi, $_POST['Rute']);
    $pembayaran = mysqli_real_escape_string($koneksi, $_POST['Pembayaran']);

    $query = "INSERT INTO pembelian (Nama, Gmail, Rute, Pembayaran) VALUES ('$nama', '$email', '$rute', '$pembayaran')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: terima.php");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }   
}
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga Tiket</title>
    <link rel="stylesheet" href="harga.css">
    <link rel="icon" type="image/x-icon" href="icontrav-removebg-preview.png">
</head>
<body>
    <header class="container">
        <img src="icontrav-removebg-preview.png" alt="Travel Bintang Abadi">
        <h2>Travel Bintang Abadi</h2>
        <h4 class="email">travelbintangabadi@gmail.com</h4>
        <h4>0821-8927-8174 (Sujok)</h4>
        <div class="caridiv">
            <input type="search" name="search" placeholder="Pencarian...." id="search">
            <input type="submit" value="Cari" id="submit-search">
        </div>
        
        <nav class="navbar">
            <ul class="item">
                <li><a href="index.php">Profil</a></li>
                <li><a href="destinasi.php">Destinasi</a></li>
                <li><a href="Jadwal.php">Jadwal</a></li>
                <li><a href="harga.php">Harga Tiket</a></li>
                <li><a href="kontak.php">Kontak Kami</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 style="animation: fadeIn 3s ease-out; font-style: italic; font-family:Georgia, 'Times New Roman', Times, serif">Pembelian Tiket</h2>
        <hr style="height: auto; width: 100%;">
        <form action="" id="lokasi" method="POST">
            <div class="kotak1">
                <div class="kotak2">
                    <select id="kota" name="Rute" onchange="hargaa()" class="kotak3" style="animation: fadeIn 3s ease-out; font-size: 16px;">
                        <option value="" data-price="0">Pilih Rute</option>
                        <option value="Jakarta - Cikampek" data-price="100000">Jakarta - Cikampek</option>
                        <option value="Jakarta - Bandung" data-price="150000">Jakarta - Bandung</option>
                        <option value="Jakarta - Semarang" data-price="450000">Jakarta - Semarang</option>
                        <option value="Jakarta - Medan" data-price="1200000">Jakarta - Medan</option>
                        <option value="Jakarta - Bekasi" data-price="50000">Jakarta - Bekasi</option>
                        <option value="Jakarta - Surabaya" data-price="500000">Jakarta - Surabaya</option>
                        <option value="Jakarta - Pekanbaru" data-price="750000">Jakarta - Pekanbaru</option>
                        <option value="Jakarta - Yogyakarta" data-price="600000">Jakarta - Yogyakarta</option>
                        <option value="Jakarta - Cirebon" data-price="350000">Jakarta - Cirebon</option>
                        <option value="Jakarta - Bogor" data-price="150000">Jakarta - Bogor</option>
                    </select>
                </div>
            </div>
            <p id="hargai" class="harga" style="font-size: 16px; font-style: italic; font-family:Georgia, 'Times New Roman', Times, serif;">Harga: Rp0</p>

            <h2 style="font-style: italic; font-family:Georgia, 'Times New Roman', Times, serif">Biodata Pembeli</h2>
            <hr style="height: auto; width: 100%;">
            <div class="aj">
                <input type="text" id="nama" placeholder="Nama Pembeli..." name="Nama" required>
                <input type="email" id="email" placeholder="Email Pembeli..." name="Gmail" required>
                <input type="hidden" id="total" required>
            </div>

            <h3 style="color: #007bff; font-family:Georgia, 'Times New Roman', Times, serif; font-style: italic">Silahkan Pilih Metode Pembayaran</h3>
            <hr style="height: auto; width: 100%;">
            <div class="ye">
                <div class="ye1">
                    <div class="ye2">
                        <select id="pembayaran" name="Pembayaran" required>
                            <option value="">Pilih Metode</option>
                            <option value="Gopay">GoPay</option>
                            <option value="Dana">Dana</option>
                            <option value="Bni">BNI</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="OFFLINE/COD TERDEKAT">Offline/COD</option>
                        </select>   
                    </div>
                </div>
            </div>

            <div class="kirim">
                <input type="submit" value="Bayar" name="proses">
            </div>
        </form>
    </main>

    <footer>
        <marquee bgcolor="black" behavior="scroll" direction="left" style="color: white;">TRAVEL BINTANG ABADI</marquee>
    </footer>

    <script>
        function hargaa() {
            const kota = document.getElementById('kota');
            const infoharga = document.getElementById('hargai');
            const total = document.getElementById('total');

            const selectedOption = kota.options[kota.selectedIndex];
            const harga = selectedOption.getAttribute('data-price');

            if (harga) {
                infoharga.innerHTML = `Harga: Rp${harga}`;
                total.value = harga;
            } else {
                infoharga.innerHTML = `Harga: Rp0`;
                total.value = '';
            }
        }

        const searchInput = document.getElementById('search');
        const submitSearch = document.getElementById('submit-search');
        const data = document.querySelectorAll('.navbar ul.item li');

        submitSearch.addEventListener('click', (e) => {
            e.preventDefault();

            const nilai = searchInput.value.toLowerCase();
            
            data.forEach(item => {
                const namaitem = item.textContent.toLowerCase();

                if (namaitem.includes(nilai)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>