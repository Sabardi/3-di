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
                <form action="proses.php?aksi=tambahteknisi" method="post">
                <table>
                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
    
                        <input type="text" class="form-control" name="nama_teknisi" id="nama_teknisi">
                    </div>

                    <!-- jenis kelamin  -->
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-check-inline">Jenis kelamin</label>
                            <div class="form-check form-check-inline">                                                  
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" checked>
                                <label for="jenis_kelamin_l" class="form-check-label">Laki-laki</label>
                            </div>

                            <div class="form-check form-check-inline">  
                                <input type="radio" name="Jenis_kelamin" value="Perempuan" class="form-check-input">
                                <label for="Jenis_kelamin" class="form-check-label">Perempuan</label>
                            </div>
                    </div>

                    <!-- alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
            
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>

                    <!-- spsialis -->
                    <div class="mb-3">
                        <label for="spesialis" class="form-label">Spesialis</label>
            
                        <input type="text" name="spesialis" id="spesialis" class="form-control">
                    </div>

                    <!-- nomer telpon  -->
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No telpon</label>
            
                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                    </div>

                    <!-- email  -->
                    <!-- <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                
                        <input type="text" name="email" id="email" class="form-control" aria-describedby="emailHelp">
                
                    </div> -->
                </table>
                    <button type="submit" onclick="return confirm('Anda yakin data yang anda masukan ini benar?')" class="btn btn-primary">simpan</button>
                
                </form>
                </div>
            </div>
    </div>

</div>

<?php
include "footer.php";
?>