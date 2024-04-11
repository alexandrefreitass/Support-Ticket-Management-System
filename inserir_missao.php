<?php if(!isset($_GET['editar'])){ ?>

    <h1>Inserir nova missão</h1>
    <form method="post" action="processa_missao.php">
        </br>
        <label class="badge text-bg-light" id="labelinserirmissao">Descrição missão:</label></br>
        <input data-ls-module="charCounter" class="form-control" type="text" name="descricao_missao" maxlength="80" placeholder="Insira a descrição da missão">
        </br>
        <label class="badge text-bg-light" id="labelinserirmissao">Técnico da missão:</label></br>
        <select class="form-control" name="tecnico" id="selectinserirmissao">
            <option value="Alexandre">Alexandre</option>
            <option value="Alan">Alan</option>
            <option value="C. Lopes">C. Lopes</option>
            <option value="Dittz">Dittz</option>
            <option value="Ponciano">Ponciano</option>
        </select>

        </br>
        <label class="badge text-bg-light" id="labelinserirmissao">Prazo missão:</label></br>
        <input data-ls-module="charCounter" class="form-control" type="text" name="prazo_missao" maxlength="15" placeholder="Insira prazo da missão">
        </br>
        <label class="badge text-bg-light" id="labelinserirmissao">Status missão:</label></br>
        <select class="form-control" name="status_missao" id="selectinserirmissao">
            <option value="em andamento">em andamento</option>
            <option value="concluído">concluído</option>
            <option value="na fila">na fila</option>
            <option value="parado">parado</option>
        </select>
        </br></br></br>
        <input class="btn btn-success" id="botaoinserir" type="submit" value="INSERIR MISSÃO">
    </form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_missoes)){ ?>
        <?php if($linha['id_missao'] == $_GET['editar']){ ?>

        <h1>Editar missão</h1>
        <form method="post" action="edita_missao.php">
            <!--fica escondido o id-->
            <input class="form-control" type="hidden" name="id_missao" value="<?php echo $linha['id_missao']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Descrição missão:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="descricao_missao" maxlength="80" placeholder="Edita o nome da missão" 
            value="<?php echo $linha['descricao_missao']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Técnico da missão:</label></br>

            <select class="form-control" name="tecnico" id="selectinserirmissao">
                <option value="Alexandre" 
                <?=($linha['tecnico'] == 'Alexandre')? 'selected' : ''?>
                >Alexandre</option>
                <option value="Alan"
                <?=($linha['tecnico'] == 'Alan')? 'selected' : ''?>
                >Alan</option>
                <option value="C. Lopes"
                <?=($linha['tecnico'] == 'C. Lopes')? 'selected' : ''?>
                >C. Lopes</option>
                <option value="Dittz"
                <?=($linha['tecnico'] == 'Dittz')? 'selected' : ''?>
                >Dittz</option>
                <option value="Ponciano"
                <?=($linha['tecnico'] == 'Ponciano')? 'selected' : ''?>
                >Ponciano</option>
            </select>

            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Prazo missão:</label></br>
            <input data-ls-module="charCounter" class="form-control" type="text" name="prazo_missao" maxlength="15" placeholder="Edita prazo da missão"
            value="<?php echo $linha['prazo_missao']; ?>">
            </br>
            <label class="badge text-bg-light" id="labelinserirmissao">Status missão:</label></br>
            <select class="form-control" name="status_missao" id="selectinserirmissao">
                <option value="em andamento" 
                <?=($linha['status_missao'] == 'em andamento')? 'selected' : ''?>
                >em andamento</option>
                <option value="concluído"
                <?=($linha['status_missao'] == 'concluído')? 'selected' : ''?>
                >concluído</option>
                <option value="na fila"
                <?=($linha['status_missao'] == 'na fila')? 'selected' : ''?>
                >na fila</option>
                <option value="parado"
                <?=($linha['status_missao'] == 'parado')? 'selected' : ''?>
                >parado</option>
            </select>
            </br></br></br>
            <input class="btn btn-success" id="botaoinserir" type="submit" value="EDITA MISSÃO">
        </form>

        <?php } ?>
    <?php } ?>
<?php } ?>

<script type="text/javascript" src="js/jquery214.js"></script>
<script src="js/locastyle.js" type="text/javascript"></script>