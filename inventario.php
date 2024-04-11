<div id="tabula">
	<div id="tabula2" class="container">
		<div id="tabula3" class="row justify-content-md-center">
			<div id="tabula4" class="col-md-auto">
				</br></br></br>
				<table class="table table-bordered table-hover" id="inventario">
					<thead id="theadpaginas">
						<tr>
							<th id="tableth">ITEM</th>
							<th id="tableth">NOME ITEM</th>
							<th id="tableth">DESCRIÇÃO ITEM</th>
							<th id="tableth"><span class="resolucaogrande1">N° SÉRIE</span><span class="resolucaopequena1">N° SÉR</span></th>
							<th id="tableth"><span class="resolucaogrande1">N° PATRIMÔNIO</span><span class="resolucaopequena1">N° PAT</span></th>
							<th id="tableth">LOCAL</th>
							<th id="tableth">AÇÃO</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							while($linha = mysqli_fetch_array($consulta_inventario)){
						?>
						<?php
								echo '<tr>';
									$descricao = $linha['detalhes_item'];
									echo '<td >'.$linha['id_item'].'</td>';
									echo '<td >'.$linha['nome_item'].'</td>';
									if(strlen($descricao) > 70){
										echo substr('<td>'.$descricao.'</td>', 0, 65) . "...";
									}
									else{
										echo '<td>'.$descricao.'</td>';
									}
									echo '<td >'.$linha['nserie_item'].'</td>';
									echo '<td >'.$linha['patrimonio_item'].'</td>';
									echo '<td>'.$linha['local_item'].'</td>';

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
													<a id="tamanhoicon" href="?pagina=inserir_inventario&editar=<?php echo $linha['id_item']; ?>">
														<i class="fa-solid fa-file-pen"></i>
													</a>
												</div>
												<div id="divdeletar">
													<a id="tamanhoicon" href="deleta_inventario.php?id_item=<?php echo $linha['id_item']; ?>" onclick="return confirm('Deseja mesmo deletar o item?');">
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
													<a id="tamanhoicon" href="?pagina=inventario">
														<i class="fa-solid fa-file-pen"></i>
													</a>
												</div>
												<div id="divdeletar">
													<a id="tamanhoicon" href="?pagina=inventario">
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

	<?php
	if(isset($_SESSION['login'])){
	?>
		<div class="text-center">
			<a class="btn btn-success" id="botaoinserir" href="?pagina=inserir_inventario">INSERIR ITEM</a>
		</div>
	<?php
	}
	else{
	?>	
		<div class="text-center">
			<a class="btn btn-success" id="botaoinserir" href="?pagina=inventario">INSERIR ITEM</a>
		</div>	
	<?php
	}
	?>	
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
<?php include 'modal/modalinventario.php'; ?>
