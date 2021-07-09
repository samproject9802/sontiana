<div class="container-fluid">
    <div class="card mt-5" style="background-color: transparent; border: none;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <div class="col">
                        Kode Transaksi
                    </div>
                    <div class="col">
                        Tanggal Transaksi
                    </div>
                    <div class="col text-center">
                        Keterangan
                    </div>
                </div>
            </li>
        </ul>
        <ul class="list-group list-group-flush my-3">
            <?php
            include_once "../bin/php/config.php";

            $sql = "SELECT * FROM table_pemesanan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <li class='list-group-item'>
                        <div class='row'>
                            <div class='col'>
                                $row[Kd_Pupuk]$row[Kd_pemesanan] - $row[Nama]
                            </div>
                            <div class='col'>
                                $row[tanggal_transaksi]
                            </div>
                            <div class='col'>
                            <center>
                                    <button class='btn btn-primary' onClick='showDetailModal($row[Kd_pemesanan]);'>Detail</button>
                            </center>
                            </div>
                        </div>
                    </li>
                    ";
                }
            }
            ?>

        </ul>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="showDataDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b>Detail Transaksi</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="kodepesanan" class="col-sm-4 col-form-label">Kode Pemesanan</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="kodepesananmodal" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nomornikmodal" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="nomornikmodal" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="namapesananmodal" class="col-sm-4 col-form-label">Nama Pemesanan</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="namapesananmodal" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamatpesananmodal" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="alamatpesananmodal" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phonenumbermodal" class="col-sm-4 col-form-label">No.HP</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="phonenumbermodal" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodepupukmodal" class="col-sm-4 col-form-label">Kode Pupuk</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="kodepupukmodal" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sumpesananmodal" class="col-sm-4 col-form-label">Jumlah Pesanan</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="sumpesananmodal" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>