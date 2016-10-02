/**
 * Created by Tega on 15/09/2016.
 */

$(document).ready(function () {
    $('#registrationForm').submit(function (event) {
        event.preventDefault();
        event.stopPropagation();

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serializeArray()
        }).done(function (res) {
            console.log(res);
            if (res.success === 0 || res === undefined) {
                var response = '';

                $.each(res.errors, function (index, value) {
                    response += value;
                    response += '<br/>';
                });

                $('.alert').html(response).removeClass('hide');

                return false;
            }

            window.location.href = res.url;

        })
    })

    $('.account_type button').click(function (e) {
        var parent = $(this).parent('.account_type');
        parent.find('button').removeClass('btn-success');
        $(this).addClass('btn-success');
        parent.find(':input').val($(this).data('value'));
    });
});
