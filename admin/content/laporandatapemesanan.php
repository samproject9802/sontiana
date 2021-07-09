<div class="container-fluid">
    <button class="btn btn-primary me-md-2 btn-print" style="float: right;" type="button" id="btnPrintlaporan" onclick="window.print();">Print</button>
    <h1 class="text-center mt-3" id="titleShown">Laporan Data Pemesanan</h1>
    <div class="mt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Pemesanan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Jumlah Pesanan</th>
                    <th>Pesanan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "../bin/php/config.php";

                $sql = "SELECT * FROM `table_pemesanan` as a
                        INNER JOIN table_pupuk as b
                        ON b.Kd_pupuk = a.Kd_pupuk
                        GROUP BY a.Kd_pemesanan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $nomor = 1;
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                                <tr class='bg-light text-center'>
                                    <td>$nomor</td>
                                    <td>" . $row['Kd_pemesanan'] . "</td>
                                    <td>" . $row['Nama'] . "</td>
                                    <td>" . $row['Alamat'] . "</td>
                                    <td>" . $row['No_Telepon'] . "</td>
                                    <td>" . $row['Jlh_Pesanan'] . "</td>
                                    <td>" . $row['Nm_pupuk'] . "</td>
                                    <td>" . $row['Harga'] . "</td>
                                </tr>
                            ";

                        $nomor++;
                    }
                } else {
                    echo "
                    <tr class='bg-light text-center'>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                        ";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Kode Pemesanan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Jumlah Pesanan</th>
                    <th>Pesanan</th>
                    <th>Harga</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>