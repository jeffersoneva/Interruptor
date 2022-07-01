$(document).ready(function(){

    var estado = document.getElementById('estado');
    $('#onoff1').on('change', function() {
        var el = this;
        estado.innerHTML = el.checked ? 'Ligado' : 'Desligado';
    
        $.ajax({
            url: "suaPagina.php",
            data: {
                estado: this.checked
            }
        }).done(function(msg) {
            if (msg == 'failed') return el.checked = !el.checked; // caso o servidor retorne "failed", voltar o estado do botão
        });
    });

});


