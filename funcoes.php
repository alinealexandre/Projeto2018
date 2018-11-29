<?php


 function salvar_usuarios($parametro_array_usuarios){
    $json = json_encode($parametro_array_usuarios, JSON_PRETTY_PRINT);
    file_put_contents('usuarios.json', $json);
}

function criar_cod(){
    $contatos_json = file_get_contents('usuarios.json');
    $usuario_array = json_decode($contatos_json, true);
    
    $i = sizeof($usuario_array);
    $cod = $i + 1;

    return($cod);

}


function cadastrar($contatos_json){
	$usuario_array = json_decode($contatos_json, true);
    $cod = criar_cod();
           
            $novoUsuario = [
                "nome"  => $_POST['nome'],
                "nick"	=> $_POST['nick'],
                "email"  => $_POST['email'],
                "senha"  => $_POST['senha'],
                "cod_usu" => $cod              
            ];

            $usuario_array[] = $novoUsuario;

            salvar_usuarios($usuario_array);

}



function logar($contatos_json){
	$usuario_array = json_decode($contatos_json, true);
        $Logado = [
            "nick"	=> $_POST['nick'],
            "senha"  => $_POST['senha'],               
            ];

    foreach ($usuario_array as $posicao => $info) {
    	
            if($Logado['nick'] == $usuario_array[$posicao]['nick']){
            	if($Logado['senha'] == $usuario_array[$posicao]['senha']){
            		$_SESSION['login'] = $Logado['nick'];
                    $_SESSION['cod_usu'] = $usuario_array[$posicao]['cod_usu'];	
            		echo('<meta http-equiv="refresh" content="0; url=index.php">');
            		break;

            	}else{
            		echo('<h1 class="mensagem_login">Senha Incorreta!</h1>');
				
				}
			
			}
	}

}

function listar_resenhas($categoria){
    $todos  = file_get_contents('jogos.json');
    $todos_array = json_decode($todos, true);
    $jogos_categoria = array();
           
        foreach ($todos_array as $posicao => $informacao) {
           if($categoria == $todos_array[$posicao]['gênero']){
            $jogos_categoria[] = $todos_array[$posicao];
           }
        }
            return $jogos_categoria;

}


function verifica_curtir($cod_usu,$cod_resenha){
    $verifica_curtidas = file_get_contents('curtidas.json');
    $lista_curtidas = json_decode($verifica_curtidas,true);

    $esta_curtida = false;

    foreach ($lista_curtidas as $like){

        if ($like['usuario'] == $cod_usu AND $like['resenha'] == $cod_resenha AND $like['curtiu'] == true){

            $esta_curtida = true;

        }

    }

     return($esta_curtida);
}


function curtir($cod_usu,$cod_resenha){

    $lista_curtidas = file_get_contents('curtidas.json');
    $array_curtidas = json_decode($lista_curtidas,true);
    $qtd_curtida= 0;

    if (isset ($_GET['acao']) AND $_GET['acao'] == "curtir"){

        foreach ($array_curtidas as $posicao => $info) {
            if($info['usuario'] == $cod_usu AND $info['resenha'] == $cod_resenha AND $info['curtiu'] == false){
               $curtida = [
                    "resenha" => $cod_resenha,
                    "usuario" => $cod_usu,
                    "curtiu"  => true
                ];

                $array_curtidas[$posicao]= $curtida;
    
            }else{
                $qtd_curtida = $qtd_curtida + 1;

                if($qtd_curtida == sizeof($array_curtidas)){
                    $curtida = [
                    "resenha" => $cod_resenha,
                    "usuario" => $cod_usu,
                    "curtiu"  => true
                    ];

                    $array_curtidas[]= $curtida;

                }
            }
        }

    }

    $curtidas_json = json_encode($array_curtidas, JSON_PRETTY_PRINT);
    file_put_contents('curtidas.json', $curtidas_json);

}


function remover($cod_usu,$cod_resenha){

    $lista_curtidas = file_get_contents('curtidas.json');
    $array_curtidas = json_decode($lista_curtidas,true);

    if (isset ($_GET['acao']) AND $_GET['acao'] == "remover"){

        foreach ($array_curtidas as $posicao => $info) {
            if($info['usuario'] == $cod_usu AND $info['resenha'] == $cod_resenha AND $info['curtiu'] == true){
               $curtida = [
                    "resenha" => $cod_resenha,
                    "usuario" => $cod_usu,
                    "curtiu"  => false
                ];

                $array_curtidas[$posicao]= $curtida;
    
            }
        }

    }

    $curtidas_json = json_encode($array_curtidas, JSON_PRETTY_PRINT);
    file_put_contents('curtidas.json', $curtidas_json);

}

function contarCurtida($cod_resenha){
    $lista_curtidas = file_get_contents('curtidas.json');
    $array_curtidas = json_decode($lista_curtidas,true);
    $qtdCurtida = 0;

    foreach ($array_curtidas as $posicao => $info) {
        if($info['resenha'] == $cod_resenha AND $info['curtiu'] == true){
             $qtdCurtida = $qtdCurtida+1;
        }
    }
    return($qtdCurtida);

}

function ranking($categoria){
    $temporario=0;
    $todos  = file_get_contents('jogos.json');
    $jogos_array = json_decode($todos, true);
    $jogos_categoria = array();

    $lista_curtidas = file_get_contents('curtidas.json');
    $array_curtidas = json_decode($lista_curtidas,true);
    $ranking_array  = array();
           
    foreach ($jogos_array as $posicao => $informacao) {
        if($categoria == $jogos_array[$posicao]['genero']){
            $jogos_categoria[] = $jogos_array[$posicao]['id'];
        }
    }
        
    foreach($array_curtidas as $curtida){
        for($i=0; $i<sizeof($jogos_categoria); $i++){
            if($curtida['resenha'] == $jogos_categoria[$i]){
                $qtd = contarCurtida($curtida['resenha']);
                
                $top_jogo = [
                    "resenha" => $curtida['resenha'],
                    "qtd" => $qtd
                ];
                
                $ranking_array[] = $top_jogo;
            }
        }

    }

    for($y=0; $y<sizeof($ranking_array); $y++){
        for($x=0; $x<sizeof($ranking_array); $x++){

            if($ranking_array[$y]['resenha']==$ranking_array[$x]['resenha']){
                    $ranking_array[$x] = 0;
            }
            if($ranking_array[$y]['qtd']>$ranking_array[$x]['qtd']){
                $temporario = $ranking_array[$y];
                $ranking_array[$y] = $ranking_array[$x];
                $ranking_array[$x] = $temporario;
            }

        }
    }

            return($ranking_array);

}

function procurarJogo($id){
    $todos  = file_get_contents('jogos.json');
    $jogos_array = json_decode($todos, true);
    $jogo_encontrado = array();

    foreach ($jogos_array as $jogo) {
        if($id == $jogo['id']){
            $jogo_i = [
                    "titulo" => $jogo['titulo'],
                    "img"    => $jogo['img'],
                    "ano"    => $jogo['ano'],
                    "id"     => $jogo['id'],
                    "classificacao"  => $jogo['classificacao'],

            ];
        $jogo_encontrado[] = $jogo_i;
        break;
        }

    }
    return($jogo_encontrado);

}