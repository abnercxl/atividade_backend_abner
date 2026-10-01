<?php
    include "config/conexao.php";

    $id = intval($_POST["id"]);
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $dataEntrada = $_POST["dataEntrada"];
    $status = $_POST["status"];

    $sql = "UPDATE ordens_servico
            SET cliente = ?,
                equipamento = ?,
                problema = ?,
                dataEntrada = ?,
                status = ?
            WHERE id = ?";

    $stmt = $conexao -> prepare($sql);

    $stmt -> bind_param(
        "sssssi",
        $cliente,
        $equipamento,
        $problema,
        $dataEntrada,
        $status,
        $id
    );

    if ($stmt->execute()){
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar.";
    }    
?>

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
    
