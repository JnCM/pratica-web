<?php
    include "connect_bd.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "(SELECT * FROM tbusuario WHERE email = '$username' AND senha = PASSWORD('$password'));";
    $result = mysqli_query($connectionBD, $query);
    $rows = mysqli_num_rows($result);
    
    if($rows == 0){
        $data = ['error' => 1, 'msg' => 'Usuario e/ou senha invalido(s)!'];
    }else{
        session_start();
        $_SESSION['login']  = $username;
        $_SESSION['password']= $password;
        $data = ['error' => 0];
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
