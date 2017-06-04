<?php
/*
===== Arquivo com funções do sistema ======
É uma boa prática colocar as funções do sistema num arquivo separado (isso é um INÍCIO de MVC)
*/




# ｡･:*:･ﾟ★,｡･:*:･ﾟ☆　LOGIN MAGIC GOES HERE　 ｡･:*:･ﾟ★,｡･:*:･ﾟ☆ #
/*
Se o usuário não está http://localhost/PHP-pratica/TAKISGEN/app/logado, ou seja a chave 'logado' do array de sessão não foi setada.
então, redireciona de volta para a página de login
É importante que essa chave no array da session para controle seja configurada por VOCÊ.
Te explico melhor depois se quiesr
*/
function check_login(){
    if(!isset($_SESSION['logado'])) {
    	session_destroy(); // Destrua a sessão, just in case! ;)
    	header("Location: login.php");
    }
}
