<?php

// Constroi a URL base do site combinando o protocolo,
// nome do servidor, diretório atual e barra final.

$BASE_URL = "http://".$_SERVER['SERVER NAME'] 
.dirname($_SERVER["REQUEST_URI"]. '?').'';