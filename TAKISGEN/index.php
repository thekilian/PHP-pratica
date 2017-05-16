<?php
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
	//echo "Área restrita";
	header("Location: login.php");
} else {
	echo "não deu";
}

/*
- se o usuário não tá logado
- kicka ele pro login
- se vc fizer isso, vc não precisa do else 😉

if(!empty($variavel))

isset a gente usa muito com SESSION
exemplo:
vc verifica se um usuário existe no banco, pra autorizar
daí vc registra com suas próprias fucking hands:
$_SESSION['logged_in'] = 'admin';
num outro script, vc pode verificar:
if( isset ( $_SESSION['logged_in'] ) {
// faz algo
}
geralmente a gente usa o contrário:
se não tá setado o logged_in
kicka o cara da página
*/