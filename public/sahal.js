$(document).ready(function () {
    $(document).on('submit', 'form', function (event) {
        var _this = $(this);
        event.preventDefault(); // Totally stop stuff happening

        var formData = new FormData($(this)[0]);
        console.log(formData);

        var action = $(this).attr('action');
        var method = $(this).attr('method');
        $.ajax({
            url: action,
            type: method,
            data: formData,
            contentType: false,
            processData: false,
            success: function (msg) {
                if(msg.message){

                swal("تنبيه!", msg.message, "error");}
                else {
                    swal("تم!", msg, "success");
                }
                $('input[type="text"]').val('');

            }

        })



    })
})





