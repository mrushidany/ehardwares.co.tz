<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
      var container = document.querySelector('[data-layout]');
      container.classList.remove('container');
      container.classList.add('container-fluid');
    }

    var navbarStyle = localStorage.getItem("navbarStyle");
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
      }

      var navbarPosition = localStorage.getItem('navbarPosition');
      var navbarVertical = document.querySelector('.navbar-vertical');
      var navbarTopVertical = document.querySelector('.content .navbar-top');
      var navbarTop = document.querySelector('[data-layout] .navbar-top');
      var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
      if (navbarPosition === 'top') {
        navbarTop.removeAttribute('style');
        navbarTopVertical.remove(navbarTopVertical);
        navbarVertical.remove(navbarVertical);
        navbarTopCombo.remove(navbarTopCombo);
      } else if (navbarPosition === 'combo') {
        navbarVertical.removeAttribute('style');
        navbarTopCombo.removeAttribute('style');
        navbarTop.remove(navbarTop);
        navbarTopVertical.remove(navbarTopVertical);
      } else {
        navbarVertical.removeAttribute('style');
        navbarTopVertical.removeAttribute('style');
        navbarTop.remove(navbarTop);
       // navbarTopCombo.remove(navbarTopCombo);
      }

    /*
 Notifications Sections
*/
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

/*
 End of notifications sections
*/

/*
 CRUD functions sections
*/
function destroy() {
    alert("We are here");
}

/*
 End of CRUD functions sections
*/

/*
 Defined functions sections
*/
//Ajax Setup function
function ajax_setup(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
}

/*
 End of defined functions sections
*/


/*
 Users sections
*/
$('.all_users_table').DataTable({
    serverSide: true,
    processing: true,
    lengthMenu: [[10, 25, 50], [10, 25, 50]],
    ajax: {
        url: "route('all_users_list')",
    },
    columns: [
        {data: 'name', name: 'name', orderable: true, searchable: true},
        {data: 'email', name: 'email', orderable: true, searchable: true},
        {data: 'phone_number', name: 'phone_number', orderable: true, searchable: true},
        {data: 'role', name: 'role', orderable: true, searchable: true},
        {data: 'action', name: 'action', orderable: false, searchable: false },
    ],
    language: {
        zeroRecords: "<div class='alert alert-info' style='background-color: #ccf6e4'>No matching user(s) found</div>",
        emptyTable: "<div class='alert alert-info' style='background-color: #ccf6e4'>No user(s) found</div>"
    },
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

        }
    })
})

/*
 End of defined functions sections
*/

/*
 Hardware sections
*/
$('.hardware_categories_table').DataTable({
    serverSide: true,
    processing: true,
    lengthMenu: [[10, 25, 50], [10, 25, 50]],
    ajax: {
        url: "{{ route('hardware_category_list') }}",
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

        ajax_setup();

        $.ajax({
            url: "{{ route('save_hardware_category') }}",
            method: "POST",
            data:
            {
                name : name,
                description : description,
             },
            success: function(data) {
                $('form').trigger('reset');
                $('.close').click();
                $('.save_hardware_category').removeAttr('style');
                $('.reset_hardware_category').removeAttr('style');
                $('.loading_button').attr('style','display: none;');
                $('.hardware_categories_table').DataTable().draw();
                toast(data.type, data.title, data.message);
            }
        })
    }
});

$('.hardware_sub_categories_table').DataTable({
    serverSide: true,
    processing: true,
    lengthMenu: [[10, 25, 50], [10, 25, 50]],
    ajax: {
        url: "{{ route('hardware_sub_category_list') }}",
    },
    columns: [
        {data: 'name', name: 'name', orderable: true, searchable: true},
        {data: 'description', name: 'description', orderable: false, searchable: true},
        {data: 'action', name: 'action', orderable: false, searchable: false },
    ],
    language: {
        zeroRecords: "<div class='alert alert-info' style='background-color: #ccf6e4'>No matching hardware category(ies) found</div>",
        emptyTable: "<div class='alert alert-info' style='background-color: #ccf6e4'>No hardware category(ies) found</div>"
    },
});

$('.save_hardware_sub_category').on('click', function(e) {
    e.preventDefault();

    var button = $(this);
    var form = button.closest('form');
    var main_category = form.find('select[name="main_category_id"]').val();
    var name = form.find('input[name="name"]').val();
    var description = form.find('textarea[name="description"]').val();

    if(main_category !== '' && name !== '' && description !== ''){
        $(this).attr('style', 'display: none;');
        $('.reset_hardware_sub_category').attr('style', 'display: none;');
        $('.loading_button').removeAttr('style');

        ajax_setup();

        $.ajax({
            url: "{{ route('save_hardware_sub_category') }}",
            method: "POST",
            data:
            {
                main_category : main_category,
                name : name,
                description : description,
             },
            success: function(data) {
                $('form').trigger('reset');
                $('.close').click();
                $('.save_hardware_sub_category').removeAttr('style');
                $('.reset_hardware_sub_category').removeAttr('style');
                $('.loading_button').attr('style','display: none;');
                $('.hardware_sub_categories_table').DataTable().draw();
                toast(data.type, data.title, data.message);
            }
        })
    }
});

function delete_hardware_sub_category(){
    Swal.fire({
        title: 'Do you want to delete this sub category?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Delete',
        denyButtonText: `Don't delete`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire('Deleted!', '', 'success')
        } else if (result.isDenied) {
          Swal.fire('Sub category is not deleted', '', 'info')
        }
      })
}



/*
 End of hardware sections
*/

/*
 Settings sections
*/
$('.db_migrate').on('click', function (e) {
    e.preventDefault();

    ajax_setup();

    $.ajax({
        url: "{{ route('db_migrate') }}",
        method: "POST",

        success: function(data) {
            toast(data.type, data.title, data.message);
            console.log(data)
        }
    })
})

$('.dg_migrate_rollback').on('click', function (e) {
    e.preventDefault();

    ajax_setup();

    $.ajax({
        url: "{{ route('db_migrate_rollback') }}",
        method: "POST",

        success: function(data) {
            toast(data.type, data.title, data.message);
        }
    })
})

$('.clear_cache').on('click', function(e) {
    e.preventDefault();

    ajax_setup();

    $.ajax({
        url: "{{ route('clear_cache') }}",
        method: "POST",

        success: function(data) {
            toast(data.type, data.title, data.message);
        }

    })
})

/*
 End of settings sections
*/

</script>
