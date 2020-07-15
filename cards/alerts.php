<?php

    function alerta($mensagem, $link) {
        echo "
        <script>
            alert('$mensagem');
            window.location='$link';
        </script>";
    }

    function mensagem($titulo, $texto) {
        echo "
        <div class='mensagem mb-3'>
            <div class='title-msg mt-2'>
                <h1>$titulo</h1>
            </div>
            
            <hr style='background-color: white;'>

            <div class='text-msg'>
                <p>$texto</p>
            </div>
        </div>";
    }
?>