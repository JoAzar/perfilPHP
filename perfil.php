
<?php $usr= "f0ll0wB4ck"; $infinito = "../definiciones.php"; $usr2 = "sys0ut"; ?>;
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Perfil</title>
        <link rel="stylesheet" href="r4inb0w">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    </head>

    <body class="bodyTigre">
        <br><h1 class="bienvPerfil">
            <?php            
                $num = random_int(1, 3);
                if ($num === 1) {
                    echo "BIENVENIDO A SU PERFIL";
                } 
                if($num === 2){
                    echo "/*-´-_*-/-_*¨[#_%-:]";
        
                }
                if($num === 3){
                    echo "B13NV3N1D0 4 SU P3RF1L";
                }
            ?>
        </h1>
                
        <?php
            require $infinito;
            echo menuPerfil2;
        ?> 
    </body>
</html>