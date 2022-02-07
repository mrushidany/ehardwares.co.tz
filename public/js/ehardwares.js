$('.save_new_user').on('click', function() {
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

$('.save_hardware_category').on('click', function() {
    $('.loading_button').removeAttr('style');
});
