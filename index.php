<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $frase = 'ciao a tutti infami!';
    $censored = str_ireplace($_GET['censura'], '***', $frase);
        $frase_length = strlen($censure);
    ?>
    
    <p><?= $censored ?></p>
    <form method="GET" action="">
        <label for="censor">Censura una parola</label>
        <input type="text" id="censor" name="censura">
        <button>CENSURA</button>
    </form>
    <span><?= $frase_length ?> caratteri.</span>
</body>
</html>