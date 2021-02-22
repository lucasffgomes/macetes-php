  
<?php
    function novaConexao($banco = 'NOME-DO-BANCO') {
        $servidor ='SERVIDOR';
        $usuario = 'USUARIO';
        $senha = 'SENHA';

        try {
            $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
            return $conexao;
        } catch(PDOException $erro) {
            die('Erro: ' . $erro->getMessage());
        }
    }

    novaConexao();