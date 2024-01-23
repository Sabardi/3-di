<?php
include "database.php";
$database = new database();

include "navbar.php";
include "sidebar.php";
?>

<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <h6 class="mb-4">Data pelanggan</h6>
        <!-- <a href="pelanggan-add.php" class="btn btn-sm btn-primary m-2">Tambah pelanggan</a> -->
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                <form action="proses.php?aksi=updateservis" method="post">
                <?php
                    foreach($database->Edit_data_service($_GET['id_service']) as $data){
                ?>
                    <table>
                       
                    <!-- id -->
                        <div class="mb-3">
                                <input type="hidden" name="id_service" id="id_service" value="<?php echo $data['id_service']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Perangkat</label>
                                <select class="form-select" name="nama_perangkat" id="nama_perangkat" value="<?php echo $data['nama_perangkat']; ?>">
                                    <option value="komputer">komputer</option>
                                    <option value="laptop">laptop</option>
                                    <option value="perkalian">perkalian</option>
                                    <option value="pembagian">pembagian</option>
                                </select>
                        </div>

                        <!-- model -->
                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
        
                            <input type="text" class="form-control" name="model" id="model" value="<?php echo $data['model']; ?>">
                        </div>

                        <!-- tanggal masuk -->
                        <div class="mb-3">
                            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>

                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="<?php echo $data['tanggal_masuk']; ?>">
                        </div>

                        <!-- deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" value="<?php echo $data['deskripsi']; ?>"></textarea>
                    </div>

                </table>
                    <?php
                        }
                    ?>
                        <button type="submit" class="btn btn-primary">simpan</button>
                
                </form>
                </div>
            </div>
    </div>

</div>

<?php
include "footer.php";
?>