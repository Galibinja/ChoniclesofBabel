<?php session_start();
if(!$_SESSION['logado']){
    echo "<script>alert('Por favor faça login para continuar.');window.location='index.php'</script>";
}

else{
	session_start();
	session_destroy();
    echo "<script>window.location='index.php'</script>";
}
?>