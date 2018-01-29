<html>
    <head>
        <title>Form Pengembalian Buku</title>
    </head>
<body>
    <form>
        <label>NIM :</label>
        <input type="text" name="nama" placeholder="Nomor Induk Mahasiswa"><br><br>        
        <label>Tgl Peminjaman :</label>
        <input type="date" name="tgl_pinjam"><br><br>
        <label>Lama Peminjaman :</label>
        <select>
            <option><?php int $i; for ($i=1; $i<=10; $i++) {
                                            echo "$i";
                                       }?></option>
        </select>
        <label>Tgl Pengembalian :</label>
        <input type="date" name="tgl_balik">
        
    </form>
</body>
</html>
