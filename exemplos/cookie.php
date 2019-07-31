<?php


    //cookies - salva as informações do usuario (oque ele acessou) na maquina dele

    //exibe todos os cookies recebidos pelo php
    echo('exibindo cookies:<br>');
    print_r($_COOKIE);

    //determinando a exiração do cookie
    $expira= time() + 3600;

    //setando m cookie "nome"
    setcookie('nome','zwipp', $expira);

?>