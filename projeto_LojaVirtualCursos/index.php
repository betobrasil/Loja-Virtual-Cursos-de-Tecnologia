<!-- Inclui variáveis no header, então não preciso mais chamar o arquivo variáveis.php nas páginas em que tiver incluido o header. -->
<?php
    // include_once("config/variaveis.php");
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
    <title>Loja Virtual - Cursos de TI</title>
</head>

<body>

    <?php
        include_once("header.php");
    ?>
    
    <main>

        <section class="container mt-4">
            <div class="row justify-content-around">
            <?php if(isset($produtos) && $produtos != []){?>
                <?php 
                    foreach($produtos as $produto){

                    
                ?>
                    <div class="col-lg-3-card card text-center">

                        <div class="card" style="width: 18rem;">

                            <div class="card-body">
                             <!-- A etiqueta que chamo dentro de $produto é a mesma etiqueta do .json -->
                                <h5 class="card-title"><?php echo $produto["nome"]; ?></h5>

                                <img src="<?php echo $produto["img"]; ?>" class="card-img-top" alt="Imagem do curso">

                                <h5><?php echo $produto["preco"]; ?></h5>
                                <a href="carrinho.php?nomeProduto=<?php echo $produto["nome"];?>" class="btn btn-primary">Comprar</a>
                            </div>

                        </div> 

                    </div>
                <!-- Fechando foreach -->
                <?php } ?>
            <!-- Fechando if(isset) -->
            <?php } else { ?>
                <h2>Ops! Não temos cursos disponíveis no momento.</h2>
            <?php } ?>
                
                <!-- Faremos os outros cards usando php, e não mais manualmente como código abaixo     -->
                <!-- <div class="col-lg-3-card card text-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Matemática Interespacial</h5>
                            <img src="images/curso02.svg" class="card-img-top" alt="...">
                            <h5>R$ 59,00</h5>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>   
                </div>
                <div class="col-lg-3-card card text-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Inovação Digital</h5>
                            <img src="images/curso03.svg" class="card-img-top" alt="...">
                            <h5>R$ 79,00</h5>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>   
                </div> -->


            </div>
        </section>
    </main>    

    <?php
        // $nome = "Roberto";
        // $idade = 10;
        // //array numérico
        // $usuario = ["Roberto","Pretel",10, ["musica","cafe","artes"]];

        // $usuarioDois = ["nome" => "Roberto", "sobrenome" => "Santos"];

        // //var_dump($usuario);
        // //para adicionar um valor na última posição disponível do array:
        // $usuario[] = "guitarra";
        // //para adicionar um valor dentro do array, e na última posição disponivel dentro desse array:
        // $usuario[3][] = "violão";

        // echo "<br>";

        // //var_dump($usuario);
        // //imprimindo o array chamando pela posição
        // echo $usuario[1];
        // echo "<br>";
        // //imprimindo um array chamando pela etiqueta
        // echo $usuarioDois["sobrenome"];
        // echo "<br>";
        // //para imprimir um array dentro de um array
        // echo $usuario[3][1];
        
        // echo "<h1>".$usuario[0]." ".$usuario[1]." ".$usuarioDois["sobrenome"]."</h1>";

        // $numero = 2;
        // switch ($numero) {
        //     case 1:
        //         echo "o número é igual a 1";
        //     break;
        //     case 2:
        //         echo "o número é igual a 2";
        //     break;
        //     default:
        //         echo "o número é diferente de 1 e 2";
        //     break;
        // }

        // //If Ternário
        // $idade = 18;

        // echo $idade == 16?"pré-adolescente":"Não é";

        // //Testando if
        // $idade = 16;

        // if($idade < 16){
        //     echo "Não pode votar";
        // }
        // elseif($idade == 16 || $idade == 17){
        //     echo "Voto opcional";
        // }

    ?>
</body>
</html>