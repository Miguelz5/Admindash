<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ARRUMAR AINDA">

    <title>Dashboard</title>
    
    
</head>
<body>
<div class="pagina">

    <?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['id'])) {
        echo '<h1>Você não pode acessar esta página porque não está logado.</h1>'; 
        echo '<h1><a href="login.php">Entrar</a></h1>';
        die();
    }
    ?>
</div>
</body>
</html>