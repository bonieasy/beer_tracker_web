<?php 
require_once('init.php');

    // pega o ID da URL
    $id = isset($_GET['codUsuario']) ? (int) $_GET['codUsuario'] : null;
 
    // valida o ID
    if (empty($id))
    {
        echo "ID para alteração não definido";
    exit;
    }

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