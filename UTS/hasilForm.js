$(document).ready(function(){
    $('form').submit(function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'hasilForm.php',
            data: formData,
            success: function(response){
                alert('Formulir berhasil disimpan!');
            },
            error: function(xhr, status, error){
                alert('Terjadi kesalahan saat menyimpan formulir: ' + status);
            }
        });
    });
});
