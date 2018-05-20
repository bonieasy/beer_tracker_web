<!doctype html>
<html lang="en">
<?php require_once('init.php');?>
  <body>
    <main role="main">
      <h2>Todos os Ingredientes</h2>
      <div class="table-responsive" id="table">
        <table class="table table-striped table-sm" id="">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome do Ingrediente</th>
              <th>Descrção</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
            $PDO = db_connect();
            $ingredientes = $PDO->query('SELECT cod_ingrediente, nome_ingrediente, descricao_ingrediente From ingrediente');
            if (is_array($ingredientes) || is_object($ingredientes))
              {
                foreach($ingredientes as $ingrediente) {
                  echo ('	<tr>
                        <td class="align-middle">'. $ingrediente["cod_ingrediente"] .'</td>
                        <td class="align-middle">'. $ingrediente["nome_ingrediente"] .'</td>
                        <td class="align-middle">'. $ingrediente["descricao_ingrediente"] .'</td>
                        <td class="align-middle"> 
                          <button id="btn-edit" type="button" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                          </button>
                        </td>
                        <td class="align-middle"> 
                          <button type="button" class="btn btn-default" aria-label="Left Align" onclick="deleteIngrediente('.$ingrediente["cod_ingrediente"].')">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                          </button>
                        </td>
                      </tr>');
                }
              }
          ?>
          </tbody>
        </table>
      </div>
                
        <button type="button" class="btn" onclick="location.href='ingrediente-cadastro.php'">
        Novo Ingrediente
      </button>
    </main>

    <script src="/js/dist/ingredientes.js"></script>
  </body>
</html>
