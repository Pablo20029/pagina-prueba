<?php      
    include('conexion.php');  
    $username = $_POST['ingUsuario'];  
    $password = $_POST['ingPass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($mysqli, $username);  
        $password = mysqli_real_escape_string($mysqli, $password);  
      
        $sql = "select *from usuarios where usuario = '$username' and password = '$password'";  
        $result = mysqli_query($mysqli, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo header("Location: mostrar_aspirante.php");  
        }  
        else{  
          header("HTTP/1.1 302 Moved Temporarily"); 
          header("Location: index.html"); 
        }     
?>