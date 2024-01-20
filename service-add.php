<?php
include "database.php";

include "navbar.php";
include "sidebar.php";
?>


<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <h6 class="mb-4">Data service</h6>
        <!-- <a href="pelanggan-add.php" class="btn btn-sm btn-primary m-2">Tambah pelanggan</a> -->
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                <form action="proses.php?aksi=tambahtservis" method="post">
                <table>
                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Perangkat</label>
                        <select class="form-select" name="nama_perangkat" id="nama_perangkat">
                            <option value="komputer">komputer</option>
                            <option value="laptop">laptop</option>
                            <option value="perkalian">perkalian</option>
                            <option value="pembagian">pembagian</option>
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