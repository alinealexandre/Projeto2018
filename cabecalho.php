<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<script src="js/jquery.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	
 	<link rel="stylesheet" type="text/css" href="semantic/semantic.css">
  	<script type="text/javascript" src="semantic/semantic.min.js"></script>
  	<script type="text/javascript" src="js/script.js"></script>


	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="icon" href="img/logo2.png" type="image/x-icon"/>
	<title>Arcadia Games</title>
</head>

<header class="menu_meu">

    <nav>
        <ul>
        	<li class="part_menu">.</li>
            <li class="part_menu2"><a href="index.php" class="cor_menu"> <img src="img/logo1.png" id="img_logo"> </a></li>
            <div class="ui inverted divider"></div>
              <div class="ui inverted transparent icon input">
              <input type="text" placeholder="Search...">
              <i class="search icon"></i>
              </div>
            </div>
            <li class="part_menu">.</li>
            <li class="part_menu">.</li>
            <li class="part_menu">.</li>
            <li class="part_menu">.</li>
            <li class="part_menu"><a href="" class="cor_menu" > Notícias </a></li>

            <li class="part_menu">
            	<div class="ui simple dropdown item cor_menu">
            		 Gêneros
            		 <i class="left pointing dropdown icon"></i>
					<div class="menu cor_catego">
   						<a href="acao.php"      class="item">Ação</a>
  						<a href="terror.php"    class="item">Terror</a>
   						<a href="esportes.php"  class="item">Esporte</a>
   						<a href="simulacao.php" class="item">Simulação</a>
 						<a href="moba.php"        class="item">MOBA</a>
   						<a href="fps.php"       class="item">FPS</a>
					</div>
				</div>
           </li>
          
           <li class="part_menu">.</li>
 <?php

  if(!isset($_SESSION['login'])){

?>          
           <li class="part_menu"><a href="login.php" class="cor_menu"><i class="user icon"></i> Login </a></li>
<?php

}else{
?>

  <li class="part_menu">
    <div class="ui simple dropdown item cor_menu">
      <a href="pagina_usuario"> <?=$_SESSION['login']?> </a>
        <i class="left pointing dropdown icon"></i>
        <div class="menu cor_catego">
          <a href="minhas_resenhas.php" class="item">Minhas Resenhas</a>
          <a href="cadastro_resenhas.php" class="item">Cadastrar Resenhas</a>
          <a href="favoritas.php" class="item">Favoritas</a>
          <a href="logout.php" class="item">Sair</a>
        </div>
    </div>
  </li>

<?php
}

?>      
        </ul>
    </nav>	

</header>

