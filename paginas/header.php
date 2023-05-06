<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="estilos/styleh.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oi igor</title>
</head>

<body>
    <header>
        <form action="index.php" method="post" class="formzera">
            <input type="image" img src="img/logo.svg" height="100px" class="p">
            <input type="submit" name="acao" value="Colares" class="button">
            <input type="submit" name="acao" value="Brincos" class="button">
            <input type="submit" name="acao" value="Enfeites" class="button">
            <input type="submit" name="acao" value="Outros" class="button">
        </form>
        <button type="submit" name="acaoo" value="menu" class="hideb">
            <img src="img/svg/menu.svg" alt="menu">
        </button>
        <div class="barra">
            <ul>
                <h1>Menu</h1>
                <form action="index.php" method="post">
                    <li>
                        <button type="submit" name="acao" value="Colares">
                            Colares
                        </button>
                    </li>
                    <li>
                        <button type="submit" name="acao" value="Brincos">
                            Brincos
                        </button>
                    </li>
                    <li>
                        <button type="submit" name="acao" value="Enfeites">
                            Enfeites
                        </button>
                    </li>
                    <li>
                        <button type="submit" name="acao" value="Outros">
                            Outros
                        </button>
                    </li>
                </form>
            </ul>
            <input type="submit" name="acaoo" value="Fechar" class="fechar">
        </div>
        <script src="paginas/menu.js"></script>
    </header>