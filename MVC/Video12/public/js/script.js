$(function(){
    // Ketika tombol tambah data ditekan
    $('.tombolTambahData').on('click', function(){
        $('#judulModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/PraktikumWeb2/MVC/Video12/public/mahasiswa/tambah');
        
        // Kosongkan semua input form ketika tombol "Tambah Data" ditekan
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });

    // Ketika tombol ubah data ditekan
    $('.tampilModalUbah').on('click', function(){
        $('#judulModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/PraktikumWeb2/MVC/Video12/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/PraktikumWeb2/MVC/Video12/public/mahasiswa/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});
