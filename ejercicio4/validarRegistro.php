<?php 

	
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['id_user'];
        $password = $_POST['id_pass'];

        foreach($registro as $keys => $valor){
            if($keys == $email && $valor == $password){
                header('Location: pagina.html');
            }
        }
    }

?>

