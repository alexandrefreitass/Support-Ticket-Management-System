<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>SERVIÇOS</title>
	<!-- css -->
	<link rel="stylesheet" href="progresso.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- js -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquerymin211.js"></script>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="js/fontawesome.js"></script>
</head>

<body>
	<?php if(isset($_SESSION['login'])){ ?>
	<header>
		<div id="headercontainer">
			<div class="d-flex justify-content-around">
				<div id="menuheader">
					<a href="?pagina=home"><img src="img/logocopom.png" title="Logo" alt="Logo"></a>
				</div>
				<div id="menuheader" class="align-self-center">
					<h3 style="color: white;">Controle de Serviços Telemática</h3>
				</div>
				<div id="menuheader">
					<div class="d-flex justify-content-center" id="divlogin">
						<div class="align-self-center" id="loginheader" style="text-align: right;">
							<a id="textologinheader" href="logout.php">
								<span id="nomeuserheader"><?php echo $_SESSION['usuario']; ?></span>
								<span >(sair)</span>
							</a>			
						</div>
						<div id="loginheader" style="text-align: left;">
							<img src="img/login.png" class="attachment-full size-full" alt="login" loading="lazy">
						</div>
					</div>
				</div>
			</div>	
			<div id="divmenuheader" class="d-flex justify-content-around">
				<div id="menu">
					<a href="?pagina=missoes">Missões</a>
					<a href="?pagina=chamados">Chamados</a>
					<!--<a href="?pagina=inventario">Inventário</a>-->
				</div>
			</div>		
		</div>
	</header>

	<?php } else {?>
	<header>
		<div id="headercontainer">
			<div class="d-flex justify-content-around">
				<div id="menuheader">
					<a href="?pagina=home"><img src="img/logocopom.png" title="Logo" alt="Logo"></a>
				</div>
				<div id="menuheader" class="align-self-center">
					<h3 style="color: white;">Controle de Serviços Telemática</h3>
				</div>
				<div id="menuheader">
					<div class="d-flex justify-content-center" id="divlogin">
						<div class="align-self-center" id="loginheader" style="text-align: right;">
							<a>
								<button id="botaologinheader" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span id="nomeuserheader2">Entrar</span></button>
							</a>			
						</div>
						<div id="loginheader" style="text-align: left;">
							<img src="img/login.png" class="attachment-full size-full" alt="login" loading="lazy">
						</div>
					</div>
				</div>
			</div>	
			<div id="divmenuheader" class="d-flex justify-content-around">
				<div id="menu">
					<a href="?pagina=missoes">Missões</a>
					<a href="?pagina=chamados">Chamados</a>
					<!--<a href="?pagina=inventario">Inventário</a>-->	
				</div>
			</div>
			
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Preencha</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form method="post" action="login.php">
								<label class="badge text-bg-light">usuário:</label>
								<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
								</br>
								<label class="badge text-bg-light">senha:</label>
								<input type="password" name="senha" placeholder="Digite a senha" class="form-control">
								</br>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
									<input type="submit" value="Entrar" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</header>
	<?php } ?>
</body>
</html>	