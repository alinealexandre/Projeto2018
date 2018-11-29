<?php

//inicia a sessão
	session_start();
//destroi a sessao
	session_destroy();

//redireciona para a pagina inicial
	echo('<meta http-equiv="refresh" content="0; url=index.php">');
?>