

$(function(){
    obterProprietarios();
});


function updateProprietarios(){
    $('#listagem table tbody').html('');
    obterProprietarios();
}

function obterProprietarios(){
    
    $.ajax({
        url: '/api/proprietarios',
        type: 'get',
        success: function(data) {
            montarTabelaProprietarios(data);
        }
      });
}

function montarTabelaProprietarios(dados){
    var tabela = $('#listagem table tbody');
    $.each(dados, function(index, value){
        var tr = $('<tr>');
        tr.append($('<td>').html(value['id']));
        tr.append($('<td>').html(value['name']));
        tr.append($('<td>').html(value['lastName']));
        tr.append($('<td>').html(value['phone']));
        tr.append($('<td>').append(
            $('<a>', {'class': 'text-dark', 'href': '#', 'onclick': 'editar(' + value['id'] + ')'}).append(
                $('<i>', {'class': 'fas fa-edit', 'aria-hidden': 'true'})
            ).append('Editar')
        ).append(
            ' | '
        ).append(
            $('<a>', {'class': 'text-dark','href': '#', 'onclick': 'excluir(' + value['id'] + ')'}).append(
                $('<i>', {'class': 'fas fa-trash', 'aria-hidden': 'true'})
            ).append('Excluir')
        ));
        

        tabela.append(tr);
    });
}


function excluir(id) {
    var resposta = confirm("Deseja deletar a categoria???");
    if (resposta == true) {
        $.ajax({
            url: '/api/proprietario/' + id,
            type: 'delete',
            success: function(data) {
                console.log(data);
                updateProprietarios();
            }
        });
    }
}