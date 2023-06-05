<?php
    include_once('koneksi.php');
    $nisn = $_GET['nisn'];
    $sql = "SELECT * FROM data_pendaftar WHERE nisn = '$nisn'";
    $res = $mysqli->query($sql);
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Peserta</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit Data Peserta</li>
        </ol>
        <?php
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            $nama = $row['nama'];
            $provinsi = $row['provinsi'];
            $kabupaten = $row['kabupaten'];
            $kecamatan = $row['kecamatan'];
            $desa = $row['desa'];
            $nama_file_kk = $row['nama_file_kk'];
            $nama_file_ijazah = $row['nama_file_ijazah'];
            $nama_file_rapor = $row['nama_file_rapor'];
            $rerata = $row['rerata'];
            $foto = "files-foto/".$row['nama_file_foto'];
        }
?>
        <form action="edit-data-peserta-action.php" method="post" enctype="multipart/form-data"
            class="container border border-1 rounded-4 p-4 mb-3">
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="input-nama" placeholder="Nama" name="nama"
                            value="<?=$nama?>" />
                    </div>
                    <div class="mb-3">
                        <label for="input-nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="input-nisn" placeholder="NISN" name="nisn"
                            value="<?=$nisn?>" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <img src="<?= $foto ?>" alt="" width="150" height="200">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="input-provinsi" placeholder="Provinsi"
                            name="provinsi" value="<?=$provinsi?>" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" id="input-kabupaten" placeholder="Kabupaten"
                            name="kabupaten" value="<?=$kabupaten?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="input-kecamatan" placeholder="Kecamatan"
                            name="kecamatan" value="<?=$kecamatan?>" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="input-desa" placeholder="Desa" name="desa"
                            value="<?=$desa?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-kk" class="form-label">Kartu Keluarga</label>
                        <br>
                        <?php
							if($nama_file_kk !== NULL){
						?>
                        <div>
                            <a href="<?='files-kk/'.$nama_file_kk?>" style="text-decoration: none;">
                                <button class="btn btn-primary mb-2">
                                    <?php
									echo($nama_file_kk)
									?>
                                </button>
                            </a>
                            <button class="border-0 bg-transparent" type="submit" value="hapus-kk" name='hapus-kk'>
                                <i class="fas fa-circle-xmark" style="color: #ff0000; cursor: pointer;"></i>
                            </button>
                        </div>
                        <?php
							} else {
						?>
                        <input class="form-control" type="file" id="input-kk" name="kk" />
                        <?php
							}
						?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-ijazah" class="form-label">Ijazah</label>
                        <br>
                        <?php
							if($nama_file_ijazah !== NULL){
						?>
                        <div>
                            <a href="<?='files-ijazah/'.$nama_file_ijazah?>" style="text-decoration: none;">
                                <button class="btn btn-primary mb-2">
                                    <?php
									echo($nama_file_ijazah)
									?>
                                </button>
                            </a>
                            <button class="border-0 bg-transparent" type="submit" value="hapus-ijazah"
                                name='hapus-ijazah'>
                                <i class="fas fa-circle-xmark" style="color: #ff0000; cursor: pointer;"></i>
                            </button>
                        </div>
                        <?php
							} else {
						?>
                        <input class="form-control" type="file" id="input-ijazah" name="ijazah" />
                        <?php
							}
						?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-rapor" class="form-label">Rapor</label>
                        <br>
                        <?php
							if($nama_file_rapor !== NULL){
						?>
                        <div>
                            <a href="<?='files-rapor/'.$nama_file_rapor?>" style="text-decoration: none;">
                                <button class="btn btn-primary mb-2">
                                    <?php
									echo($nama_file_rapor)
									?>
                                </button>
                            </a>
                            <button class="border-0 bg-transparent" type="submit" value="hapus-rapor"
                                name='hapus-rapor'>
                                <i class="fas fa-circle-xmark" style="color: #ff0000; cursor: pointer;"></i>
                            </button>
                        </div>
                        <?php
							} else {
						?>
                        <input class="form-control" type="file" id="input-rapor" name="rapor" />
                        <?php
							}
						?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="rerata" class="form-label">Rerata</label>
                        <input type="text" class="form-control" id="rerata" placeholder="Rerata" name="rerata"
                            value="<?=$rerata?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="edit-pendaftaran" value="Edit Pendaftaran" />
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
    </div>
</main>
<?php
    } else {
        echo "User belum terdaftar";
    }
?>