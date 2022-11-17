<?php session_start();

#VERIFICAÇÃO DE LOGIN USANDO TABELA usuarios e banco de dados
require("Conexão.php");
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['id']= $dados['user_id'];
$sql = "SELECT *,count(*) as total FROM accounts  WHERE (username = '".$_POST['username']."' AND password = '".$_POST['password']."')";
$res = mysqli_query($con, $sql);
$dados = mysqli_fetch_assoc($res);





if($dados['total'] > 0){    
    $_SESSION['username'] = $dados['accounts'];
    $_SESSION['logado'] = TRUE;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['id'] = $dados['user_id'];
    $_SESSION['role_id'] = $dados['role_id'];
    echo "<script>window.location='home.php?cod=".$_SESSION['id']."'</script>";

}else{
 echo "<script>alert('Erro ao Logar verifique seus dados');window.location='index.php'</script>";
}

?>