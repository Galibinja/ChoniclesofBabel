<?php session_start();


require('Conexão.php');

$username= (isset($_POST['username'])) ? $_POST['username'] : "";
$password= (isset($_POST['password'])) ? $_POST['password'] : "";
$email= $_POST["email"];
$role_id= "1";


$sql_insert = "INSERT INTO accounts (username,password,email,role_id) VALUES ('$username','$password','$email',$role_id) "; 
print_r($sql_insert);

if(mysqli_query($con,$sql_insert)){
    echo "<script>window.location='index.php'</script>";
    
}
else{

}
 mysqli_close($con);
?>