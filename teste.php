<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Consome API</title>
  </head>

<?php

    $url = "http://localhost/estoque/produtos";
    $result = file_get_contents($url);
    $result = json_decode($result);
?>
    <body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Exibição de produtos</h1>
        </div>
    </div>
        <div class="container">
        <div class="row">      
        
<? foreach($result as $product){ ?> 
        <div class="card border-light mb-3" style="width: 18rem; margin:30px;">
            <div class="card-header">
                <? echo $product->nome?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Preco: <? echo $product->valor?></li>
                <li class="list-group-item">Quantidade: <? echo $product->quantidade?> </li>
            </ul>
        </div>
<?  }  ?>
    </div>
    </div>
       
    </body>
</html>