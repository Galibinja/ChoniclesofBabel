<?php session_start();


require('Conexão.php');

$usuario= (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
$email= (isset($_POST['email'])) ? $_POST['email'] : "";
$senha= (isset($_POST['senha'])) ? $_POST['senha'] : "";
$feedback= (isset($_POST['feedback'])) ? $_POST['feedback'] : "";

$sql_insert = "INSERT INTO user (usuario,email,senha,feedback) VALUES ('$usuario','$email','$senha','$feedback')"; 

print_r($sql_insert);

if(mysqli_query($con,$sql_insert)){
    echo "<script>alert('Cadastrado com sucesso!');window.location='index.php'</script>";
    
}
else{
    echo "<script>alert('Erro ao cadastrar, preencha novamente por favor!');window.location='Cadastro.php'</script>";
}
 mysqli_close($con);
?>