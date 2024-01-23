<?php
include "database.php";
$database = new Database();
$data_teknisi = $database->Data_teknisi();
include "navbar.php";
include "sidebar.php";
?>


<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <h6 class="mb-4">Data pelanggan</h6>
        <!-- <a href="pelanggan-add.php" class="btn btn-sm btn-primary m-2">Tambah pelanggan</a> -->
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                <form action="proses.php?aksi=tambahreservasi" method="post">
                <table>
                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
    
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>

                    <!-- jenis kelamin  -->
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-check-inline">Jenis kelamin</label>
                            <div class="form-check form-check-inline">                                                  
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" checked>
                                <label for="jenis_kelamin_l" class="form-check-label">Laki-laki</label>
                            </div>

                            <div class="form-check form-check-inline">  
                                <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input">
                                <label for="Jenis_kelamin" class="form-check-label">Perempuan</label>
                            </div>
                    </div>

                    <!-- alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
            
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>

                    <!-- nomer telpon  -->
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No telpon</label>
            
                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                    </div>

                    <!-- email  -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                
                        <input type="text" name="email" id="email" class="form-control" aria-describedby="emailHelp">
                
                    </div>

                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Perangkat</label>
                        <select class="form-select" name="nama_perangkat" id="nama_perangkat">
                            <option value="komputer">komputer</option>
                            <option value="laptop">laptop</option>
                            <option value="printer">printer</option>
                        </select>
                    </div>

                    <!-- model -->
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
    
                        <input type="text" class="form-control" name="model" id="model">
                    </div>

                    <!-- tanggal masuk -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Tanggal Masuk</label>

                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control">
                    </div>
                    <!-- <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div> -->
                    <!-- teknisi -->
                    <!-- <div class="mb-3">
                        <label for="nama" class="form-label">Nama Teknisi</label>
                        <select class="form-select" name="id_teknisi" id="id_teknisi  ">
                            <option value="">pilih teknisi</option>
                            <?php
                            // foreach($data_teknisi as $data){
                            ?>
                            <option value="<?php
                            //  $data['id_teknisi']
                              ?>">
                              <?php
                            //    $data['nama_teknisi'] 
                               ?></option>
                            <?php
                        //  }
                         ?>
                        </select>
                    </div> -->

                    <!-- deskripsi -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                    </div>

                    

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