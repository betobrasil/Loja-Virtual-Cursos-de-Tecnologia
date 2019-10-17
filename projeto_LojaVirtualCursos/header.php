<?php
    include_once("variaveis.php");
?>

<header>
        <h1 id="logo">
            <?php echo $nomeSistema; ?>
        </h1>
        <!-- <img src="images/logo.png" alt="Logo"/> -->
        <nav>
            <ul>
                <!-- verificando se a variável usuário existe e se é diferente de vazia -->
                <?php
                    if(isset($usuario) && $usuario != []){
                ?>
                    <a href="index.php"><li>Cursos</li></a>
                    <a href="#"><li>Olá, <?php echo $usuario["nome"]; ?></li></a>
                <?php }else{ ?>
                    <a href="login.php"><li>Login</li></a>
                    <a href="#"><li>Cadastro</li></a>
                <?php } ?>
            </ul>
        </nav>
</header>

 <nav class="navbar-expand-sm bg-primary navbar-dark">    

            <ul class="nav justify-content-center">
              <!-- Verificando se existe a variável categoria e se ela não está vazia. -->
              <?php if(isset($categorias) && $categorias != []){?>

                  <?php 
                      foreach ($categorias as $categoria){?>   
                      <a class="nav-link" href="#"><li class="nav-item active"><?php echo $categoria;?></li></a>
                  <?php }?>

                 <!-- Fechando php que checa se a variável existe. -->
              <?php } ?>            
            </ul>            
 </nav>