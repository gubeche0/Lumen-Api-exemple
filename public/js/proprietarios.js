

$(function(){
    obterProprietarios();
    $('#cancelar').click(function() {
        cancelarForm();
    })
    $('#salvar').click(function() {
        saveForm();
    });
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
    $("#query").quicksearch('table tbody tr')
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

function editar(id){
    cleanForm();
    $('#listagem').hide();
    $('#form').show();

    if(id != null){
        $.ajax({
            url: '/api/proprietario/' + id,
            type: 'get',
            success: function(data) {
                console.log(data);
                preencherForm(data);
            }
        });
    }

}

function cleanForm(){
    $('#id').val('');
    $('#name').val('');
    $('#lastname').val('');
    $('#phone').val('');
    $('#cnh').val('');
}

function cancelarForm(){
    cleanForm();
    $('#form').hide();
    $('#listagem').show();
}

function preencherForm(data){
    $('#id').val(data.id);
    $('#name').val(data.name);
    $('#lastname').val(data.lastName);
    $('#phone').val(data.phone);
    $('#cnh').val(data.cnh);
}

function saveForm(){
    if($('#id').val() != ''){
        var method = 'put';
        var url = '/api/proprietario/' + $('#id').val();
    }else{
        var method = 'post';
        var url = '/api/proprietario/';
    }
    
    $.ajax({
        url: url,
        type: method,
        data: $('form').serialize(),
        success: function(data) {
            updateProprietarios();
            cancelarForm();
        }
    });
}