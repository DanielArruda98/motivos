<?php
    require_once "../classes/Motivo.class.php";
    $motivo = new Motivo();

    $quantidade = count($motivo->listar());
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Motivos</title>

    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="m-2">
        <ul class="nav nav-tabs justify-content-end col-sm-5">
            <li class="nav-item">
                <a class="nav-link" href="../gerenciar/">Adicionar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listar.php">Listar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="">Dicas</a>
            </li>
        </ul>
    </nav>    
    
    <section class="col-sm-5 p-4">
        <table class="table">
            <tr>
                <td><strong><?php echo $quantidade; ?></strong> Mensagem(ns) Cadastrada(s)</td>
            </tr>
        </table>
    </section>
</body>
</html>