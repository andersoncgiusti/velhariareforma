<?php
	include_once 'conexao.php';

	$cod = $_GET["id"];
	$excluir = "DELETE from tbcadcliente WHERE id = '$cod' ";
	$executar = mysqli_query($conn, $excluir); 
	if ($executar) {
		echo "<script>alert('Cliente excluído com sucesso!'); 
				window.location.href = 'listarcliente.php' 
				</script>";
	}else{
		echo "<script>alert('Não foi possível excluir, verifique novamente!'); 
				window.location.href = 'listarcliente.php' 
				</script>";
	}


?>