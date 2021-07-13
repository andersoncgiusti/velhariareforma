<?php
	if($_POST['cxnome'] != ""){
		include_once 'conexao.php';

		$nome		= $_POST['cxnome'];
		$usuario	= $_POST['cxusuario'];
		$cargo		= $_POST['cxcargo'];
		$email		= $_POST['cxlogin'];
		$senha		= $_POST['cxsenha'];
		$sql 		= "INSERT INTO tbusuario (nomeusuario, usuario, cargo, email, senha) 
		values ('$nome',  '$usuario', '$cargo', '$email', '$senha')";

		$query = mysqli_query($conn, $sql);

		echo  "<script>alert('Dados cadastrados com sucesso!'); 
				window.location.href = '../login.php' 
				</script>";

	}else{
		echo "<script>alert('Dados não cadastrados, tente novamente!'); 
		window.location.href = 'cadastrosistema.php' 
		</script>";
	}
?>