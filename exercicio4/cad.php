<!DOCTYPE html>
<html lang="pt-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
        // $nome = $_GET["nome"] ?? "NULO";
        // $idade = $_GET["idade"];

        // echo "<p>Nome: $nome</p>";
        // echo "<p>Idade: $idade</p>";
        // echo"                                                            ESTES DADOS SÃO PARA COLETAR NOME E IDADE E PRINTAR NA TELA
        // <p>
        //     é um prazer te conhecer $nome vi que sua idade é $idade
        // </p>";

        //_________________________________________________________________________________________________________________________________ 

        // $num = $_GET["num"];

        // $antes = $num - 1;
        // $depois = $num + 1;
        // echo "<p>O número digitado foi $num</p>";
        // echo "<p>O número anterior é $antes</p>";                             NUMERO ANTERIOR E POSTERIOR
        // echo "<p>O número posterior é $depois</p>";
        // echo "<p>O número posterior é " . ($num + 1) . "</p>";
        //_________________________________________________________________________________________________________________________________ 

        // $numeroSorteado = rand(1, 100);
        // echo "<p>O número sorteado é $numeroSorteado</p>";                           CRIANDO A FUNÇÃO DE SORTEIO



        $real = 1000;
        $cotacao = 5.50;
        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "O valor de " . numfmt_format_currency($padrao, $real, "BRL") . " reais em dólares é " . numfmt_format_currency($padrao, $dolar, "USD");

        ?>
        <!-- <button onclick="javascript:document.location.reload()">Deseja Sortear outro número?</button>                      GERAR O NUMERO NOVO RECARREGANDO A PAGINA-->
        <p>
            <a href="./index.html"> &#x2B05; Voltar a pagina anterior</a>
        </p>
    </main>
</body>

</html>