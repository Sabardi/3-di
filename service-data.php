<?php
include "database.php";
$database = new Database();
$data_service = $database->Data_Service();
include "navbar.php";
include "sidebar.php";
?>

<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <h6 class="mb-4">Data pelanggan</h6>
        <a href="service-add.php" class="btn btn-sm btn-primary m-2">Tambah service</a>
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
              
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Perangkat</th>
                                <th scope="col">Model</th>
                                <th scope="col">Tanggal masuk</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">aksi</th>

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
                                <td><?= $data['nama_perangkat']?></td>
                                <td><?= $data['model']?></td>
                                <td><?= $data['tanggal_masuk']?></td>
                                <td><?= $data['deskripsi']?></td>
                                <td>
                                <a href="service-edit.php?id_service=<?php echo $data['id_service']; ?>&aksi=edit" class="btn btn-success">Edit</a>
                                <a href="proses.php?id_service=<?php echo $data['id_service']; ?>&aksi=hapus" class="btn btn-danger"
                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
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