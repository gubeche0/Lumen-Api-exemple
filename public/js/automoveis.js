

$(function(){
    
    obterAutomoveis();
    $('#cancelar').click(function() {
        cancelarForm();
    })
    $('#salvar').click(function() {
        saveForm();
    });
    $.ajax({
        url: '/api/proprietarios',
        type: 'get',
        success: function(data) {
            $.each(data, function (index, value){ 
                $('#propietario').append(
                    $('<option>', {'value' : value['id']}).append(value['name'])
                );
            });
        }
      });
});


function updateAutomoveis(){
    $('#listagem table tbody').html('');
    obterAutomoveis();
}

function obterAutomoveis(){
    
    $.ajax({
        url: '/api/automoveis',
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
        tr.append($('<td>').html(value['placa']));
        tr.append($('<td>').html(value['descricao']));
        tr.append($('<td>').html(value['cor']));
        tr.append($('<td>').html(value['km']));
        tr.append($('<td>').html(value['ano']));
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
            url: '/api/automovel/' + id,
            type: 'delete',
            success: function(data) {
                console.log(data);
                updateAutomoveis();
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
            url: '/api/automovel/' + id,
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
    $('#placa').val('');
    $('#descricao').val('');
    $('#cor').val('');
    $('#km').val('');
    $('#ano').val('');
    $('#propietario option').removeAttr('selected');
    
}

function cancelarForm(){
    cleanForm();
    $('#form').hide();
    $('#listagem').show();
}

function preencherForm(data){
    console.log(data);
    $('#id').val(data.id);
    $('#placa').val(data.placa);
    $('#descricao').val(data.descricao);
    $('#cor').val(data.cor);
    $('#km').val(data.km);
    $('#ano').val(data.ano);
    $('#propietario option[value='+ data.proprietario_id +']').attr('selected','selected');
}

function saveForm(){
    if($('#id').val() != ''){
        var method = 'put';
        var url = '/api/automovel/' + $('#id').val();
    }else{
        var method = 'post';
        var url = '/api/automovel/';
    }
    
    $.ajax({
        url: url,
        type: method,
        data: $('form').serialize(),
        success: function(data) {
            console.log(data);
            updateAutomoveis();
            cancelarForm();
        }
    });
}