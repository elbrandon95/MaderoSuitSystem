$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function () {
        event.preventDefault();
        const form = $(this);
        swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest(form);
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (respuesta) {
                if (respuesta.message == "ok") {
                    form.parents('tr').remove();
                    SystemValidator.notifications('El registro fue eliminado correctamente', 'Madero Suit', 'success');
                } else {
                    SystemValidator.notifications('El registro no pudo ser eliminado, hay recursos usandolo', 'Madero Suit', 'error');
                }
            },
            error: function () {

            }
        });
    }
});