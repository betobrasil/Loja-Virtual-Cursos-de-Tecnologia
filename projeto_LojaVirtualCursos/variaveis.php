<?php
    session_start();

    $nomeSistema = "Cursos de Tecnologia";

    // verificar se o usuario logou no navegador
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : [];

    // Variavel que guarda o nome do arquivo produtos.json 
    $nomeArquivo = "produtos.json";

    // Abrindo e já transformando o arquivo json em um array associativo. O true é para transformar em um array, false transforma em um objeto.
    $produtos = json_decode(file_get_contents($nomeArquivo),true);

    // Variavel do tipo array que guarda os nomes dos itens do menu de opções   
    $categorias = ["Cursos","Palestras","Artigos","Contato"];
    


    // $usuario = ["nome"=>"Roberto"];

    // $produtos = [
    //     ["nome"=>"Planejamento estratégico","preco"=>"R$ 2.900,00","duracao"=>"2 meses","img"=>"images/curso01.svg"],
    //     ["nome"=>"Matemática Interespacial","preco"=>"R$ 1.900,00","duracao"=>"3 meses","img"=>"images/curso02.svg"],
    // ];

?>