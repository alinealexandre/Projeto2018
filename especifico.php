<?php 

include("cabecalho.php");
include("funcoes.php");

    if (isset($_GET['id_jogo'])) {
      $id_jogo = $_GET['id_jogo'];
    }

    $jogos_json = file_get_contents("jogos.json");
    $jogos_array = json_decode($jogos_json, true);

    foreach ($jogos_array as $informacao){
      if($informacao['id'] == $id_jogo){
        $jogo_encontrado = $informacao;
      }
    }

?>
<body>

	<div class="coluna_esq_A"></div>


		<section class="especifico_A">
		<section class="bordas_index cor_bord">.</section>
	    <section class="bordas_index cor_bord1">.</section>
	    <section class="bordas_index cor_bord2">.</section>
	    <section class="bordas_index cor_bord3">.</section>
	    <section class="bordas_index cor_bord4">.</section>
	    <section class="bordas_index cor_bord5">.</section>

		    <section class="coluna1_A">
		    	
		    	<section class="img_esp_A">
		    			<img src="img/overwatch_especi.jpg" class="img_esp_A"/>
		    	</section>


		    	<section class="topicos_A">

		    		<section class="coluna3_A">
		    		
					<div class="ui list">

					  <div class="item">
					    <i class="calendar alternate outline icon large "></i>
					    <div class="content letra2_A">
					      <div class="header ">Lançamento</div>
					      <div class="description"><?= $jogo_encontrado['ano'] ?></div>
					    </div>
					  </div>

					  <div class="item">
					    <i class="desktop icon large"></i>
					    <div class="content letra2_A">
					      <div class="header">Plataforma</div>
					      <div class="description"><?= $jogo_encontrado['plataforma'] ?></div>
					    </div>
					  </div>

					  <div class="item">
					    <i class="street view icon large"></i>
					    <div class="content letra2_A">
					      <div class="header">Players</div>
					      <div class="description"><?= $jogo_encontrado['players'] ?></div>
					    </div>
					  </div>

					  <div class="item">
					    <i class="pen square icon large"></i>
					    <div class="content">
					      <div class="header letra2_A">Desenvolvedor</div>
					      <div class="description letra2_A"><?= $jogo_encontrado['desenvolvedora'] ?></div>
					    </div>
					  </div>
					</div>

					</section>

		    	</section>


		
				
		    </section>


		    <section class="coluna2_A">

		    	<div class="ui piled segment largura1_A">
				  <h4 class="ui header tamanho_letra1_A"><?=$jogo_encontrado['titulo']?></h4>
				  <p><?= $jogo_encontrado['sinopse'] ?></p>
				  
				 <li class="modificacao">
    			 	<div class="ui simple dropdown item">
						<i class="dropdown icon"></i>
				 		<div class="menu">
				 			  <a href="editar.php" class="item">Editar</a>
         		   	<a href="excluir.php" class="item">Excluir</a>
       				</div>
    				</div>
  				</li>

				  <h4 class="ui header tamanho_letra2_A">Nota Autor: </h4>
				  <div class="ui rating star estrela_A" data-rating="<?= $jogo_encontrado['classificacao'] ?>" data-max-rating="5"></div>

<?php

if(!isset($_SESSION['login'])){

}else{

$cod_usu = $_SESSION['cod_usu'];
$qtdCurtida   = contarCurtida($id_jogo);
$esta_curtida = verifica_curtir($cod_usu,$id_jogo);


    if($esta_curtida != true) { ?>

    <a href="?id_jogo=<?= $id_jogo ?>&acao=curtir"><div class="ui heart rating" data-rating="0" data-max-rating="1"></div></a>
    <h5><?=$qtdCurtida?></h5> 

<?php



    curtir($cod_usu,$id_jogo);


    }else { ?>

     <a href="?id_jogo=<?= $id_jogo ?>&acao=remover"><div class="ui heart rating" data-rating="1" data-max-rating="1"></div></a>
     <h5><?= $qtdCurtida?></h5> 

    
<?php 
    remover($cod_usu,$id_jogo);

    } 
}?>
				</div>

			<section class="comentarios">

				<div class="ui small comments">
  <h3 class="ui dividing header">Comentários</h3>
  <div class="comment">
    <a class="avatar">
      <img src="img/tracer.png">
    </a>
    <div class="content">
      <a class="author">Matt</a>
      <div class="metadata">
        <span class="date">Today at 5:42PM</span>
      </div>
      <div class="text">
        How artistic!
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>
  <div class="comment">
    <a class="avatar">
      <img src="img/tracer.png">
    </a>
    <div class="content">
      <a class="author">Elliot Fu</a>
      <div class="metadata">
        <span class="date">Yesterday at 12:30AM</span>
      </div>
      <div class="text">
        <p>This has been very useful for my research. Thanks as well!</p>
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
    <div class="comments">
      <div class="comment">
        <a class="avatar">
          <img src="img/tracer.png">
        </a>
        <div class="content">
          <a class="author">Jenny Hess</a>
          <div class="metadata">
            <span class="date">Just now</span>
          </div>
          <div class="text">
            Elliot you are always so right :)
          </div>
          <div class="actions">
            <a class="reply">Reply</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="comment">
    <a class="avatar">
      <img src="img/tracer.png">
    </a>
    <div class="content">
      <a class="author">Joe Henderson</a>
      <div class="metadata">
        <span class="date">5 days ago</span>
      </div>
      <div class="text">
        Dude, this is awesome. Thanks so much
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>
  <form class="ui reply form">
    <div class="field">
      <textarea></textarea>
    </div>
    <button class="ui toggle button botao_coment">Comentar</button>
  </form>
</div>

			</section>
			<div class="risco_A">.</div>

			</section>

		</section>




	<div class="coluna_dir_A"></div>

</body>
