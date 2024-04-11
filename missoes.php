<div id="tabula">
	<div id="tabula2" class="container">
		<div id="tabula3" class="row justify-content-md-center">
			<div id="tabula4" class="col-md-auto">
				</br></br></br>
				<table class="table table-bordered table-hover" id="missoes">
					<thead id="theadpaginas">
						<tr>
							<th id="tableth">ITEM</th>
							<th id="tableth">DESCRIÇÃO</th>
							<th id="tableth">TÉCNICO</th>
							<th id="tableth">PRAZO</th>
							<th id="tableth">STATUS</th>
							<th id="tableth">AÇÃO</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							while($linha = mysqli_fetch_array($consulta_missoes)){
						?>
						<?php
								echo '<tr>';	
									$descricao = $linha['descricao_missao'];
									echo '<td>'.$linha['id_missao'].'</td>';
									if(strlen($descricao) > 80){
										echo substr('<td>'.$descricao.'</td>', 0, 75) . "...";
									}
									else{
										echo '<td>'.$descricao.'</td>';
									}
									echo '<td>'.$linha['tecnico'].'</td>';
									echo '<td>'.$linha['prazo_missao'].'</td>';
									if ($linha['status_missao']=='em andamento'){
										echo '<td>'.'<span class="boch emandamento"></span>'.'<span id="warning">'.$linha['status_missao'].'</span>'.'</td>';
									}
									elseif ($linha['status_missao']=='concluído'){
										echo '<td>'.'<span class="boch concluido"></span>'.'<span id="sucess">'.$linha['status_missao'].'</span>'.'</td>';
									}
									elseif ($linha['status_missao']=='na fila'){
										echo '<td>'.'<span class="boch nafila"></span>'.'<span id="alert">'.$linha['status_missao'].'</span>'.'</td>';
									}
									elseif ($linha['status_missao']=='parado'){
										echo '<td>'.'<span class="boch parado"></span>'.'<span id="stop">'.$linha['status_missao'].'</span>'.'</td>';
									}	

									if(isset($_SESSION['login'])){													
						?>
										<td>				
											<div class="d-flex justify-content-around" id="divlermais">
												<div id="divlermais2">
													<a <?php echo 'data-nome="'.$descricao.'.'.'"' ?>
													id="tamanhoicon" class="delete"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >
														<i class="fa-solid fa-layer-group"></i>
													</a>
												</div>
												<div id="diveditar">
													<a id="tamanhoicon" href="?pagina=inserir_missao&editar=<?php echo $linha['id_missao']; ?>">
														<i class="fa-solid fa-file-pen"></i>
													</a>
												</div>
												<div id="divdeletar">
													<a id="tamanhoicon" href="deleta_missao.php?id_missao=<?php echo $linha['id_missao']; ?>" onclick="return confirm('Deseja mesmo deletar a missão?');">
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
													<a <?php echo 'data-nome="'.$descricao.'.'.'"' ?>
													id="tamanhoicon" class="delete"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >
														<i class="fa-solid fa-layer-group"></i>
													</a>
												</div>
												<div id="diveditar">
													<a id="tamanhoicon" href="?pagina=missoes">
														<i class="fa-solid fa-file-pen"></i>
													</a>
												</div>
												<div id="divdeletar">
													<a id="tamanhoicon" href="?pagina=missoes">
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
		<a class="btn btn-success" id="botaoinserir" href="?pagina=inserir_missao">INSERIR MISSÃO</a>
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
<?php include 'modal/modalmissoes.php'; ?>