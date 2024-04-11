
<div id="tabula">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				</br></br></br>
				<table class="table table-bordered table-hover" id="chamados" style="border: 1px solid gray; border-collapse: collapse;">
					<thead style="background-color:  #6c757d;">
						<tr>
							<th style="max-width: 20px;">ID</th>
							<th style="min-width: 94px;">DATA HORA</th>
							<th style="min-width: 106px;">N° CHAMADO</th>
							<th>ATENDENTE</th>
							<th>SOLICITANTE</th>
							<th style="min-width: 130px;">LOCAL</th>
							<th style="min-width: 130px;">MOTIVO</th>
							<th>AÇÃO</th>
						</tr>
					</thead>
					
					<tbody>
					<script>
						$(document).ready(function(){
							
							txt = document.getElementById("texto-principal-noticia1").innerHTML;
							txt2 = txt.substr(0,50)+'...';
							document.getElementById("texto-principal-noticia1").innerHTML = txt2;
							
							console.log(document.getElementById("texto-principal-noticia1").innerHTML);

							if(txt<txt2){
								document.getElementById("texto-principal-noticia1").innerHTML = txt;
								document.getElementById('link-noticia1').innerHTML = '2'; 
							}else{
								document.getElementById("texto-principal-noticia1").innerHTML = txt2;
								document.getElementById('link-noticia1').innerHTML = '1'; 
								}
						});
									
							function Mostrar1(){
								if(document.getElementById('link-noticia1').innerHTML == '1'){
									document.getElementById("texto-principal-noticia1").innerHTML = txt;
									document.getElementById('link-noticia1').innerHTML = '2'; 
								}else{
									document.getElementById("texto-principal-noticia1").innerHTML = txt2;
									document.getElementById('link-noticia1').innerHTML = '1'; 
								}
							}
						</script>


						<?php 
							while($linha = mysqli_fetch_array($consulta_chamados)){
						?>
						
						<?php
								
								echo '<tr><td>'.$linha['id_chamado'].'</td>';
								echo '<td >'.$linha['data_hora'].'</td>';
								echo '<td >'.$linha['numero_chamado'].'</td>';
								echo '<td >'.$linha['atendente'].'</td>';
								echo '<td >'.$linha['solicitante'].'</td>';
								echo '<td>'.$linha['local_chamado'].'</td>';
								echo '<td id="texto-principal-noticia'.$linha['id_chamado'].'">'.$linha['motivo'].'</td>';
						?>
						
							<?php
							if(isset($_SESSION['login'])){
							?>
								
								<td>
								
									<div class="d-flex justify-content-around" style="width: 100%; padding: 0; margin: 0;">
										<div style="margin-right: 6px;">
											<a <?php echo 'data-nome="'.$linha['motivo'].'. Reiterações: '.$linha['reiteracoes'].'"' ?> <?php echo 'data-id="'.$linha['id_chamado'].'"' ?> id="tamanhoicon" class="delete"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter" ><i class="fa-solid fa-layer-group"></i></a>
										</div>
										<div style="margin-right: 4px;">
											<a id="tamanhoicon" href="?pagina=inserir_chamado&editar=<?php echo $linha['id_chamado']; ?>">
											<i class="fa-solid fa-file-pen"></i></a>
										</div>
										<div style=" margin-right: 3px;">
											<a id="tamanhoicon" href="deleta_chamado.php?id_chamado=<?php echo $linha['id_chamado']; ?>">
											<span style="color: Tomato;"><i class="fa-solid fa-trash"></i></span></a>
										</div>
									</div>
									<?php
							
									?>
								</td>
								</tr>				

								<!-- Script Modal -->
								<script>
								$('.delete').on('click', function(){
									var nome = $(this).data('nome'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
									var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
									$('span.nome').text(nome+ ' (id = ' +id+ ')'); // inserir na o nome na pergunta de confirmação dentro da modal
									$('a.delete-yes').attr('href', 'apagar.php?id=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
									$('#myModal').modal('show'); // modal aparece
								});
								</script>

								<!-- Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Motivo</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<span class="nome"></span>
									</div>
									<div class="modal-footer">
										<a href="#" type="button" class="btn btn-default delete-yes">Sim</a>
										<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
									</div>
									</div>
								</div>
								</div>	
								


							<?php
							}
							else{
							?>
								<td><a href="?pagina=chamados">
								<i class="fa-solid fa-file-pen"></i></a>
								<a href="?pagina=chamados">
								<span style="color: Tomato;"><i class="fa-solid fa-trash"></i></span>
								</a></td>
								</tr>
							<?php
							}
							?>
								
								
						<?php		
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	
	</br></br>					

	<?php
	if(isset($_SESSION['login'])){
	?>
		<div class="text-center">
			<a class="btn btn-success" id="botaoinserir" href="?pagina=inserir_chamado">INSERIR CHAMADO</a>
		</div>
	<?php
	}
	else{
	?>	
    	<div class="text-center">
			<a class="btn btn-success" id="botaoinserir" href="?pagina=chamados">INSERIR CHAMADO</a>
		</div>
	<?php
	}
	?>
</div>
