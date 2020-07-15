$(function() {
    $('#vermais').click( function() {
        var qdd = $('#exibition').val();

        var dados = {
            btn_show_mensagens : true,
            number : qdd
        }

        $.post('../controllers/ControllerMotivo.php', dados, function(retorna) {
            $('#show_mensagens').append(retorna);
            $('#exibition').val(parseInt(qdd)+3);

            $.post('../controllers/ControllerMotivo.php', {total_mensagens:true}, function(maximo_msg) {
                if(parseInt(qdd)+3 > maximo_msg) {
                    $('#vermais').remove();
                }
            });
        });
    });
});