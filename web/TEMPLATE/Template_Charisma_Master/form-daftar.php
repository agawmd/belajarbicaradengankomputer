/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 <html>
     <head>
         <title></title>
     </head>
     
     <body>
         <header>
             <h3>Formulir Pendaftaran Siswa</h3>
         </header>
         
         <form action="proses-pendaftaran.php" method="post">
             <fieldset>
                 <p>
                     <label for="nama">Nama :</label>
                     <input type="text" name="nama" placeholder="Nama Lengkap">
                 </p>
                 <p>
                     <label for="alamat">Alamat :</label>
                     <textarea name="alamat" placeholder="Alamat"></textarea>
                 </p>
                 <p>
                     <label for="jenis_kelamin">Jenis Kelamin :</label>
                     <label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
                     <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                 </p>
                 <p>
                     <label for="agama">Agama :</label>
                     <select name="agama">
                         <option>Islam</option>
                         <option>Kristen</option>
                         <option>Hindu</option>
                         <option>Budha</option>
                         <option>Atheis</option>
                     </select>
                 </p>
                 <p>
                     <label for="sekolah_asal">Sekolah Asal :</label>
                     <input type="text" name="sekolah_asal" placeholder="Nama Sekolah">
                 </p>
                 
                 <p>
                     <input type="submit" value="Daftar" name="daftar">
                 </p>            
                 
             </fieldset>
         </form>
         
     </body>
 </html>
