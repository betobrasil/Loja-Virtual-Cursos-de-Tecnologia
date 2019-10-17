<?php

  // Criando array de erros
  $erros = [];
  

  // Criando as funções de validação para os campos da tela  //

      function validaNome($nome){

          // A variável $erros foi declarada fora da função, no código, então preciso declarar como o escopo global.
          global $erros;
          if(strlen($nome) == 0){
              array_push($erros, "Preencha o campo nome.");
          }
      }

      function validaCPF ($cpf){

          // A variável $erros foi declarada fora da função, no código, então preciso declarar como o escopo global.
          global $erros;
          if(strlen($cpf) != 11){
              array_push($erros, "Por favor, preencha o CPF com 11 digitos.");
          }
      }

?>