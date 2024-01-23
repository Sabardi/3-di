<?php
include "database.php";
$database = new Database();
$data_transaksi = $database->Data_transaksi();
$data_service = $database->Data_Service();
include "sidebar.php";
include "navbar.php";
?>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Data Transaksi Terbaru</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                <th scope="col">No</th>
                                <th scope="col">nama</th>
                                <th scope="col">nomer telpon</th>
                                <!-- tabel pelanggan end  -->

                                <!-- tabel service start -->
                                <th scope="col">nama perangkat</th>
                                <th scope="col">model</th>
                                <th scope="col">tanggal masuk</th>
                                <!-- <th scope="col">deskripsi</th> -->
                                <!-- end  -->

                                <!-- tabel teknisi start -->
                                <th scope="col">nama teknisi</th>
                                <!-- end  -->

                                <th scope="col">status pembayaran</th>
                                <!-- <th>total biaya</th> -->

                                <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                foreach($data_transaksi as $data){

                                ?>
                            <tbody>
                                <tr>
                                <td><?= $no++?></td>
                                <!-- tabel pelanggan  -->
                                <td><?= $data['nama']?></td>
                                <td><?= $data['no_hp']?></td>
                                <!-- end  -->

                                <!-- tabel service start -->
                                <td><?= $data['nama_perangkat']?></td>
                                <td><?= $data['model']?></td>
                                <td><?= $data['tanggal_masuk']?></td>
                                <!-- end  -->

                                <!-- table teknisi start  -->
                                <td><?= $data['nama_teknisi']?></td>

                                <td><?= $data['status_transaksi']?></td>                        
                                <td><a class="btn btn-sm btn-primary" href="">show</a></td>
                                </tr>
                            </tbody>
                            <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>

                <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-4">Data service masuk</h6>
                            <a href="DataService/DataService.php">Detail</a>
                        </div>
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                <th scope="col">No</th>
                                <!-- <th scope="col">nama</th> -->
                                <th scope="col">Nama perangkat</th>
                                <!-- tabel pelanggan end  -->

                                <!-- tabel service start -->
                                <th scope="col">tanggal masuk</th>
                                <!-- <th scope="col">deskripsi</th> -->
                                <!-- end  -->

                                <!-- tabel teknisi start -->
                                <th scope="col">teknisi</th>
                                <!-- end  -->
                                <!-- <th>total biaya</th> -->
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                foreach($data_service as $data){
                                ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['nama_perangkat']?></td>
                                    <td><?= $data['tanggal_masuk']?></td>
                                </tr>
                            </tbody>
                            <?php
                                }
                                ?>
                        </table>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah data pelanggan</h6>
                            <form action="proses.php?aksi=tambah" method="post">
                                <table>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" id="nama" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat" id="alamat" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">No.Hp</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="no_hp" id="no_hp" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="m-n3">
                                        <button type="submit" class="btn btn-primary m-2">Simpan</button>
                                        <a href="index_pelanggan.php" class="btn btn-danger m-2">batal</a>
                                    </div>    
                                </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Recent Sales End -->

        
<?php
include "footer.php";
?>