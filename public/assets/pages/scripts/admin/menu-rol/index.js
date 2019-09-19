$('.menu_rol').on('change', function () {
    var data = {
        idMenu: $(this).data('menuid'),
        idRol: $(this).val(),
        _token: $('input[name=_token]').val()
    };
    if ($(this).is(':checked')) {
        data.estado = 1
    } else {
        data.estado = 0
    }
    ajaxRequest('/admin/menurol', data);
});

function ajaxRequest (url, data) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (respuesta) {
            SystemValidator.notifications(respuesta.respuesta, 'Madero Suit', 'success');
        },
        error: function(respuesta)
        {
            SystemValidator.notifications(respuesta.respuesta, 'Madero Suit', 'success');
        }
    });
}