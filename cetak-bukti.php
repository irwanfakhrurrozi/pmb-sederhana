<?php
    include 'koneksi.php';

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '"
    .$_GET['id']."'");
    $p = mysqli_fetch_object($peserta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Mahasiswa Baru | Univ. Hamzanwadi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>
   <h2>Bukti Pendaftaran</h2>
   <table class="table-data" border="0">
       <tr>
           <td>Kode Pendaftaran</td>
           <td>:</td>
           <td><?php echo $p->id_pendaftaran ?></td>
       </tr>
       <td>Tahun Ajaran</td>
           <td>:</td>
           <td><?php echo $p->th_ajaran ?></td>
       </tr>
       <td>Jurusan</td>
           <td>:</td>
           <td><?php echo $p->jurusan ?></td>
       </tr>
       <td>Nama Lengkap</td>
           <td>:</td>
           <td><?php echo $p->nm_peserta ?></td>
       </tr>
       <td>Tempat, Tanggal Lahir</td>
           <td>:</td>
           <td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
       </tr>
       <td>Jenis Kelamin</td>
           <td>:</td>
           <td><?php echo $p->jk ?></td>
       </tr>
       <td>Agama</td>
           <td>:</td>
           <td><?php echo $p->agama ?></td>
       </tr>
       <td>Alamat</td>
           <td>:</td>
           <td><?php echo $p->almt_peserta ?></td>
       </tr>
   </table>
</html>