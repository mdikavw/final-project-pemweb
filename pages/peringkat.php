<?php
    include_once('koneksi.php');
    $sql = "SELECT * FROM data_pendaftar";
    $res = $mysqli->query($sql);
?>

<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Peringkat</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active">Peringkat</li>
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
                        <th>Rerata</th>
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
                                    "<td>".$row['desa']."</td>".
                                    "<td>".$row['rerata']."</td>".
                                    "</tr>"
                                );
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
	</div>
</main>
