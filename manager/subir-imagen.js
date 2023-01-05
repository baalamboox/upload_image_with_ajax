$(document).ready(() => {
    $("#boton_subir").click(() => {
        let datos_formulario = new FormData();
        let archivos = $('#imagen')[0].files[0];
        datos_formulario.append('file', archivos);
        $.ajax({
            url: 'control/subir-imagen.php',
            type: 'post',
            data: datos_formulario,
            contentType: false,
            processData: false,
            success: resultado => {
                if (resultado != 0) {
                    $(".card-img-top").attr("src", resultado);
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
    });
});