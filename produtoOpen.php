<?php

$id_produto = $_POST["idProduto"];

if ($id_produto == 0) {
    echo ('no');
} else if ($id_produto == 1) {
    echo (file_get_contents('produtoId1.json'));
} else if ($id_produto == 2) {
    echo (file_get_contents('produtoId2.json'));
}
