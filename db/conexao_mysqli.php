<?php
    // ----------------------------------------------------------------
    // Conexão inicial com banco de dados com PHP e MySQL via MySQLi
    // 
    // por Lucas Gomes
    // criado em 22/fevereiro/2021
    // ----------------------------------------------------------------


    function novaConexao($banco = 'NOME-DO-BANCO') {
        $servidor ='SERVIDOR';
        $usuario = 'USUARIO';
        $senha = 'SENHA';

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        if($conexao->connect_error) {
            die('Erro: '. $conexao->connect_error);
        }

        return $conexao;
    }