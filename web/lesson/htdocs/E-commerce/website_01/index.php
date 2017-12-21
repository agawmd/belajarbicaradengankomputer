<html>
    <head>
        <title>ABC MARKET</title>
        <style>
            .tombol-nav:hover {
                background: #00ff54;
            }
            .tombol-nav {
                padding: 10px;
                background: #ffcdfd;
                border-radius: 5px;
                margin: 10px;
                text-decoration: none;
            }            
        </style>
    </head>
    <body>
        <h1>ONLINE SHOP ABC</h1>
        <a href="FormPembeli.php" class="tombol-nav">Register</a>
        <a href="FormPembeli.php"/>[+] Daftar Baru


        <?php if (isset($_GET['sukses'])): ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Buat Akun Telah Berhasil !";
                } else if ($_GET['status'] == 'gagal') {
                    echo "Buat Akun Gagal !";
                }
                ?>
            <?php endif; ?>
        </p>        
    </body>
</html>

