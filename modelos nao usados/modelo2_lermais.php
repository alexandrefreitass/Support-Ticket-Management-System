
<style>
    td {
        min-width: 80px;
    }
</style>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<table>
<tr>
  <td>
nome1
  </td>
  <td>
telefone1
  </td>
  <td>
email1
  </td>
  <td>
endereço1
  </td>
  <td><button data-nome="nome1" data-id="1" class="delete btn btn-xs btn-primary">Apagar</button>
</tr>
<tr>
 <td>
nome2
  </td>
  <td>
telefone2
  </td>
  <td>
email2
  </td>
  <td>
endereço2
  </td>
  <td><button data-nome="nome2" data-id="2" class="delete btn btn-xs btn-primary">Apagar</button>
</tr>
<tr>
  <td>
nome3
  </td>
  <td>
telefone3
  </td>
  <td>
email3
  </td>
  <td>
endereço3
  </td>
  <td>
  <button data-nome="nome3" data-id="3" type="button" class="delete btn btn-xs btn-primary">Apagar</button>
  </td>
</tr>

</table>

<script>
    $('.delete').on('click', function(){
        var nome = $(this).data('nome'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
        var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
        $('span.nome').text(nome+ ' (id = ' +id+ ')'); // inserir na o nome na pergunta de confirmação dentro da modal
        $('a.delete-yes').attr('href', 'apagar.php?id=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
        $('#myModal').modal('show'); // modal aparece
    });
</script>

<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Modal Header</h4>
    </div>
    <div class="modal-body">
      Deseja mesmo apagar <span class="nome"></span>
    </div>
    <div class="modal-footer">
      <a href="#" type="button" class="btn btn-default delete-yes">Sim</a>
      <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
    </div>
</div>
</div>
</div>