<?php

require_once('init.php');


if (isset($_POST["submit"]))

{
    // Banco receita

    $nome_receita = $_POST ["nome_receita"];
    $descricao_receita = $_POST ["comentario_receita"];
    $indice_og = $_POST ["OG"];
    $indice_fg = $_POST ["FG"];
    $indice_ibu = $_POST ["IBU"];
    $indice_abv = $_POST ["ABV"];
    $tempo_brasagem = $_POST ["brassagem"];
    $tempo_fervura = $_POST ["fervura"];
    $tempo_fermentacao = $_POST ["fermentacao"];
    $tempo_repouso = $_POST ["rampa"];
    $tempo_variacao = $_POST ["variacao"];
    
    $ingrediente1 = $_POST ["ingred1"];

        $PDO = db_connect();

        $sql = "INSERT INTO receita
        (nome_receita,
        descricao_receita,
        indice_og,
        indice_fg,
        indice_ibu,
        indice_abv,
        tempo_brasagem,
        tempo_fervura,
        tempo_fermentacao,
        tempo_repouso,
        tempo_variacao) VALUES ('$nome_receita', '$descricao_receita', '$indice_og', '$indice_fg', '$indice_ibu', '$indice_abv', '$tempo_brasagem','$tempo_fervura', '$tempo_fermentacao', '$tempo_repouso', '$tempo_variacao')";          
        
    
        //$sql = "INSERT INTO ingrediente_receita
           // (cod_ingrediente, cod_receita, quantidade, preco_ingrediente)
             //   VALUES ('$cod_ingrediente', '$cod_receita', '$quantidade', '$preco_ingrediente')";



        $stmt = $PDO->prepare($sql);

       if ($stmt->execute()){         
        
        echo "Receita cadastrada";    

       }

       else
        {
           print_r($stmt->errorInfo());
       }
}

?>