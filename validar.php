<?php

include_once "conexao.php";

$dados_login = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados_login['cpf'])){
    $retorna = ['erro'=> true, 'msg' => "<div class='msgAlertErroLogin'>Erro: Necessário preencher o campo usuário!</div>"];
}elseif(empty($dados_login['senha'])){
    $retorna = ['erro'=> true, 'msg' => "<div class='msgAlertErroLogin'>Erro: Necessário preencher o campo senha!</div>"];
}
else{
    $retorna = ['erro'=> false, 'msg' => "<div class='msgAlertErroLogin'>Validar!</div>"];
}


echo json_encode($retorna);


