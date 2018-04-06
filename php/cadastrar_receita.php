<?php
//$conexao = mysql_connect ("localhost", "root", "bancoGND");
//mysql_select_db ("gnd_cervejaria", $conexao);

if ($_SERVER ['REQUEST_METHOD'] == 'POST')

{

    $nome_receita = $_POST ["nome_receita"];
    $dry_hopping = $_POST ["dry_hopping"];
    $comentario_receita = $_POST ["comentario_receita"];
    $malte = $_POST ["ingred1"];
    $lupulo = $_POST ["ingred2"];
    $levedura = $_POST ["ingred3"];
    $og = $_POST ["OG"];
    $fg = $_POST ["FG"];
    $ibu = $_POST ["IBU"];
    $abv = $_POST ["ABV"];
    $brassagem = $_POST ["brassagem"];
    $fervura = $_POST ["fervura"];
    $fermentacao = $_POST ["fermentacao"];
    $rampa = $_POST ["rampa"];
    $variacao_rampa = $_POST ["variacao"];
    $tempo_rampa =$_POST ["temperatura"];

    if ($_POST ["nome_receita"] == null && $dry_hopping = $_POST ["dry_hopping"] == null)
    {
        echo "preencher todos os itens";
    }

    else
    {

        $sql = "INSERT INTO cadastro_receita (nome_receita, dry_hopping, comentario_receita, malte, lupulo, levedura, og, fg, ibu, abv, brassagem, fervura, fermentacao, rampa, variacao_rampa, tempo_rampa) VALUES ('$nome_receita', '$dry_hopping', '$comentario_receita', '$malte','$lupulo', '$levedura', '$OG', '$FG', '$IBU', '$ABV', '$brassagem','$fervura', '$rampa', '$variacao', '$temperatura')";

        if (!$result) {
            //Irá apresentar qual o erro ocorreu ao executar a query
            die("Erro: " . mysqli_error());
        }
        else{

            echo "Receita cadastrada";
        }
    }

}
?>