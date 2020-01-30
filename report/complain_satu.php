<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM arsip_complain WHERE no='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Complain JNE Express Kisaran </h2>
                        <h4>Jalan Sisingamangara No. 71 F Kisaran Kota, Kec. Kota Kisaran Barat<br>
                        Kabupaten Asahan, Sumatera Utara, Kode Pos : 21221</h4>
                        <hr>
                    </div>
                        <div class="text-left">
                            <h3>DATA COMPLAIN</h3>
                            <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nomor Resi</td> <td><?= $data['no_resi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Kirim</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Pengirim</td> <td><?= $data['nama_pengirim'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Penerima</td> <td><?= $data['nama_penerima'] ?></td>
                                </tr>
								<tr>
                                    <td>Alamat Penerima</td> <td><?= $data['alamat_penerima'] ?></td>
                                </tr>
								<tr>
                                    <td>Isi Barang</td> <td><?= $data['isi_barang'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                                </tr>
                            </tbody>
                                <tfoot> 
                                    <tr>
                                        <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <strong>
                                        <u>Staff Administrasi</u><br></strong>
									   </td>
								        </tr>
							     </tfoot>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>