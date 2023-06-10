<?php
    include_once('koneksi.php');
    $nisn = $_SESSION['nisn'];
    $sql = "SELECT * FROM data_pendaftar WHERE nisn = '$nisn'";
    $res = $mysqli->query($sql);
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Status Pendaftaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Status Pendaftaran</li>
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
        <div class="container border border-1 rounded-4 p-4 mb-3">
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Nama</p>
                        <h5><?php
                        echo($nama);
                        ?></h5>
                    </div>
                    <div class="mb-3 border-bottom">
                        <p>NISN</p>
                        <h5><?php
                        echo($nisn);
                        ?></h5>
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
                    <div class="mb-3 border-bottom">
                        <p>Provinsi</p>
                        <h5><?php
                        echo($provinsi);
                        ?></h5>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Kabupaten</p>
                        <h5><?php
                        echo($kabupaten);
                        ?></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Kecamatan</p>
                        <h5><?php
                        echo($kecamatan);
                        ?></h5>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Desa</p>
                        <h5><?php
                        echo($desa);
                        ?></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Kartu Keluarga</p>
                        <h5><?php
                        echo($nama_file_kk);
                        ?></h5>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Ijazah</p>
                        <h5><?php
                        echo($nama_file_ijazah);
                        ?></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Rapor</p>
                        <h5><?php
                        echo($nama_file_rapor);
                        ?></h5>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3 border-bottom">
                        <p>Rerata Rapor</p>
                        <h5><?php
                        echo($rerata);
                        ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <form action="cek-status-action.php" method="post">
            <input type="submit" value="Batalkan Pendaftaran" class="btn btn-danger" />
        </form>
    </div>
    </div>
</main>
<?php
    } else {
        echo "User belum terdaftar";
    }
?>