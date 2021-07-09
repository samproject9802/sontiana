<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-center">
        <div class="p-2 bd-highlight col-example">
            <h4 class="text-center">INPUT DATA PESANAN</h4>
            <form class="mt-3" method="POST" action="../bin/php/inputdatapesanan.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="namacust">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat Penerima</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="alamatcust">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No.Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="noteleponcust">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pesanan</label>
                    <select class="form-select" aria-label="Default select example" name="pesanan">
                        <option selected>Pilih Produk...</option>
                        <?php
                        include_once '../bin/php/config.php';

                        $sql = "SELECT * FROM table_pupuk";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='$row[Kd_pupuk]'>$row[Nm_pupuk]</option>";
                            }
                        } else {
                            echo "<option value=''></option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jumlah Pesanan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="jumlahpesanan">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>