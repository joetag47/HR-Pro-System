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

    function pushToastMessage(msg, code){

        if (code === 200){
            Notiflix.Notify.success(msg);
        }else{
            Notiflix.Notify.failure(msg);
        }
    }


    function submitFormData(url, form, withDatatable = false, triggerClass = null){

        Notiflix.Block.pulse(triggerClass);

        $.ajax({

            url: url,
            method: 'POST',
            data: form,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,

        }).done((response) => {

            console.log('', response);

            if(response.code === 200){

                pushToastMessage(response.msg, response.code);

                // if(withDatatable === true){
                //
                //     $('#dataTable').DataTable().ajax.reload();
                //
                // }

                Notiflix.Block.remove(triggerClass);

                setTimeout(function () {

                    $(triggerClass).closest('.modal').modal('toggle');

                }, 1000)

                $(triggerClass).trigger("reset");

                // $("select").val(null).trigger("change");

            }else{

                pushToastMessage(response.msg, response.code)

                Notiflix.Block.remove(triggerClass);
            }
        })
        // Notiflix.Block.remove('.addItem');
    }


    $('.addItem').submit(function (e){
        e.preventDefault();

        url = $(this).attr('action');
        let type = $(this).attr('title');

        formData = new FormData(this);

        submitFormData(url, formData, true, '.addItem');
    });


})
