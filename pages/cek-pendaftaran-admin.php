<?php
    include_once('koneksi.php');
    $sql = "SELECT * FROM data_pendaftar";
    $res = $mysqli->query($sql);
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pendaftaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pendaftaran</li>
        </ol>
        <div class="container border border-1 rounded-4 p-4 mb-3">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>KK</th>
                        <th>Ijazah</th>
                        <th>Rapor</th>
                        <th>Rerata</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($res->num_rows > 0){
                            while($row = $res->fetch_assoc()){
                                echo(
                                    "<tr>".
                                    "<td>".$row['nisn']."</td>".
                                    "<td>".$row['nama']."</td>".
                                    "<td>".$row['provinsi']."</td>".
                                    "<td>".$row['kabupaten']."</td>".
                                    "<td>".$row['kecamatan']."</td>".
                                    "<td>".$row['desa']."</td>");
                                    if($row['nama_file_kk']){
                                        echo("<td><i class='fa-solid fa-check'></i></td>");
                                    } else {
                                        echo("<td><i class='fa-regular fa-circle-xmark'></i></td>");
                                    }
                                    if($row['nama_file_ijazah']){
                                        echo("<td><i class='fa-solid fa-check'></i></td>");
                                    } else {
                                        echo("<td><i class='fa-regular fa-circle-xmark'></i></td>");
                                    }
                                    if($row['nama_file_rapor']){
                                        echo("<td><i class='fa-solid fa-check'></i></td>");
                                    } else {
                                        echo("<td><i class='fa-regular fa-circle-xmark'></i></td>");
                                    }
                                echo(
                                    "<td>".$row['rerata']."</td>"
                                );
                                ?>
                    <td>

                        <a href="<?=$row['nisn']?>" style="text-decoration: none;">
                            <i class='fa-solid fa-pen-to-square'></i>
                        </a>
                        <form action="hapus-data-admin-action.php" method="post" style="display:inline-block;">
                            <input type="hidden" name="nisn" value="<?=$row['nisn']?>">
                            <button type="submit" style="border: none; background: transparent;">
                                <a href="">
                                    <i class='fa-solid fa-trash'></i>
                                </a>
                            </button>
                        </form>

                    </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>