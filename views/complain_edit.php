<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM arsip_complain WHERE no ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Complain</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="noResi" class="col-sm-3 control-label">Nomor Resi</label>
                            <div class="col-sm-9">
                                <input type="text" name="noResi" value="<?=$data['no_resi']?>" class="form-control" id="inputEmail3" placeholder="Nomor Resi" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tglMasuk" class="col-sm-3 control-label">Tanggal Kirim</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglMasuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>         
                        <div class="form-group">
                            <label for="namaPengirim" class="col-sm-3 control-label">Nama Pengirim Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaPengirim" value="<?=$data['nama_pengirim']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Pengirim Barang" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="namaPenerima" class="col-sm-3 control-label">Nama Penerima Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaPenerima" value="<?=$data['nama_penerima']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Penerima Barang" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamatPenerima" class="col-sm-3 control-label">Alamat Penerima Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamatPenerima" value="<?=$data['alamat_penerima']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Penerima Barang" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="isiBarang" class="col-sm-3 control-label">Isi Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="isiBarang" value="<?=$data['isi_barang']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Isi Barang">
                            </div>
                        </div>
												<div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Data Complain</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=complain&actions=tampil" class="btn btn-info btn-sm">
                        Kembali Ke Data Complain
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
  $noResi=$_POST['noResi'];
  $tglMasuk=$_POST['tglMasuk'];
  $namaPengirim=$_POST['namaPengirim'];
  $namaPenerima=$_POST['namaPenerima'];
  $alamatPenerima=$_POST['alamatPenerima'];
  $isiBarang=$_POST['isiBarang'];
  $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE arsip_complain SET no_resi='$noResi',tgl_masuk='$tglMasuk',nama_pengirim='$namaPengirim',nama_penerima='$namaPenerima',alamat_penerima='$alamatPenerima',
	isi_barang='$isiBarang',keterangan='$keterangan' WHERE no ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Complain Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



