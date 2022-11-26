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

                if(withDatatable === true){

                    $('#dataTable').DataTable().ajax.reload();

                }

                Notiflix.Block.remove(triggerClass);

                setTimeout(function () {

                    $(triggerClass).closest('.modal').modal('hide');

                }, 1000)

                $(triggerClass).trigger("reset");

                // $("select").val(null).trigger("change");

            }else{

                pushToastMessage(response.msg, response.code)

                Notiflix.Block.remove(triggerClass);
            }
        })
    }


    $('.addItem').submit(function (e){
        e.preventDefault();

        url = $(this).attr('action');

        let type = $(this).attr('title');

        formData = new FormData(this);

        submitFormData(url, formData, true, '.addItem');
    });

    function toggleEditModal(editModalElement, editModalForm, editUrl){

        $(editModalForm).attr('action', editUrl)

        $(editModalElement).modal('show');

    }

    dataTable.on('click', '#deleteBtn', function (e){
        e.preventDefault();
        promptDialog($(this).attr('href'));
    });

    function promptDialog(url, type = null){
        Notiflix.Block.pulse('#dataTable');

        let msg = 'You won\'t be able to revert this!';

        if (type === 'department'){

            msg = "Deleting a department will affect employees who belong to the department"
        }

        Notiflix.Confirm.show(
            'Are You Sure?',
            msg,
            'Yes, Delete',
            'No',
            function okCb() {
                $.post(url, function (response){
                    console.log(response)
                    if(response.code === 200){
                        Notiflix.Report.success(
                            'Success',
                            response.msg,
                            'Okay',
                        );
                        dataTable.DataTable().ajax.reload();

                    }else{
                        pushToastMessage(response.msg, response.code)
                    }
                });

            },
            {
                width: '320px',
                borderRadius: '8px',
            },
        );
        Notiflix.Block.remove('#dataTable');

    }


    // ================================= DEPARTMENTS JS FLOW =======================================

    dataTable.on('click', '.updateDepartment', function (event) {
        event.preventDefault();

        $.post($(this).attr('href'), function (response) {
            $('#editName').val(response.data.name);
            $('#editDescription').val(response.data.description)
            toggleEditModal('#departmentEditModal', '#editDepartmentForm', response.url)
        })


    })

    dataTable.on('click', '.deleteDepartment', function (e){
        e.preventDefault();
        promptDialog($(this).attr('href'), 'department');
    });


})
