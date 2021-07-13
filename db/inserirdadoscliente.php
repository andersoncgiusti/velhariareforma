<?php
	if($_POST['cxnome'] != ""){
		include_once 'conexao.php';

		$nome		= $_POST['cxnome'];
		$sobrenome	= $_POST['cxsobrenome'];
		$rg			= $_POST['cxrg'];
		$cpf		= $_POST['cxcpf'];
		$nickname	= $_POST['cxnickname'];
		$email		= $_POST['cxemail'];
		$endereco	= $_POST['cxendereco'];
		$cidade		= $_POST['cxcidade'];
		$estado		= $_POST['cxestado'];
		$cep		= $_POST['cxcep'];
		$sql 		= "INSERT INTO tbcadcliente (nome, sobrenome, rg, cpf, nickname, email, endereco, cidade, estado, cep) 
		values ('$nome', '$sobrenome', '$rg', '$cpf', '$nickname', '$email', '$endereco', '$cidade', '$estado', '$cep')";

		$query = mysqli_query($conn, $sql);

		echo  "<script>alert('Dados cadastrados com sucesso!'); 
				window.location.href = 'listarcliente.php' 
				</script>";

	}else{
		echo "<script>alert('Dados não cadastrados, tente novamente!'); 
		window.location.href = 'cadastrocliente.php' 
		</script>";
	}
?>