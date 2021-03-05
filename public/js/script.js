$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nim').val('');
        $('#jurusan').val('');
        $('#email').val('');
        $('#id').val('');

    });


    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-body form').attr('action', 'http://localhost/mvc-php/public/mahasiswa/ubah');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/mvc-php/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#jurusan').val(data.jurusan);
                $('#email').val(data.email);
                $('#id').val(data.id);
            }
        });
    });
});