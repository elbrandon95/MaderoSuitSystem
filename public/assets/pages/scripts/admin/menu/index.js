$(document).ready(function(){
    $("#nestable").nestable().on('change', function(){
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: '/admin/menu/saveOrden',
            type: 'POST',
            dataType: 'JSON',
            data: data,
            success: function(response){

            }
        });
    });
    $("#nestable").nestable('collapseAll');
    $("#deleteMenu").click(function(){
        swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest($(this).attr('href'));
            }
        });
        //ajaxRequest($(this).attr('href'));
    });
    function ajaxRequest(url) {
        $.ajax({
            type: 'GET', //THIS NEEDS TO BE GET
            url: url,
            dataType: 'json',
            ssuccess: function (respuesta) {
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