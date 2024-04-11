<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<p id="texto-principal-noticia">
O que é Lorem Ipsum?
Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
</p>

<button id="link-noticia" onclick="Mostrar()">Mostrar Mais</button>

<script>
$(document).ready(function(){
   txt = document.getElementById('texto-principal-noticia').innerHTML;
   txt2 = txt.substr(0,100)+'...';
   document.getElementById('texto-principal-noticia').innerHTML = txt2;

  if(txt<txt2 ){
    document.getElementById('texto-principal-noticia').innerHTML = txt;
    document.getElementById('link-noticia').innerHTML = 'Mostrar Menos'; 
  }else{
     document.getElementById('texto-principal-noticia').innerHTML = txt2;
     document.getElementById('link-noticia').innerHTML = 'Mostrar Mais'; 
  }
});
    
function Mostrar(){

   if(document.getElementById('link-noticia').innerHTML == 'Mostrar Mais'){
     document.getElementById('texto-principal-noticia').innerHTML = txt;
     document.getElementById('link-noticia').innerHTML = 'Mostrar Menos'; 
   }else{
     document.getElementById('texto-principal-noticia').innerHTML = txt2;
     document.getElementById('link-noticia').innerHTML = 'Mostrar Mais'; 
   }
}
</script>
