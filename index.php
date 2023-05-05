<?php

include 'paginas/header.php';

$acao = filter_input(INPUT_POST, 'acao');

if ($acao == "Colares") {
    include 'paginas/colares.php';
    $edu = "colares";
} else if ($acao == "Brincos") {
    include 'paginas/brincos.php';
    $edu = "brincos";
} else if ($acao == "Enfeites") {
    include 'paginas/enfeites.php';
    $edu = "enfeites";
} else if ($acao == "Outros") {
    include 'paginas/outros.php';
    $edu = "enfeites";
} else if ($acao == "Criadora") {
    include 'paginas/cria.php';
} else if ($acao == "Desenvolvedores do site") {
    include 'paginas/devs.php';
} else if ($acaoo == "menu") {
    
} else {
    include 'paginas/principal.php';
    $edu = "principal";
}



include 'paginas/footer.php';
