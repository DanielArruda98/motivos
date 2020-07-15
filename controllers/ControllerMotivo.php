<?php

    require_once '../classes/Motivo.class.php';
    require_once '../cards/alerts.php';

    $motivo = new Motivo();

    if(isset($_POST['btn_cadastro'])) {
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];

        if ($consulta = $motivo->cadastrar($titulo, $texto)) {
            alerta("Cadastro Realizado com Sucesso!", "../gerenciar/");
        } else {
            alerta("Erro ao Realizar Cadastro", "../gerenciar/");
        }
    }
    
    if(isset($_GET['excluir'])) {
        $id = $_GET['excluir'];

        if ($motivo->excluir($id)) {
            alerta("Excluído com sucesso!", "../gerenciar/listar.php");
        } else {
            alerta("Erro ao excluir!", "../gerenciar/listar.php");
        }
    }

    if(isset($_POST['btn_show_mensagens'])) {
        $number = $_POST['number'];

        $consulta = $motivo->consultar($number);

        foreach($consulta as $motivo) {
            mensagem($motivo['titulo'], $motivo['texto']);
        }
    }

    if(isset($_POST['total_mensagens'])) {
        echo count($motivo->listar());
    }

?>