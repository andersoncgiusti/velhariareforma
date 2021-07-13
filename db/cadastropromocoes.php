<?php
	if($_POST['cxemail'] != ""){
		include_once 'conexao.php';

		$email		= $_POST['cxemail'];
		$nome		= $_POST['cxnome'];
		$sql 		= "INSERT INTO tbpromocoes (email, nome) 
		values ('$email', '$nome')";

		$query = mysqli_query($conn, $sql);

		echo  "<script>alert('Dados cadastrados com sucesso!'); 
				window.location.href = '../index.php' 
				</script>";

	}else{
		echo "<script>alert('Dados não cadastrados, tente novamente!'); 
		window.location.href = 'cadastropromocoes.php' 
		</script>";
	}
?>