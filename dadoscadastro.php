<?php session_start();


require('Conexão.php');

$usuario= (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
$email= (isset($_POST['email'])) ? $_POST['email'] : "";
$senha= (isset($_POST['senha'])) ? $_POST['senha'] : "";


$pg_insert = "INSERT INTO user (usuario,email,senha) VALUES ('$usuario','$email','$senha')"; 

print_r($pg_insert);

if(mysqli_query($con,$pg_insert)){
    echo "<script>alert('Cadastrado com sucesso!');window.location='index.php'</script>";
    
}
else{
    echo "<script>alert('Erro ao cadastrar, preencha novamente por favor!');window.location='Cadastro.php'</script>";
}
 mysqli_close($con);
?>