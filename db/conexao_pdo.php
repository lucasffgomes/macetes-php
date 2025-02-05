<?php
    // ----------------------------------------------------------------
    // Conexão inicial com banco de dados com PHP e MySQL via PDO
    // 
    // por Lucas Gomes
    // criado em 22/fevereiro/2021
    // ----------------------------------------------------------------


    function novaConexao($banco = 'NOME-DO-BANCO') {
        $servidor ='SERVIDOR';
        $usuario = 'USUARIO';
        $senha = 'SENHA';

        try {
            $conexao = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);
            return $conexao;
        } catch(PDOException $erro) {
            die('Erro: ' . $erro->getMessage());
        }
    }

    novaConexao();