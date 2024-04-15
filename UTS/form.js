$(document).ready(function(){
    $('form').submit(function(event){
        //$('#formulir').hide();
        $('#formulir').load('hasilForm.php');
        //$('#formulir').show();
        // Menghentikan aksi bawaan dari formulir
        event.preventDefault();

        alert('Terima kasih! Formulir Anda telah berhasil dikirim.');
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'hasilForm.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response){
                $('#formulir').html(response);
            },
            error: function(){
                $('#formulir').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
