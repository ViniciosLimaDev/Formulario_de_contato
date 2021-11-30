$(function() {
    $('#mensagem').hide();
})

$(function() {
    //pegando o envio e passando os resultados ao um array, sem que a pagina atualize
    $('#formularioenvio').submit(function(e) {
        e.preventDefault();
        var data = $(this).serializeArray();

        //valida os campos do formulário, chamando a função
        validateForm(data);
    });
});
//função pra validar o que vem do formulario
function validateForm(data) {
    //variavel que guarda o erro
    var error = [];
    //forech do jquery pega o elemento especifico que eu quero percorrer
    $.each(data, function(key, item) {
        //se o não houver telefone no primeiro campo ele passa para a segunda validação, se tiver ele passa direto
        if (item.name != "telefone") {

            startTime();

            if (item.value == "") {

                error.push(item.name + ": Preenchimento obrigatório!" + '<br>');

                $('#mensagem').show().html(error);

            }

        }
    });

    //se error estiver vazio, significa que não tem erro (todos os campos preenchidos)
    if (error.length == 0) {
        sendEmail(data);
    } else {
        console.log("Existe Erro");
    }
}

function sendEmail(data) {

    //envia os dados ao PHP
    $.ajax({
        url: './ajax/envia_email.php',
        type: 'POST',
        data: data,
        success: function(resp) {
            console.log(resp);
        }
    });
}

function startTime() {

    //inicia o tempo
    startTemp = new Date();

};

function endTime() {
    //finaliza o tempo com subtração com base no incio
    endTemp = new Date();

    var timeDiff = endTemp - startTemp;

    timeDiff /= 1000;

    var seconds = Math.round(timeDiff);

    var tempo = ("tempo utilizado: " + seconds + "segundos");

    alert(tempo);
}