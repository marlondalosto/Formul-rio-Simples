<html>
<head>
    
<meta charset="UTF-8"/>


<title>Formulário</title>

</head>  

<body>
<div>


    <?php

    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $endereco = $_GET["endereco"];
    $sexo = $_GET["sexo"];
    $idade = date("Y") - $ano;
    
    echo "$nome é do sexo $sexo, reside no endereço $endereco e tem $idade anos.";

    ?>
<br/>
<br/>
    <!-- Aqui volta a página -->
    <a href="form.html">Voltar</a>
</div>

</body>


</html>