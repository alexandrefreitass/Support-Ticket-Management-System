### Website COPOM

<div align="center">
    <img src="![home](https://github.com/alexandrefreitass/website-copom/assets/109884524/28c0d171-b932-4966-87a1-f3bab6f5f4f6)" />
</div>
<br/>
O projeto é uma aplicação web completa desenvolvida em PHP e conectada a um banco de dados MySQL. Ele oferece uma solução abrangente para o gerenciamento de chamados de suporte técnico, 
definição de metas e monitoramento do progresso das mesmas. Abaixo estão as principais funcionalidades do sistema

### Controle de Chamados:

    Os usuários podem criar novos chamados, fornecendo detalhes sobre os problemas ou solicitações que exigem atenção da equipe técnica.
    Os chamados podem ser atribuídos a membros específicos da equipe.
    Informações como prioridade, status e data de criação são registradas para cada chamado.
    
# Gerenciamento de Metas:

    Os supervisores podem definir metas para a equipe, especificando detalhes como descrição, prazo e responsável pela execução.
    Eles podem acompanhar o progresso das metas e fazer ajustes conforme necessário.
    O sistema permite o monitoramento do status das metas.

# Autenticação de Usuário:

    Um sistema de autenticação é implementado para garantir que apenas usuários autorizados possam acessar e manipular informações críticas, como chamados e metas.
    Cada usuário tem suas próprias credenciais de login, garantindo segurança e controle sobre as ações realizadas no sistema.


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/alexandrefreitass/website-copom.git
```

Instale o xampp para usar offline versão do php do projeto é 8.2.9

Cole o projeto dentro do htdocs do Xampp

Edite o arquivo db.php dentro da pasta do projeto


```bash
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "copom_php";
```

Apos isto, abra o navegador localhost/phpmyadmin

Digite um nome do banco para criar nome_do_banco de preferencia use copom_php

Clique em importar, clique em  escolher e selecione o arquivo banco_de_dados.sql que foi enviado junto no anexo.

Execute o xampp e start no apache e mysql:

```bash
  localhost:8080 ou a porta definida por voce
```


# Licença

Este projeto está sob a licença MIT. Consulte o arquivo <a href="https://github.com/alexandrefreitass/website-copom/blob/master/LICENSE">LICENSE</a> para obter mais detalhes.
