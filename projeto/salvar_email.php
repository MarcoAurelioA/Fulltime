<?php

include "helper.php";
function validaemail($email){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    else
    return true;
}
try {

$email = $_POST["email"];


if(validaemail($email)){
    echo "Email ". $email ." Salvo com sucesso";
    salvarEmailNoBanco($email);
}

else
echo "Email inválido!";
    
} catch (\PDOException $e) {
    die($e->getMessage());
}

?>



