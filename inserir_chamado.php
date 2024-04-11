<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo chamado</h1>
<form method="post" action="processa_chamado.php">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Data Hora:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="data_hora" maxlength="11" placeholder="Insira a data hora">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Número chamado:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="numero_chamado" maxlength="20" placeholder="Insira número chamado">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Atendente:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="atendente" maxlength="15" placeholder="Insira atendente">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Solicitante:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="solicitante" maxlength="15" placeholder="Insira solicitante">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Local:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="local_chamado" maxlength="30" placeholder="Insira local chamado">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Motivo:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="motivo" maxlength="80" placeholder="Insira motivo">
    </br>
    <label class="badge text-bg-light" id="labelinserirmissao">Reiterações:</label></br>
    <input data-ls-module="charCounter" class="form-control" type="text" name="reiteracoes" maxlength="80" placeholder="Insira reiterações">
    </br></br>
    <input class="btn btn-success" id="botaoinserir" type="submit" value="INSERIR CHAMADO">
</form>


<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_chamados)){ ?>
        <?php if($linha['id_chamado'] == $_GET['editar']){ ?>

        <h1>Editar chamado</h1>
        <form method="post" action="edita_chamado.php">
            <!--fica escondido o id-->
            <input class="form-control" type="hidden" name="id_chamado" value="<?php echo $linha['id_chamado']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Data Hora:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="data_hora" maxlength="11" placeholder="Editar a data hora" 
            value="<?php echo $linha['data_hora']; ?>">
            </br></br>
            <label class="badge text-bg-light" id="labelinserirmissao">Número chamado:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="numero_chamado" maxlength="20" placeholder="Editar número chamado" 
            value="<?php echo $linha['numero_chamado']; ?>">
            </br></br>
            <label class="badge text-bg-light" id="labelinserirmissao">Atendente:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="atendente" maxlength="15" placeholder="Editar atendente" 
            value="<?php echo $linha['atendente']; ?>">
            </br></br>
            <label class="badge text-bg-light" id="labelinserirmissao">Solicitante:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="solicitante" maxlength="15" placeholder="Editar solicitante" 
            value="<?php echo $linha['solicitante']; ?>">
            </br></br>
            <label class="badge text-bg-light" id="labelinserirmissao">Local:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="local_chamado" maxlength="30" placeholder="Editar local_chamado" 
            value="<?php echo $linha['local_chamado']; ?>">
            </br></br>
            <label class="badge text-bg-light" id="labelinserirmissao">Motivo:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="motivo" maxlength="80" placeholder="Editar motivo" 
            value="<?php echo $linha['motivo']; ?>">
            </br></br>
            <label class="badge text-bg-light" id="labelinserirmissao">Reiterações:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="reiteracoes" maxlength="80" placeholder="Editar reiteracoes" 
            value="<?php echo $linha['reiteracoes']; ?>">
            </br></br>
            <input class="btn btn-success" id="botaoinserir" type="submit" value="EDITA CHAMADO">
        </form>

        <?php } ?>
    <?php } ?>
<?php } ?>

<script type="text/javascript" src="js/jquery214.js"></script>
<script src="js/locastyle.js" type="text/javascript"></script>