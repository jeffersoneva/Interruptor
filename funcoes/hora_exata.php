<?php

    //DESENVOLVIDO POR JEFFERSON EVA

    //Definindo a configuração de caracteres
	header('Content-type: text/html; charset=utf-8');

	//Define Local e Timezone
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');

    //Agora vamos imprimir na tela os algarismos de horas, minutos e segundos

    echo '<div class="time">';
        echo '<div class="h">'.date("H").'</div>';
        echo '<div class="pontos">:</div>';
        echo '<div class="i">'.date("i").'</div>';
        echo '<div class="pontos">:</div>';
        echo '<div class="s">'.date("s").'</div>';
    echo '</div>';

?>