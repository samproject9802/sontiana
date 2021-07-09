function showDetailModal(kodepesan) {
    var arrayData = [];
    $.ajax({
        url: "../bin/php/selectpesanan.php",
        type: "POST",
        data: { 'kode_pesan': kodepesan },
        success: function(response) {
            var myData = JSON.parse(response);
            myData.forEach(element => {
                $('#nomornikmodal').val(element['Nik']);
                $('#namapesananmodal').val(element['Nama']);
                $('#alamatpesananmodal').val(element['Alamat']);
                $('#phonenumbermodal').val(element['No_Telepon']);
                $('#kodepupukmodal').val(element['Kd_Pupuk']);
                $('#sumpesananmodal').val(element['Jlh_Pesanan']);
            });
        }
    });
    $('#kodepesananmodal').val(kodepesan);
    $('#showDataDetail').modal('toggle', true);
}