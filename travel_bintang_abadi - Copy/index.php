<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Bintang Abadi</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="icontrav-removebg-preview.png">
</head>
<body>
    <header class="container">
        <img src="icontrav-removebg-preview.png" alt="Travel Bintang Abadi">
        <h2>Travel Bintang Abadi</h2>
        <h4 class="email">travelbintangabadi@gmai.com</h4>
        <h4>0821-8927-8174(Sujok)</h4>
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
        <section class="profil">
            <h2 style="animation: fadeIn 2.5s ease-out; text-align : center; font-size: 38px;" >Profil</h2>
            <hr>
            <p class="p1" style="animation: fadeIn 2.5s ease-out">
                Selamat datang di website kami <b>Travel Bintang Abadi.</b> <br>
                Website kami ini menyediakan informasi tentang tiket travel domestik di sini. <br>
                Di perusahaan kami, kami menyediakan 10 rute <b>tiket travel domestik.</b> <br>
                Seperti <ins><b>Jakarta, Bandung, Semarang, Lampung, Medan</b></ins>.
            </p>
            <hr>
            <h2 style="text-align : center; font-size: 38px;">Alamat</h2>
            <p class="p1">
                <b>PT. Travel Bintang Abadi</b> <br>
                Jl Jenderal Sudirman No. 10, kec. Setia Budi, Jakarta Selatan <br>
                <b>travelbintangabadi@gmail.com</b>
            </p>
        </section>
    </main>

    <footer>
        <marquee bgcolor="black"  behavior="right" direction="left" style="color: white;">TRAVEL BINTANG ABADI</marquee>
    </footer>

    <script>
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