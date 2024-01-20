<?php
include "database.php";
$database = new Database();
$data_service = $database->Data_Pelanggan();
include "navbar.php";
include "sidebar.php";
?>

<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <h6 class="mb-4">Data pelanggan</h6>
        <a href="pelanggan-add.php" class="btn btn-sm btn-primary m-2">Tambah pelanggan</a>
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                        
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">alamat</th>
                                <th scope="col">jenis kelamin</th>
                                <th scope="col">No-Hp</th>
                                <th scope="col">Email</th>
                                <th scope="col">aksi</th>
                                <!-- <th scope="col">#</th> -->

                            </tr>
                        </thead>
                                <!-- kode php  -->
                        <?php
                            $no = 1;
                            foreach($data_service as $data){

                        ?>
                        <tbody>
                                        <!-- konten -->
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data['nama']?></td>
                                <td><?= $data['alamat']?></td>
                                <td><?= $data['jenis_kelamin']?></td>
                                <td><?= $data['no_hp']?></td>
                                <td><?= $data['email']?></td>
                                <td>
                                    <a href="pelanggan-edit.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=edit" class="btn btn-success rounded-pill m-2">Edit</a>
                                    <a href="proses.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=hapus"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger rounded-pill m-2">Hapus</a>
                                </td>
                            </tr>
                            
                        </tbody>
                        
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
    </div>

</div>
<?php
include "footer.php";
?>