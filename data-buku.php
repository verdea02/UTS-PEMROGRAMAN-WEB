
   <!DOCTYPE html>
   <html>
   <head>
       <title>No1_verdea maulida zahra_074</title>
       <style>
           table,tr,td {
               border: 1px solid black;
           }
           thead {
               background-color: #cccddd;
           }
       </style>
   </head>
   <body>
       <h2>Data Buku</h2>
       <table>
           <thead>
               <tr>
                   <td>No</td>
                   <td>Judul</td>
                   <td>Pengarang</td>
                   <td>Tahun</td>                
               </tr>
           </thead>
           <?php
           include "koneksi.php";
           $no = 1;
           $query = mysqli_query($kon, 'SELECT * FROM data_buku');
           while ($data = mysqli_fetch_array($query)) {
           ?>
               <tr>
                   <td><?php echo $no++ ?></td>
                   <td><?php echo $data['Judul_Buku'] ?></td>
                   <td><?php echo $data['Pengarang'] ?></td>
                   <td><?php echo $data['Tahun_Terbit'] ?></td>
               </tr>
           <?php } ?>
       </table>
   </body>
   </html>