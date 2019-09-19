$(document).ready(function() {
    SystemValidator.validateGeneral('form-general');
    $('#icono').on('blur', function(){
        $('#show-icono').removeClass().addClass('fa fa-fw ' + $(this).val());
    });
});