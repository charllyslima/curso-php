<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Exercicio</title>
    <link rel="stylesheet" href="recursos/css/estilo.css" />
    <link rel="stylesheet" href="recursos/css/exercicio.css" />
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização Exercicio</h2>
    </header>
    <nav class="navegacao">
        <a href="index.php" class="vermelho">Voltar</a>
        <?php if (isset($_GET['font']) && !empty($_GET['font'])) { ?>
            <a href="?title=<?= $_GET['title'] ?>&dir=<?= $_GET['dir'] ?>&file=<?= $_GET['file'] ?>" class="azul">Resultado</a>
        <?php } else { ?>
            <a href="?title=<?= $_GET['title'] ?>&dir=<?= $_GET['dir'] ?>&file=<?= $_GET['file'] ?>&font=1" class="azul">Código Fonte</a>
        <?php } ?>
        <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem Formatação</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <div class="titulo"><?= $_GET['title'] ?? '' ?></div>
            <div class="saida">

                <?php
                if (isset($_GET['font']) && !empty($_GET['font'])) {
                    echo nl2br(file_get_contents(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php", true));
                } else {
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                }
                ?>
            </div>
        </div>
    </main>
    <footer class="rodape">CHARLLYS DE LIMA ₢ <?= date('Y'); ?></footer>
</body>

</html>