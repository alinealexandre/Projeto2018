<?php

include('cabecalho.php');
include('funcoes.php');


$contatos_json  = file_get_contents('usuarios.json');

?>

	<section class="login_colu"> <div class="cor_bord6">.</div> </section>

	<form method="post" action="?acao=logar">
		
	<section class="cadastro_usu">
		<section class="bordas_index cor_bord">.</section>
	    <section class="bordas_index cor_bord1">.</section>
	    <section class="bordas_index cor_bord2">.</section>
	    <section class="bordas_index cor_bord3">.</section>
	    <section class="bordas_index cor_bord4">.</section>
	    <section class="bordas_index cor_bord5">.</section>

	    <section class="login_colu3">.</section>	
	    <img src="img/mario2.png" class="login_imagem">
	    <section class="login_colu3">.</section>

	    <section class="login_colu2">.</section>
	    <section class="login_titulo cor_menu"> Login </section>
	    <section class="login_colu2">.</section>


	    <section class="login_colu4">.</section>
	    <div class="ui input login_inpu">
  			<input type="text" name="nick" placeholder="Nick">
		</div>
		<section class="login_colu4">.</section>

		<section class="login_colu4">.</section>
	    <div class="ui input login_inpu">
  			<input type="password" name="senha" placeholder="Senha">
		</div>
		<section class="login_colu4">.</section>

		<section class="login_colu4">.</section>
		<div class="login_links">
			<a href=""> Esqueci minha senha</a>
			<a href="cadastro_usuario.php"> Cadastrar-se </a>
			
		</div>
		<section class="login_colu4">.</section>
			
	    
	    <section class="login_colu4">.</section>
	    <button class="ui button login_inpu2" id="cor_enviar" type="submit" name="logar">Logar</button>
		<section class="login_colu4">.</section>

	
	
	</section>
    </form>

	<section class="login_colu"> <div class="cor_bord7">.</div> </section>

<?php


 if ( isset($_GET['acao']) ){

       
        if ( $_GET['acao'] == 'logar'){
        	logar($contatos_json);
        	
        }
}