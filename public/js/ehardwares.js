// Notifications Sections
var toast = function(type, title, message)
{
    if (type == 'error') {
        title = typeof title !== 'undefined' ? title : 'Error';
        iziToast.error({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else if (type == 'warning') {
        typeof title !== 'undefined' ? title : 'Caution';
        iziToast.warning({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else if (type == 'success') {
        title = typeof title !== 'undefined' ? title : 'Success';
        iziToast.success({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else if (type == 'info') {
        title = typeof title !== 'undefined' ? title : 'Hi';
        iziToast.info({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else {
        iziToast.show({
            title: title,
            message: message,
            position: 'topRight'
        });
    }
}

// Users Section
$('.all_users_table').DataTable({

});

$('.save_new_user').on('click', function()
 {
    $.ajax({
        url: "{{ route('save_new_user') }}",
        method: "POST",
        data:
        {
            _token : $('meta[name="csrf-token"]').attr('content'),
            first_name : $('input[name="first_name"]').val(),
            last_name : $('input[name="last_name"]').val(),
            email : $('input[name="email"]').val(),
            phone_number : $('input[name="phone_number"]').val(),
            password : $('input[name="password"]').val(),
            password_confirmation : $('input[name="password_confirmation"]').val(),
            role : $('select[name="role"]').val(),
         },
        success: function(data) {
            console.log(data);
        }
    })

})

// Hardware Section
$('.save_hardware_category').on('click', function(e) {
    e.preventDefault();

    var button = $(this);
    var form = button.closest('form');
    var name = form.find('input[name="category_name"]').val();
    var description = form.find('textarea[name="description"]').val();

    if(name !== '' && description !== ''){
        $(this).attr('style', 'display: none;');
        $('.reset_hardware_category').attr('style', 'display: none;');
        $('.loading_button').removeAttr('style');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });

        $.ajax({
            url: "/admin/hardware_categories/save_hadware_category",
            method: "POST",
            data:
            {
                name : name,
                description : description,
             },
            success: function(data) {
                $('form').trigger('reset');
                $('.close').click();
                $('.hardware_categories_table').DataTable().draw();
                toast(data.type, data.title, data.message);

                console.log(data);
            }
        })
    }
});

$('.hardware_categories_table').DataTable({
    serverSide: true,
    processing: true,
    lengthMenu: [[10, 25, 50], [10, 25, 50]],
    ajax: {
        url: "/admin/hardware_categories/list",
    },
    columns: [
        {data: 'category_name', name: 'category_name', orderable: true, searchable: true},
        {data: 'description', name: 'description', orderable: false, searchable: true},
        {data: 'action', name: 'action', orderable: false, searchable: false },
    ],
    language: {
        zeroRecords: "<div class='alert alert-info' style='background-color: #ccf6e4'>No matching hardware category(ies) found</div>",
        emptyTable: "<div class='alert alert-info' style='background-color: #ccf6e4'>No hardware category(ies) found</div>"
    },
});
