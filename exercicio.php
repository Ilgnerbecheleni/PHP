<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/exercicio.css">
    <title>Exercicio</title>
</head>
<body class="exercicio">
    
    <header class="cabecalho">
        <h1> PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
    <nav class="navegacao">
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>

    </nav>
    <main class="principal">
    <div class="conteudo">

    <?php 
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); // carrega um codigo php
    ?>

    </div>


    </main>
    <footer class="rodape">Ilgner © <?= date('d-m-Y');  ?></footer>
    





</body>
</html>