<?php
    require("Conexão.php");

    $cod= (isset($_GET['cod'])) ? $_GET['cod'] : "";

    


    $sql_delete = "DELETE FROM accounts WHERE user_id = '$cod'";

    print_r($sql_delete);

    if(mysqli_query($con,$sql_delete)){
        echo "<script>window.location='veruser.php'</script>";
    }else{
        echo "<script>alert('Erro ao alterar!');window.location='veruser.php'</script>";
    }

    mysqli_close($con);

?>