<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Complain JNE Express Kisaran </h2>
                        <h4>Jalan Sisingamangara No. 71 F Kisaran Kota, Kec. Kota Kisaran Barat <br> 
                        Kabupaten Asahan, Sumatera Utara, Kode Pos : 21221</h4>
                        <hr>
                        <h3>DATA SELURUH COMPLAIN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
                                <th>No.</th><th width="17%">Nomor Resi</th><th>Tanggal Kirim</th><th width="14%">Nama Pengirim</th><th width="15%">Nama Penerima</th><th width="10%">Alamat Penerima</th><th>Isi Barang</th><th>Keterangan</th><th>AKSI</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM arsip_complain";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_resi'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['nama_pengirim'] ?></td>
                                    <td><?= $data['nama_penerima'] ?></td>
									<td><?= $data['alamat_penerima'] ?></td>
									<td><?= $data['isi_barang'] ?></td>
									<td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <strong>
                                        <u>Staff Administrasi</u><br></strong>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>