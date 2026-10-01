<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "assistencia_tecnica";
    $porta = "3308";

    $conexao = new mysqli(
        $host,
        $usuario,
        $senha,
        $banco,
        $porta
    );

    if ($conexao->connect_error){
        die("Erro ao conectar: " . $conexao->connect_error);
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
-->