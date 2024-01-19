<?php
include "database.php";
$database = new Database();
$data_service = $database->Data_teknisi();
include "navbar.php";
include "sidebar.php";
?>
<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Teknisi</h1>
    <div class="col-12">
        <h6 class="mb-4">Teknisi</h6>
        <a href="" class="btn btn-sm btn-primary m-2">Tambah pelanggan</a>
        <div class="bg-light rounded h-100 p-4">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                                            
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Spesialis</th>
                                <th scope="col">No-Hp</th>
                                <th scope="col">Statu</th>
                            </tr>
                        
                        </thead>
                        <?php
                        $no = 1;
                        foreach($data_service as $data){

                        ?>
                        <tbody>
                        
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data['nama_teknisi']?></td>
                                <td><?= $data['Jenis_kelamin']?></td>
                                <td><?= $data['alamat']?></td>
                                <td><?= $data['spesialis']?></td>
                                <td><?= $data['no_hp']?></td>
                                <td>
                                    <a href="edit.php?id_teknisi=<?= $data['id_teknisi']; ?>&aksi=edit" class="btn btn-success rounded-pill m-2">Edit</a>
                                    <a href="proses.php?id_teknisi=<?= $data['id_teknisi']; ?>&aksi=hapus"
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