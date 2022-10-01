<?php session_start();

#VERIFICAÇÃO DE LOGIN USANDO TABELA usuarios e banco de dados
require("Conexão.php");
$sql = "SELECT *,count(*) as total FROM user WHERE (usuario = '".$_POST['usuario']."' AND senha = '".$_POST['senha']."')";
$res = mysqli_query($con, $sql);
$dados = mysqli_fetch_assoc($res);

if($dados['total'] > 0){    
    $_SESSION['usuario'] = $dados['user'];
    $_SESSION['logado'] = TRUE;
    echo "<script>alert('Logado com sucesso');window.location='home.php'</script>";

}else{
 echo "<script>alert('Erro ao Logar verifique seus dados');window.location='index.php'</script>";
}

?>