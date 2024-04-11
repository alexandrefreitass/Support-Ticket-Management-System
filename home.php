<?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
        usuario ou senha invalido
    </div>

<?php } ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Bootstrap</title>
    <!--bot css-->
    <link rel="stylesheet" href="css/bootstrap441.min.css">
    <!--bot js-->
    <script src="js/jquery341slim.min.js"></script>
    <script src="js/jpopper.min.js"></script>
    <script src="js/bootstrap441.min.js"></script>
    <!--Tag Responsiva-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body id="bodyhome">
    </br></br>
	<!--Bot carrousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slideshow1.jpeg"  height="600" width="100" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Infraestrutura de Rede</h5>
                    <p>Por dentro de um data center.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slideshow3.jpg" height="600" width="100" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tecnologia da Informação</h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slideshow2.jfif" height="600" width="100" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tecnologia 5G</h5>
                    <p>Baixa latência garantira comunicação em tempo real.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
	<!--Bot carrousel-->
	<!--video do canal-->
	<center>
    </br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/f6cHRJPgynE" title="191 ANOS PROTEGENDO A SOCIEDADE" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
	</center>

    <div id="conteudo">

        <h5 id="textoalinhado2">PRINCIPAIS</h5>
        <h4 id="textoalinhado">SERVIÇOS ONLINE</h3>
        </br></br>
        <div id="caixaconteudo">
            <div class="d-flex justify-content-around">

                <div id="divlinks">
                    <a href="http://www.copom.intranet.policiamilitar.sp.gov.br/tecnologia/controle_dejem_por_id/" target="_blank">
                    <img width="67" height="85" src="img/fone190.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="http://www.copom.intranet.policiamilitar.sp.gov.br/tecnologia/controle_dejem_por_id/" target="_blank">DEJEM 190
                    <p class="elementor-image-box-description">CONSULTA DE ESCALAS</p></a>
                </div>

                <div id="divlinks">
                    <a href="http://weblinux.intranet.policiamilitar.sp.gov.br/35bpmi/rancho/" target="_blank">
                    <img width="67" height="85" src="img/rancho.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="http://weblinux.intranet.policiamilitar.sp.gov.br/35bpmi/rancho/" target="_blank">RANCHO
                    <p class="elementor-image-box-description">PREVISÃO RANCHO</p></a>
                </div>

                <div id="divlinks">
                    <a href="http://prdwinet.ccb.policiamilitar.sp.gov.br/assinatura/play.aspx" target="_blank">
                    <img width="67" height="85" src="img/email.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="http://prdwinet.ccb.policiamilitar.sp.gov.br/assinatura/play.aspx" target="_blank">EMAIL PM
                    <p class="elementor-image-box-description">CRIAR ASSINATURA</p></a>
                </div>

                <div id="divlinks">
                    <a href="http://sisbol.intranet.policiamilitar.sp.gov.br/_sisbolsc8/frmlogin/" target="_blank">
                    <img width="67" height="85" src="img/sisbol.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="http://sisbol.intranet.policiamilitar.sp.gov.br/_sisbolsc8/frmlogin/" target="_blank">SISBOL
                    <p class="elementor-image-box-description">ASSENTAMENTO</p></a>
                </div>

            </div>
            </br></br>
            <div class="d-flex justify-content-around">

                <div id="divlinks">
                    <a href="http://weblinux.intranet.policiamilitar.sp.gov.br/35bpmi/sai.php" target="_blank">
                    <img width="67" height="85" src="img/sai.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="http://weblinux.intranet.policiamilitar.sp.gov.br/35bpmi/sai.php" target="_blank">SAI
                    <p class="elementor-image-box-description">SISTEMA ADM</p></a>
                </div>

                <div id="divlinks">
                    <a href="http://10.43.153.225/numerador/" target="_blank">
                    <img width="67" height="85" src="img/numerador.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="http://10.43.153.225/numerador/" target="_blank">NUMERADOR
                    <p class="elementor-image-box-description">SISTEMA DO NUMERADOR</p></a>
                </div>

                <div id="divlinks">
                    <a href="ramais.html" target="_blank">
                    <img width="67" height="85" src="img/ramal.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="ramais.html" target="_blank">RAMAIS
                    <p class="elementor-image-box-description">LISTA DE RAMAIS</p></a>
                </div>

                <div id="divlinks">
                    <a href="http://10.51.14.116/voxperfect/wfr/wfrLogin.aspx" target="_blank">
                    <img width="67" height="85" src="img/vox.png" class="attachment-full size-full" alt="DEJEM 190" loading="lazy"></a>
                    </br>
                    <a href="http://10.51.14.116/voxperfect/wfr/wfrLogin.aspx" target="_blank">VOX PERFECT
                    <p class="elementor-image-box-description">GRAVAÇÕES 190</p></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>	