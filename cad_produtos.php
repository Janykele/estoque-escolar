<?php

require_once "config.php";
require_once "./produtos/Produto.php";

$produto = new Produto();

if (isset($_POST["nome_produto"]) && isset($_POST["unidade_medida"])){
   $produto->cadastrar();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estiloproduto.css">
    <title>Entrada</title>
</head>
<body>

    <div class="menu">  
        <?php require_once "./menu.php";?>
    </div>  


    <div class="fundo">           
            
            <div class="container">
                <fieldset>
                    <legend> Cadastrar Produto </legend>
                    <form method="POST">
                        <div class="row">
                            <label>Nome Produto</label>
                            <input type="text" class="form-control" name="nome_produto"/>

                            <label>Unidade Medida</label>
                            <input type="text" class="form-control" name="unidade_medida"/>

                            <label>Data Validade</label>
                            <input type="date" class="form-control" name="data_validade"/> 

                            <label>id Nota</label>
                            <input type="number" class="form-control" name="id_nota"/>
                            
                            <label>id Fornecedor</label>
                            <input type="number" class="form-control" name="id_fornecedor"/>
                         
                            <label>id Recurso</label>
                            <input type="number" class="form-control" name="id_recurso"/>

                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>    
                    </form>
                </fieldset>
            </div> 

        </div>

        <footer class="menurp"><a href="" class="paragrafo">-->Desenvolvido pela Segunda Turma do Curso Técnico de Informática<--</a></footer>

    
</body>
</html>