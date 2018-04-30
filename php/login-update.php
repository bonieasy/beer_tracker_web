<?php 
require_once('init.php');

        $PDO = db_connect();    
        $sql = 'UPDATE usuario SET nome_usuario=:nome, login_usuario=:login, email_usuario=:email';
		$sql .= 'WHERE cod_usuario = :cod_usuario';
 
			$stm = $conexao->prepare($sql);
            $stm->bindValue(':nome', $nome);
            $stm->bindValue(':login', $login);
			$stm->bindValue(':email', $email);

            if ($stmt->execute()){
                header('refresh:0');
            }
            else{
                $response_array['status'] = $stmt->errorInfo();
            }
?>