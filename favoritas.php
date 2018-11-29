<?php

include('cabecalho.php');

if(!isset($_SESSION['login'])){
		echo('<h1>Acesso Negado!</h1>');
		echo('<meta http-equiv="refresh" content="1; url=index.php">');
}else{

?>

<?php
}
?>