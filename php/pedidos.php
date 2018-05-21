<!doctype html>
<html lang="en">
<?php require_once('init.php');?>
  <body>
    <main role="main">
      <h2>Todos os Pedidos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Cliente</th>
              <th>Data Entrega</th>
              <th>Data Pedido</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $PDO = db_connect();
            $pedidos = $PDO->query('SELECT p.cod_pedido, p.data_pedido, p.data_entrega, c.razao_social From pedido p
                                    INNER JOIN cliente c on c.cod_cliente = p.cod_cliente');
            if (is_array($pedidos) || is_object($pedidos))
              {
                foreach($pedidos as $pedido) {
                  echo ('	<tr>
                        <td>'. $pedido["cod_pedido"] .'</td>
                        <td>'. $pedido["razao_social"] .'</td>
                        <td>'. $pedido["data_entrega"] .'</td>
                        <td>'. $pedido["data_pedido"] .'</td>
                        <td class="align-middle"> 
                          <button id="btn-edit" type="button" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                          </button>
                        </td>
                        <td class="align-middle"> 
                          <button type="button" class="btn btn-default" aria-label="Left Align" onclick="deletePedido('.$pedido["cod_pedido"].')">
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
                
        <button type="button" class="btn" onclick="location.href='pedidos-cadastro.php'">
        Novo Pedido
      </button>
    </main>
    <script src="/js/dist/pedidos.js"></script>
  </body>
</html>
