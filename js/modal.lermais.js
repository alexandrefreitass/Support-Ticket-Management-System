$('.delete').on('click', function(){
    var nome = $(this).data('nome'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
    $('span.nome').text(nome); // inserir na o nome na pergunta de confirmação dentro da modal
    $('#staticBackdrop').modal('show'); // modal aparece
});