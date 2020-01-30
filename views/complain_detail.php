<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Complain</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM arsip_complain WHERE no ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>No Resi</td> <td><?= $data['no_resi'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Kirim</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Nama Pengirim Barang</td> <td><?= $data['nama_pengirim'] ?></td>
                        </tr>
						<tr>
                            <td>Nama Penerima Barang</td> <td><?= $data['nama_penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat Penerima Barang</td> <td><?= $data['alamat_penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Isi Barang</td> <td><?= $data['isi_barang'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=complain&actions=tampil" class="btn btn-info btn-sm">
                        Kembali ke Data Complain </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

