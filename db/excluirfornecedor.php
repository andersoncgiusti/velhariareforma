<?php
	include_once 'conexao.php';

	$cod = $_GET["id"];
	$excluir = "DELETE from tbcadfornecedor WHERE id = '$cod' ";
	$executar = mysqli_query($conn, $excluir); 
	if ($executar) {
		echo "<script>alert('Fornecedor excluído com sucesso!'); 
				window.location.href = 'listarfornecedor.php' 
				</script>";
	}else{
		echo "<script>alert('Não foi possível excluir, verifique novamente!'); 
				window.location.href = 'listarfornecedor.php' 
				</script>";
	}


?>