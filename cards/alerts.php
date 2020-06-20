<?php

    function alerta($mensagem, $link) {
        echo "
        <script>
            alert('$mensagem');
            window.location='$link';
        </script>";
    }

?>