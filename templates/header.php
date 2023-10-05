<?php
require_once ("herper/url.php");
?>

<link rel="stylesheet" href="<?=$BASE_URL ?>/css/style.css"> 

<!-- Importação da Font MontSerrat -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
</head>

<body>
     <header>
        <a href="<?=$BASE_URL ?>"id="logo">
        <img src="<?$BASE_?>/img/logo.svg" alt="Logo Blog">
      </a>
      <ul id="navbar">
        <li><a href="<?=$BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="<?=$BASE_URL ?>" class="nav-link">Categorias</a></li>
        <li><a href="<?=$BASE_URL ?>" class="nav-link">Sobre Nós</a></li>
        <li><a href="<?=$BASE_URL ?>/contato.php" 
        class="nav-link">Contato</a></li>
      </ul>
     </header>
</body>