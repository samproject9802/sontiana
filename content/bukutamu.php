<h2 class="card-title mb-5 text-center">Buku Tamu</h2>
<form class="mx-auto" style="width: 300px;" method="POST" action="bin/php/bukutamu.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
        <input type="text" class="form-control" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                        echo date("Y-m-d"); ?>" name="tanggal" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="bukutamunama" name="nama">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1">Komentar</label>
        <textarea class="form-control" id="bukutamukomentar" rows="3" name="komentar"></textarea>
    </div>
    <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>