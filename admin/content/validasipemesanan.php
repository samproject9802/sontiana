<?php
include_once '../bin/php/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $perintah = explode(",", $id);
    $kode_pemesanan = $perintah[0];
    $value = $perintah[1];

    $sql = "UPDATE table_validasipemesanan SET Status='$value' WHERE Kd_pemesanan=$kode_pemesanan";
    $conn->query($sql);
}

?>
<div class="container-fluid">
    <div class="mt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Pupuk</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Jumlah Pesanan</th>
                    <th>Pesanan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "../bin/php/config.php";

                $sql = "SELECT a.Kd_pemesanan,a.Kd_Pupuk,a.Nama,a.Alamat,a.No_Telepon, a.Jlh_Pesanan, b.Nm_pupuk, c.Status 
                        FROM `table_pemesanan` as a
                        INNER JOIN table_pupuk as b
                        ON b.Kd_pupuk = a.Kd_Pupuk
                        INNER JOIN table_validasipemesanan as c
                        WHERE c.Kd_pemesanan = a.Kd_pemesanan
                        GROUP BY a.Kd_pemesanan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $nomor = 1;
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        if ($row['Status'] == null || $row['Status'] == "Invalid") {
                            $status = "
                            <center>
                                <div class='btn-group' role='group' aria-label='Basic example'>
                                    <a class='btn btn-success' href='?page=validasi&id=$row[Kd_pemesanan],Valid' role='button'>Valid</a>
                                    <a class='btn btn-danger' href='?page=validasi&id=$row[Kd_pemesanan],Invalid' role='button'>Invalid</a>
                                </div>
                            </center>
                            ";
                        } else {
                            $status = "Valid";
                        }
                        echo "
                                <tr class='bg-light text-center'>
                                    <td>$nomor</td>
                                    <td>" . $row['Kd_Pupuk'] . "</td>
                                    <td>" . $row['Nama'] . "</td>
                                    <td>" . $row['Alamat'] . "</td>
                                    <td>" . $row['No_Telepon'] . "</td>
                                    <td>" . $row['Jlh_Pesanan'] . "</td>
                                    <td>" . $row['Nm_pupuk'] . "</td>
                                    <td>
                                        $status
                                    </td>
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
                    <th>Kode Pupuk</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Jumlah Pesanan</th>
                    <th>Pesanan</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>