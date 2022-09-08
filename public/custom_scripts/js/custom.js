Notiflix.Loading.pulse();
$(document).ready(function () {
    Notiflix.Loading.remove()

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let errorMsg = $('.errorMsg'),
        url = '',
        dataTable = $('#dataTable'),
        formData;




})
