<!doctype html>
<html>
    <head>
        <title>LISTAS DE PRODUTOS,</title>
        <meta charset="utf-8">
    </head>
    <body>
             <h1>Produtos</h1>
             <a href="index.php?controle=produtocontroller&metodo=inserir">NOVO PRODUTO</a>
             <table border="1">
                <tr>
                    <th>Produtos</th>
                    <th>Preco</th>
                    <th>estoque</th>
                    <th>ações</th>
                </tr>
                <?php
                    foreach($resultado as $dados)
                    {
                        $preco = number_format($dados->preco,2,",",".");
                        echo "<tr>
                                <td>{$dados->nome}</td>
                                <td>{$preco}</td>
                                <td>{$dados->estoque}</td>
                                <td><a href='index.php?controle=produtocontroller&metodo=alterar&id={$dados->id_produto}'>Alterar</a>&nbsp;&nbsp;
                                <a href='index.php?controle=produtocontroller&metodo=excluir&id={$dados->id_produto}'>Excluir</a>;  
                                </td>
                              </tr>";
                    }
                ?>
            </table>
    </body>

  </html>