<?php 

include("cabecalho.php");

   $jogadores_json  = file_get_contents('jogos.json');
    $jogadores_array = json_decode($jogadores_json, true); 

?>

<body>
    
<body>
    <section class="imagem_princi">
        <section class="coluna_titulo">.</section>
        <section class="nome_princi cor_menu"> Arcadia Games </section>  
        <section class="coluna_titulo2">.</section> 

        <section class="coluna_sub">.</section>
        <section class="nome_sub cor_menu"> Resenhas de Jogos </section>  
        <section class="coluna_sub2">.</section> 
    </section>

        <div class="borda_cate_Index">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>

</div>

 <section class="titulo22"> <h1 class="letra34"> Top 5 Resenhas: </h1> </section>

 <section class="coluna_cat_L">.</section>




        

<?php foreach ($jogadores_array as $jogo): ?>
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
        <?php endforeach; ?>




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
              <a href="especifico.php" class="ui button cor_visu">Visualizar</a>
            </div>
          </div>
        </div>
        <img class="imagem_catego" src="img/thesims3.png">
      </div>
      <div class="content">
        <a class="header cor_titulo_jogo_L">The sims 3</a>
        <div class="meta">
          <span class="date">Escrita em 2018</span>
        </div>
     </div>
      <div class="extra content">
      </div>
      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>
    </div>
 </div>

</section>


   
</body>

