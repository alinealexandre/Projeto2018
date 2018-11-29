<?php

include('cabecalho.php');
include('funcoes.php');


$contatos_json  = file_get_contents('usuarios.json');

?>

	<section class="login_colu"> <div class="cor_bord6">.</div> </section>

	<form method="post" action="?acao=cadastrar">
		
	<section class="cadastro_usu">
		<section class="bordas_index cor_bord1">.</section>
	    <section class="bordas_index cor_bord2">.</section>
	    <section class="bordas_index cor_bord4">.</section>
	    <section class="bordas_index cor_bord3">.</section>
	    <section class="bordas_index cor_bord5">.</section>
	    <section class="bordas_index cor_bord">.</section>

	    <section class="login_colu3">.</section>	
	    <img src="img/mario3.png" class="login_imagem">
	    <section class="login_colu3">.</section>
	    
	    <section class="cadas_colu">.</section>
	    <a class="cadas_titulo cor_menu"> Icone </a>
	    <section class="cadas_colu">.</section>

	   
	    <section class="cad_colu1">.</section>
	    <div class="ui input login_inpu">
  			<input type="text" name="nome" placeholder="Nome">
		</div>
		<section class="cad_colu1">.</section>
		 <div class="ui input login_inpu">
  			<input type="text" name="nick" placeholder="Nick">
		</div>
		<section class="cad_colu1">.</section>

		<section class="cad_colu1">.</section>
		<section class="cad_colu1">.</section>
	    <div class="ui input login_inpu">
  			<input type="email" name="email" placeholder="E-mail">
		</div>
		<section class="cad_colu1">.</section>
		<div class="ui input login_inpu">
  			<input type="password" name="senha" placeholder="Senha">
		</div>
		<section class="cad_colu1">.</section>

		<section class="login_colu4">.</section>
	    	<button class="ui button login_inpu" id="cor_enviar" type="submit" name="cadastrar">Cadastrar-se</button>
		<section class="login_colu4">.</section>

	</section>
	</form>

	<section class="login_colu"> <div class="cor_bord7">.</div> </section>

<?php


 if ( isset($_GET['acao']) ){

       
        if ( $_GET['acao'] == 'cadastrar'){
        	cadastrar($contatos_json);
        	echo('<meta http-equiv="refresh" content="0; url=login.php">');
        }
}