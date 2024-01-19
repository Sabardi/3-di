<?php
include "database.php";

include "navbar.php";
include "sidebar.php";
?>


<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <h6 class="mb-4">Data pelanggan</h6>
        <!-- <a href="pelanggan-add.php" class="btn btn-sm btn-primary m-2">Tambah pelanggan</a> -->
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                <form action="proses.php?aksi=tambah" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
    
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
                    </div>
            
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
            
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-check-inline">Jenis kelamin</label>
                        <?php $jk = $data['Jenis_kelamin']; ?>
    
                            <div class="form-check form-check-inline">                                                  
                                <input type="radio" name="Jenis_kelamin" id="jenis_kelamin_l" class="form-check-input " value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>
                                <label for="jenis_kelamin_l" class="form-check-label">Laki-laki</label>
                            </div>
                        
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Jenis_kelamin" id="jenis_kelamin_p" class="form-check-input " value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>
                                
                                <label for="jenis_kelamin_p" class="form-check-label">Perempuan</label>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No telpon</label>
            
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                    </div>
                  
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin Menambah data ini?')">simpan</button>

                </form>
                </div>
            </div>
    </div>

</div>

<?php
include "footer.php";
?>