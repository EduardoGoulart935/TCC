<<<<<<< HEAD
<?php 
require_once("../conexao.php");
@session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios WHERE $login = :login AND $senha = :senha");
$query->bindValue(":usuario", "$login");
$query->bindValue(":senha", "$senha");
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	$_SESSION['login'] = $res[0]['login'];
	$_SESSION['id'] = $res[0]['id'];

	//REDIRECIONAR O USUÁRIO CONFORME O NÍVEL
	if($res[0]['login'] == $login){
		echo "<script language='javascript'> window.location='#' </script>";
	}
}
 ?>
=======
<?php
require_once("../MODEL/conexao.php");
session_start();

// Sanitização e validação
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

// Prepare e execute a query
$query = $pdo->prepare("SELECT * FROM usuarios WHERE login = :login");
$query->bindValue(":login", $login);
$query->execute();
$res = $query->fetch(PDO::FETCH_ASSOC);

if ($res && password_verify($senha, $res['senha'])) {
    $_SESSION['login'] = $res['login'];
    $_SESSION['id'] = $res['id'];

    // REDIRECIONAR O USUÁRIO
    echo "<script language='javascript'> window.location='../VIEW' </script>";
} else {
    // Lidar com falha de autenticação
    echo "<script language='javascript'> alert = 'Login ou senha inválidos.' </script>";
	echo "<script language='javascript'> window.location='../index.php' </script>";
}
?>
>>>>>>> bce69a5 (TCC aula)
