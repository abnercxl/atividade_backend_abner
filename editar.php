<?php
    include "config/conexao.php";

    $id = intval($_GET["id"]);

    $sql = "SELECT * FROM ordens_servico WHERE
            id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $ordem = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ordem</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Editar Ordem de Serviço</h1>
        <form action="atualizar.php" method="POST">
            <input 
                type="hidden"
                name="id"
                value="<?php echo $ordem["id"];?>"
            >
            <label>Cliente</label>
            <input
                type="text"
                name="cliente"
                value="<?php echo htmlspecialchars($ordem["cliente"]);?>"
                required
            >
            <label>Equipamento</label>
            <input
                type="text"
                name="equipamento"
                value="<?php echo htmlspecialchars($ordem["equipamento"]);?>"
                required
            >
            <label>Problema</label>
            <textarea name="problema" required>
                <?php echo htmlspecialchars($ordem["problema"]);?>            
            </textarea>

            <label>Data de entrada</label>
            <input
                type="date"
                name="dataEntrada"
                value="<?php echo $ordem["dataEntrada"]; ?>"
                required
            >
            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em análise">Em análise</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Concluído">Concluído</option>
            </select>

            <button type="submit">Atualizar</button>
        </form>
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
    type="hidden"....................... não mostra isso pro cliente
    $_POST.............................. é uma varialvel especial do php, recebe dados enviados pelo formulario qnd usamos o method="post" do html.
    
-->