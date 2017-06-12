<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//Função valida e-mail
function EmailValidade($Email){
    if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
}

$Nome = "Ismael Paiva Madeira";
$Email = "cursos2@teste.com";

if(empty($Nome) || empty($Email)):
    echo "Ops: Informe Seu Nome e Email";
elseif(!EmailValidade($Email)):
    echo "Ops: Infome um e-mail válido!";
else:
    $Users = [
        'cursos@teste.com',
        'Ismael Paiva Madeira'
    ];
        if(in_array($Email, $Users)):
            echo "Ops. Você já é cadastrado. Quer Logar? <a href='#'>Sim</a>";
        else:
            echo "Cadastro com sucesso!";
        endif;
endif;