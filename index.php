<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Curso PHP</title>
    <link rel="stylesheet" href="recursos/css/estilo.css" />
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <div class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?title=Olá PHP&dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?title=Integração HTML&dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?title=Integração CSS&dir=basico&file=css">Integração CSS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer class="rodape">CHARLLYS DE LIMA ₢ <?= date('Y'); ?></footer>
</body>

</html>