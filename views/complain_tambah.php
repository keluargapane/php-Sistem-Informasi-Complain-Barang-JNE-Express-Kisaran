<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Complain</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                               <div class="col-sm-2 col-xs-9">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_resi" class="col-sm-3 control-label">Nomor Resi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_resi" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Resi" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Kirim</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengirim" class="col-sm-3 control-label">Nama Pengirim Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengirim" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Pengirim Barang" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_penerima" class="col-sm-3 control-label">Nama Penerima Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Penerima Barang" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat_penerima" class="col-sm-3 control-label">Alamat Penerima Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat_penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Penerima Barang" required>
                            </div>
                        </div>
							<div class="form-group">
                            <label for="isi_barang" class="col-sm-3 control-label">Isi Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="isi_barang" class="form-control" id="inputPassword3" placeholder="Inputkan Isi Barang">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Complain</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=complain&actions=tampil" class="btn btn-info btn-sm">
                        Kembali Ke Data Compalin
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$noresi=$_POST['no_resi'];
	$tglmasuk=$_POST['tgl_masuk'];
	$nama_pengirim=$_POST['nama_pengirim'];
	$nama_penerima=$_POST['nama_penerima'];
	$alamat_penerima=$_POST['alamat_penerima'];
	$isi_barang=$_POST['isi_barang'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO arsip_complain VALUES ('','$noresi','$tglmasuk','$nama_pengirim','$nama_penerima','$alamat_penerima','$isi_barang','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
