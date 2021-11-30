//validaçao dos campos
$(document).ready(function() {
    $("#form").validate({
        rules: {
            nome: {
                required: true,
                maxlength: 100,
                minlength: 10
            },
            idade: {
                required: true,
                maxlength: 100,
            },
            email: {
                required: true,
                email: true,
            },
            telefone: {
                required: false,
            }


        },
    })

    //envio com ajax


    $("#form").submit(function(e) {
        e.preventDefault();

        data = {
            nome: $("input[name='nome'").val(),
            idade: $("input[name='idade'").val(),
            email: $("input[name='email'").val(),
            telefone: $("input[name='telefone'").val(),
        };

        console.log(data);

        $.ajax({
            url: './envia.php',
            type: 'POST',
            data: data,
            success: function(data) {
                console.log(data);

            }
        });

    });

});

// tempo de preenchimento


function iniciartempo() {
    inicio = new Date();
};


function fimtempo() {
    fim = new Date();

    var tdecorrido = fim - inicio;

    tdecorrido /= 1000;

    var segundos = Math.round(tdecorrido);

    var time = ("tempo utilizado:" + segundos + "segundos");

    console.log(time)

};