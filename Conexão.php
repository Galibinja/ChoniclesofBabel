<?php
     $servidor = "localhost";
     $porta = 5432;
     $bancoDeDados = "d3doj7sr60nnpd";
     $usuario = "boupatzxmzekmi";
     $senha = "e0cca602f5fadf5a5a441770cc86406963028ba6286132960371c66e2397f7b7";

     $conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados " +
                                     "user=$usuario password=$senha");
     if(!$conexao) {
         die("Não foi possível se conectar ao banco de dados.");
     }
?>