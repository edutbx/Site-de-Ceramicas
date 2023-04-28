<?php

include 'paginas/header.php';

$acao = filter_input(INPUT_POST, 'acao');

if($acao == "Colares"){
    include 'paginas/colares.php';
}else if($acao == "Brincos"){
    include 'paginas/brincos.php';
}else if($acao == "Enfeites"){
    include 'paginas/enfeites.php';
}else if($acao == "Outros"){
    include 'paginas/outros.php';
}else{
    include 'paginas/principal.php';
}



include 'paginas/footer.php';