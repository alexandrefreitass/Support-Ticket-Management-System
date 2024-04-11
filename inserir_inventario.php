<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo item</h1>
<form method="post" action="processa_inventario.php">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Nome item:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="nome_item" maxlength="20" placeholder="Insira o nome do item">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Detalhes item:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="detalhes_item" maxlength="20" placeholder="Insira detalhes do item">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">N° Série:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="nserie_item" maxlength="15" placeholder="Insira n° série do item">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">N° Patrimônio:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="patrimonio_item" maxlength="15" placeholder="Insira patrimônio do item">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Local:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="local_item" maxlength="20" placeholder="Insira local do item">
    </br></br>
    <input class="btn btn-success" id="botaoinserir" type="submit" value="INSERIR ITEM">
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_inventario)){ ?>
        <?php if($linha['id_item'] == $_GET['editar']){ ?>

        <h1>Editar item</h1>
        <form method="post" action="edita_inventario.php">
            <!--fica escondido o id-->
            <input class="form-control" type="hidden" name="id_item" value="<?php echo $linha['id_item']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Nome item:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="nome_item" maxlength="20" placeholder="Edita o nome do item"
            value="<?php echo $linha['nome_item']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Detalhes item:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="detalhes_item" maxlength="20" placeholder="Edita detalhes do item"
            value="<?php echo $linha['detalhes_item']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">N° Serie:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="nserie_item" maxlength="15" placeholder="Edita quantidade do item"
            value="<?php echo $linha['nserie_item']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">N° Patrimônio:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="patrimonio_item" maxlength="15" placeholder="Edita patrimônio do item"
            value="<?php echo $linha['patrimonio_item']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Local:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="local_item" maxlength="20" placeholder="Edita local do item"
            value="<?php echo $linha['local_item']; ?>">
            </br></br>
            <input class="btn btn-success" id="botaoinserir" type="submit" value="EDITA ITEM">
        </form>

        <?php } ?>
    <?php } ?>
<?php } ?>

<script type="text/javascript" src="js/jquery214.js"></script>
<script src="js/locastyle.js" type="text/javascript"></script>