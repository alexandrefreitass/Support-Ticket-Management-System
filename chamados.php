<div id="tabula">
	<div id="tabula2" class="container">
		<div id="tabula3" class="row justify-content-md-center">
			<div id="tabula4" class="col-md-auto">
				</br></br></br>
				<table class="table table-bordered table-hover" id="chamados">
					<thead id="theadpaginas">
						<tr>
							<th id="tableth">ID</th>
							<th id="tableth">DATA</th>
							<th id="tableth" style="min-width: 100px;"><span class="resolucaogrande1">N° CHAMADO</span><span class="resolucaopequena1">N° CHAM</span></th>
							<th id="tableth"><span class="resolucaogrande2">ATENDENTE</span><span class="resolucaopequena2">ATEND</span></th>
							<th id="tableth"><span class="resolucaogrande2">SOLICITANTE</span><span class="resolucaopequena2">SOLIC</span></th>
							<th id="tableth">LOCAL</th>
							<th id="tableth">MOTIVO</th>
							<th id="tableth">AÇÃO</th>
						</tr>
					</thead>
					
					<tbody>
						<?php 
							while($linha = mysqli_fetch_array($consulta_chamados)){
						?>
						<?php
								echo '<tr>';	
									$motivo = $linha['motivo'];
									$reiteracoes = $linha['reiteracoes'];
									echo '<td>'.$linha['id_chamado'].'</td>';
									echo '<td >'.$linha['data_hora'].'</td>';
									echo '<td>'.$linha['numero_chamado'].'</td>';
									echo '<td >'.$linha['atendente'].'</td>';
									echo '<td >'.$linha['solicitante'].'</td>';
									echo '<td>'.$linha['local_chamado'].'</td>';
									if(strlen($motivo) > 50){
										echo substr('<td>'.$motivo.'</td>', 0, 55) . "...";
									}
									else{
										echo '<td>'.$motivo.'</td>';
									}

									if(isset($_SESSION['login'])){
						?>	
										<td>				
											<div class="d-flex justify-content-around" id="divlermais">
												<div id="divlermais2">
													<a <?php echo 'data-nome="'.$motivo.'.'.' Reiterações: '.$reiteracoes.'"' ?>
													id="tamanhoicon" class="delete"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >
														<i class="fa-solid fa-layer-group"></i>
													</a>
												</div>
												<div id="diveditar">
													<a id="tamanhoicon" href="?pagina=inserir_chamado&editar=<?php echo $linha['id_chamado']; ?>">
														<i class="fa-solid fa-file-pen"></i>
													</a>
												</div>
												<div id="divdeletar">
													<a id="tamanhoicon" href="deleta_chamado.php?id_chamado=<?php echo $linha['id_chamado']; ?>" onclick="return confirm('Deseja mesmo deletar o chamado?');">
														<span style="color: Tomato;"><i class="fa-solid fa-trash"></i></span>
													</a>
												</div>
											</div>
										</td>
									<?php
										echo '</tr>';
									}
									else{
									?>
										<td>
											<div class="d-flex justify-content-around" id="divlermais">
												<div id="divlermais2">
													<a <?php echo 'data-nome="'.$motivo.'.'.' Reiterações: '.$reiteracoes.'"' ?>
													id="tamanhoicon" class="delete"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >
														<i class="fa-solid fa-layer-group"></i>
													</a>
												</div>
												<div id="diveditar">
													<a id="tamanhoicon" href="?pagina=chamados">
														<i class="fa-solid fa-file-pen"></i>
													</a>
												</div>
												<div id="divdeletar">
													<a id="tamanhoicon" href="?pagina=chamados">
														<span style="color: Tomato;"><i class="fa-solid fa-trash"></i></span>
													</a>
												</div>
											</div>			
										</td>						
									<?php
										echo '</tr>';
									}
							}	
									?>											
					</tbody>
				</table>
			</div>
		</div>
	</div>	
	</br></br>					

	<div class="text-center">
		<a class="btn btn-success" id="botaoinserir" href="?pagina=inserir_chamado">INSERIR CHAMADO</a>
	</div>

</div>
	<!-- EXIBI RESOLUÇÃO DA MÁQUINA 
	<div id="idDoDivQueMostraResolucao"></div>
	<script>
		document.getElementById('idDoDivQueMostraResolucao').innerHTML = 'Total width/height: ' + screen.width + 'x' + screen.height;
	</script>
	-->
<!-- Script Modal -->
<script src="js/modal.lermais.js"></script>
<!-- Modal -->
<?php include 'modal/modalchamados.php'; ?>