<?php 

include("cabecalho.php");
include("funcoes.php");

  $jogadores_json  = file_get_contents('jogos.json');
  $jogadores_array = json_decode($jogadores_json, true); 

/*



<body>

      <section class="categori_princi">
          <section class="titulo_categoria"> 
        <section class="estilo_titulo"> Ação: </section>
        <section class="estilo_subtitulo"> Emoção e Aventura</section>
      </section>
      </section>


<section class="coluna_cat_L">.</section>


<?php foreach ($jogadores_array as $jogo): 
  if($jogo['genero'] == "Ação"){
?>


  <div id="jogo" >


<section class="lista_categoria">


  <div class="ui special cards">
    <div class=" borda_cate">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>
    </div>

    
    <div class="card">
      <div class="blurring dimmable image">
        <div class="ui dimmer">
          <div class="content">
            <div class="center">
              <a href="especifico.php?id_jogo=<?= $jogo['id'] ?>" class="ui button cor_visu">Visualizar</a>
            </div>
          </div>
        </div>
        <img class="imagem_catego" src="img/<?= $jogo['img'] ?>">
      </div>
      <div class="content">
        <div class="header cor_titulo_jogo_L"><?= $jogo['titulo'] ?></div>
        <div class="meta">
          <span class="date"><?= $jogo['ano'] ?></span>
        </div>
      </div>
      <div class="extra content">
      </div>
      <div class="ui star rating margem_bot" data-rating="<?= $jogo['classificacao'] ?>"  data-max-rating="5"></div>
    </div>
  </div>

</section>

<?php
}
 endforeach; 
*/
?>

</div>

 <section class="titulo22"> <h1 class="letra34"> Top 5 Resenhas: </h1> </section>

 <section class="coluna_cat_L">.</section>

<?php

$top_cinco = ranking("Ação");
$i = 0;

$teste = procurarJogo(3);
//print_r($teste[0]['titulo']);

//print_r($top_cinco[0]['resenha']);

		for($y=0; $y<5;$y++){
			$parametro = $top_cinco[$y]['resenha'];
			//print_r($top_cinco[1]['resenha']);
			$jogo1 = procurarJogo($parametro);
			print_r($jogo[0]['id']);
?>
<section class="lista_categoria">


  <div class="ui special cards">
    <div class=" borda_cate">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>
    </div>

    
    <div class="card">
      <div class="blurring dimmable image">
        <div class="ui dimmer">
          <div class="content">
            <div class="center">
              <a href="especifico.php?id_jogo=<?= $jogo1[0]['id'] ?>" class="ui button cor_visu">Visualizar</a>
            </div>
          </div>
        </div>
        <img class="imagem_catego" src="img/<?= $jogo1[0]['img'] ?>">
      </div>
      <div class="content">
        <div class="header cor_titulo_jogo_L"><?= $jogo1[0]['titulo'] ?></div>
        <div class="meta">
          <span class="date"><?= $jogo1[0]['ano'] ?></span>
        </div>
      </div>
      <div class="extra content">
      </div>
      <div class="ui star rating margem_bot" data-rating="<?= $jogo1[0]['classificacao'] ?>"  data-max-rating="5"></div>
    </div>
  </div>

</section>
<?php
		}

 ?>



</body>
