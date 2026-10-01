<?php
    include "config/conexao.php";

    $sql = "SELECT * FROM ordens_servico";
    $resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência Técnica</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Ordens de Serviço</h1>
        <a href="cadastrar.php" class="botao">Nova Ordem</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Equipamento</th>
                <th>Problema</th>
                <th>Data</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>

            <?php while ($ordem = $resultado->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $ordem["id"]; ?></td>
                    <td><?php echo $ordem["cliente"];?></td>
                    <td><?php echo $ordem["equipamento"]; ?></td>
                    <td><?php echo $ordem["problema"]; ?></td>
                    <td><?php echo $ordem["dataEntrada"]; ?></td>
                    <td><?php echo $ordem["status"]; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $ordem["id"];?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</body>
</html>

<!--------------------------------------------------------  comentários gerais  ---------------------------------------------------------

    toda classe tem atributos, que são características ouinformações que o objeto possui

-->

<!--------------------------------------------------  comentários gerais (códigos)  -----------------------------------------------------

    $................................... é usado para criar variaveis
    PDO................................. é um objeto
    echo................................ é o "print" do python (precisa ser "", não pode ser '')
    , 2, ",", "."....................... significa 2 casas depois da virgula, se fosse , 4, ",", "." seria 4 casas depois da virgula
    <br>................................ ele "pula" uma linha na pagina web
    function nome da função()........... é usado para criar uma função, os "()" são os parametros (obrigatorio ter os "()")
    return number_format................ é usado para retornar um formato especifico
    include............................. é usado para incluir um arquivo dentro do outro
-->